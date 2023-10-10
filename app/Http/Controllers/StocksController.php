<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Models\Stock;
use App\Models\User;
use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class StocksController extends Controller
{
    // 一覧画面
    public function index($year = null, $month = null, $plan_id = null)
    {
        $company_id = auth()->user()->company_id;
        $plans = Plan::where('company_id', $company_id)
        ->orderBy('sort', 'asc')
        ->where('sort', '!=', '')
        ->get();
        if (!$year) {
            $year = date('Y');
        }
        if (!$month) {
            $month = date('m');
        }
        $dates = $this->getCalendarDates($year, $month);
        if (!$plan_id) {
            $plan = Plan::where('company_id', $company_id)
            ->orderBy('sort')
            ->where('sort', '!=', '')
            ->first();
            $plan_id = $plan->id;
        }
        $default_plan = Plan::where('id', $plan_id)->first();
        $stocks = Stock::where('plan_id', $plan_id)->get();
        return view('client.stocks.index', compact('dates', 'year', 'month', 'plans', 'default_plan', 'stocks'));
    }
    // 作成画面 
    public function create()
    {
    }
    // 作成処理
    public function store(Request $request)
    {
    }
    // 作成処理 users
    public function storeUser(Request $request)
    {
    }
    // 詳細画面
    public function show($id)
    {
    }
    // 編集画面
    public function edit($id)
    {
        $stocks = Stock::find($id);
        return view('client.edit', compact('stocks'));
    }
    // 更新処理
    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);
        foreach($request->limit_number as $ln) {
            if ($ln > $plan->res_limit_number) {
                throw ValidationException::withMessages(['limit_number' => '上限値を超えた在庫数は設定できません']);
            }
        }
        $stocks = $plan->stocks;
        foreach ($request->days as $i => $day) {
            if ($request->res_type[$i] == $plan->res_type && $request->limit_number[$i] == $plan->res_limit_number){
                foreach ($stocks as $stock) {
                   if ($day == $stock->res_date) {
                       $stock = Stock::find($stock->id);
                       $stock->is_active = $request->is_active[$i];
                       $stock->res_type = $request->res_type[$i];
                       $stock->limit_number = $request->limit_number[$i];
                       $stock->save(); 
                       break 1;
                   }
                }
            }
        }
        foreach ($request->days as $i => $day) {
            if ($request->res_type[$i] != $plan->res_type || $request->limit_number[$i] != $plan->res_limit_number){
                foreach ($stocks as $stock) {
                   if ($day == $stock->res_date) {
                       $stock = Stock::find($stock->id);
                       $stock->is_active = $request->is_active[$i];
                       $stock->res_type = $request->res_type[$i];
                       $stock->limit_number = $request->limit_number[$i];
                       $stock->save(); 
                    } 
                }
                $stock_result = Stock::where('res_date', $day)->where('plan_id', $plan->id)->first();
                if (!$stock_result){
                    $new_row = new Stock();
                    $new_row->res_date = $day;
                    $new_row->plan_id = $plan->id;
                    $new_row->is_active = $request->is_active[$i];
                    $new_row->res_type = $request->res_type[$i];
                    $new_row->limit_number = $request->limit_number[$i];
                    $new_row->save(); 
                }
            }
        }
        return redirect()->back()->with('message', '変更が完了しました');
    }

    // 複製処理
    public function replicate($id)
    {
        $oldrow = Stock::find($id);
        $newrow = $oldrow->replicate();
        $newrow->save();
        return redirect()->back();
    }

    // 削除処理
    public function destroy($id)
    {
        $stocks = Stock::destroy($id);
        return redirect()->back();
    }
    // 削除処理 users
    public function destroyUser($id)
    {
        $users = User::destroy($id);
        return redirect()->back();
    }

    // 選択削除処理
    public function destroySelected(Request $request)
    {
        $ids = explode(',', $request->ids);
        $stocks = Stock::destroy($ids);
        return redirect()->back();
    }
    // 選択削除処理 users
    public function destroySelectedUser(Request $request)
    {
        $ids = explode(',', $request->ids);
        $users = User::destroy($ids);
        return redirect()->back();
    }

    // JSON返却
    public function json()
    {
        try {
           $result = Stock::all();
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    // JSON返却 users
    public function jsonUser()
    {
        try {
           $result = User::all();
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    // 絞り込みJSON返却
    public function jsonSpecific($category)
    {
        try {
           $result = Stock::select()
               ->where('category', $category)
               ->get();
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    // 上記メソッド内ファンクション
    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }

    // API
    public function indexJson($year = null, $month = null, $plan_id = null)
    {
//        $company_id = auth()->user()->company_id;
        $company_id = 1;
        $plans = Plan::where('company_id', $company_id)
        ->orderBy('sort', 'asc')
        ->where('sort', '!=', '')
        ->get();
        if (!$year) {
            $year = date('Y');
        }
        if (!$month) {
            $month = date('m');
        }
        $dates = $this->getCalendarDates($year, $month);
        if (!$plan_id) {
            $plan = Plan::where('company_id', $company_id)
            ->orderBy('sort')
            ->where('sort', '!=', '')
            ->first();
            $plan_id = $plan->id;
        }
        $default_plan = Plan::where('id', $plan_id)->first();
        $stocks = Stock::where('plan_id', $plan_id)->get();
        $array_data = [];
        $array_data['dates'] = $dates;
        $array_data['stocks'] = $stocks;
        return $array_data;
    }
    // カレンダー表示
    public function getCalendarDates($year, $month)
    {
        $dateStr = sprintf('%04d-%02d-01', $year, $month);
        $date = new Carbon($dateStr);
        $days = $date->daysInMonth; // 月に何日あるか取得
        $daysParWeek = $date::DAYS_PER_WEEK; // 1週の日数を取得(デフォルトは 7 が設定されている)
        $dayOfWeek = $date->startOfMonth()->dayOfWeek; // 1日の曜日(int)を取得
        $last_week =  (int) ceil(($days - ($daysParWeek - $dayOfWeek)) / $daysParWeek) + 1; // 最終日が何週目か計算
        $date->subDay($date->dayOfWeek); // 1日より前の日で埋める
        $count = 0;
        if ($last_week == 5) {
            $count = 35; //5週目で終わりの月は35マス分を埋めて終わり
        } else {
            $count = 42; //6週目で終わりの月は42マス分を埋めて終わり
        }
        $dates = [];
        for ($i = 0; $i < $count; $i++, $date->addDay()) {
            $dates[] = $date->copy();
        }
        return $dates;
    }
}
