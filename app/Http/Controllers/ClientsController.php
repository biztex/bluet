<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Models\Client;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    // 一覧画面
    public function register()
    {
        return view('client.auth.register');
    }
    // 一覧画面
    public function index()
    {
        return view('client.index');
    }
    // 一覧画面 users
    public function indexUser()
    {
        return view('client.users.index');
    }
    // 作成画面 
    public function create()
    {
        return view('client.create');
    }
    // 作成画面 users
    public function createUser()
    {
        return view('client.users.create');
    }
    // 作成処理
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'unique:clients', 'max:50'],
            'password' => 'required|between:8,20|confirmed', 'password_confirmation' => 'required',
        ];
        $this->validate($request, $rules);
        $clients = new Client;
        $clients->company_id = 1;
        $clients->name = $request->name;
        $clients->email = $request->email;
        $clients->password = Hash::make($request->password);
        $clients->save();
        return redirect('/client')->with('message', '追加が完了しました');
    }
    // 作成処理 users
    public function storeUser(Request $request)
    {
         $rules = [
             'name_last' => ['required', 'string', 'max:50'],
             'name_first' => ['required', 'string', 'max:50'],
             'kana_last' => ['required', 'regex:/^[ァ-ヾ　〜ー]+$/u', 'max:50'],
             'kana_first' => ['required', 'regex:/^[ァ-ヾ　〜ー]+$/u', 'max:50'],
             'tel' => ['required', 'string', 'max:13'],
             'tel2' => ['nullable', 'string', 'max:13'],
             'email' => ['required', 'email', 'unique:users', 'max:255'],
             'email2' => ['nullable', 'string', 'max:255'],
             'customer_number' => ['nullable', 'string', 'max:255'],
             'gender' => ['nullable', 'numeric'],
             'birth_day' => ['nullable', 'date'],
             'postal_code' => ['required', 'string', 'max:8'],
             'prefecture' => ['required', 'string', 'max:5'],
             'address' => ['required', 'string', 'max:500'],
             'memo' => ['nullable', 'string', 'max:500'],
             'password' => 'required|between:8,20|confirmed', 'password_confirmation' => 'required',
         ];
         $this->validate($request, $rules);
         $users = new User;
         $users->name_last = $request->name_last;
         $users->name_first = $request->name_first;
         $users->kana_last = $request->kana_last;
         $users->kana_first = $request->kana_first;
         $users->tel = $request->tel;
         $users->tel2 = $request->tel2;
         $users->email = $request->email;
         $users->email2 = $request->email2;
         $users->customer_number = $request->customer_number;
         $users->gender = $request->gender;
         $users->birth_day = $request->birth_day;
         $users->postal_code = $request->postal_code;
         $users->prefecture = $request->prefecture;
         $users->address = $request->address;
         $users->memo = $request->memo;
         $users->password = Hash::make($request->password);
         $users->save();
         return redirect('/client/users')->with('message', '追加が完了しました');
    }


    // 詳細画面
    public function show($id)
    {
    }

    // 編集画面
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('client.edit', compact('clients'));
    }
    // 編集画面 users
    public function editUser($id)
    {
        $users = User::find($id);
        return view('client.users.edit', compact('users'));
    }
 
    // 更新処理
    public function update(Request $request, $id)
    {
         $rules = [
             'name' => ['required', 'string', 'max:50'],
             'email' => ['required', 'email', \Illuminate\Validation\Rule::unique("clients")->ignore($id), 'max:255'],
         ];
         if (!empty($request->password)) {
             $rules = [
                 'password' => 'required|between:8,20|confirmed', 'password_confirmation' => 'required',
             ];
         }
         $this->validate($request, $rules);
         $clients = Client::find($id);
         $clients->email = $request->email;
         $clients->name = $request->name;
         if (!empty($request->password)) {
             $clients->password = Hash::make($request->password);
         }
         $clients->save();
         return redirect()->back()->with('message', '変更が完了しました');
    }
    // 更新処理 users
    public function updateUser(Request $request, $id)
    {
         $rules = [
             'name_last' => ['required', 'string', 'max:50'],
             'name_first' => ['required', 'string', 'max:50'],
             'kana_last' => ['required', 'regex:/^[ァ-ヾ　〜ー]+$/u', 'max:50'],
             'kana_first' => ['required', 'regex:/^[ァ-ヾ　〜ー]+$/u', 'max:50'],
             'tel' => ['required', 'string', 'max:13'],
             'tel2' => ['nullable', 'string', 'max:13'],
             'email' => ['required', 'email', \Illuminate\Validation\Rule::unique("clients")->ignore($id), 'max:255'],
             'email2' => ['nullable', 'string', 'max:255'],
             'customer_number' => ['nullable', 'string', 'max:255'],
             'gender' => ['nullable', 'numeric'],
             'birth_day' => ['required', 'date'],
             'postal_code' => ['required', 'string', 'max:8'],
             'prefecture' => ['required', 'string', 'max:5'],
             'address' => ['required', 'string', 'max:500'],
             'memo' => ['nullable', 'string', 'max:500'],
         ];
         if (!empty($request->password)) {
             $rules = [
                 'password' => 'required|between:8,20|confirmed', 'password_confirmation' => 'required',
             ];
         }
         $this->validate($request, $rules);
         $users = User::find($id);
         $users->name_last = $request->name_last;
         $users->name_first = $request->name_first;
         $users->kana_last = $request->kana_last;
         $users->kana_first = $request->kana_first;
         $users->tel = $request->tel;
         $users->tel2 = $request->tel2;
         $users->email = $request->email;
         $users->email2 = $request->email2;
         $users->customer_number = $request->customer_number;
         $users->gender = $request->gender;
         $users->birth_day = $request->birth_day;
         $users->postal_code = $request->postal_code;
         $users->prefecture = $request->prefecture;
         $users->address = $request->address;
         $users->memo = $request->memo;
         if (!empty($request->password)) {
             $users->password = Hash::make($request->password);
         }
         $users->save();
         return redirect()->back()->with('message', '変更が完了しました');
    }

    // 複製処理
    public function replicate($id)
    {
        $oldrow = Client::find($id);
        $newrow = $oldrow->replicate();
        $newrow->save();
        return redirect()->back();
    }

    // 削除処理
    public function destroy($id)
    {
        $clients = Client::destroy($id);
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
        $clients = Client::destroy($ids);
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
           $result = Client::all();
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
           $result = Client::select()
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

    // ユーザー情報CSVダウンロード
    public function downloadUserCsv()
    {
        // コールバック関数に１行ずつ書き込んでいく処理を記述
        $callback = function () {
            // 出力バッファをopen
            $stream = fopen('php://output', 'w');
            // 文字コードをShift-JISに変換
            stream_filter_prepend($stream, 'convert.iconv.utf-8/cp932//TRANSLIT');
            // ヘッダー行
            fputcsv($stream, [
    	    'id',
    	    'is_member（1=会員）',
    	    'name_last',
    	    'name_first',
    	    'kana_last',
    	    'kana_first',
    	    'tel',
    	    'tel2',
    	    'email',
    	    'gender（0=回答なし,1=男性,2=女性）',
    	    'birth_day',
    	    'postal_code',
    	    'prefecture',
    	    'address',
    	    'created_at',
    	    'updated_at',
            ]);
            // データ
            $users = User::orderBy('id', 'asc');
            // ２行目以降の出力
            // cursor()メソッドで１レコードずつストリームに流す
            foreach ($users->cursor() as $user) {
                fputcsv($stream, [
                    $user->id,
                    $user->is_member,
                    $user->name_last,
                    $user->name_first,
                    $user->kana_last,
                    $user->kana_first,
                    $user->tel,
                    $user->tel2,
                    $user->email,
                    $user->gender,
                    $user->birthday,
                    $user->postal_code,
                    $user->prefecture,
                    $user->address,
                    $user->created_at,
                    $user->updated_at,
                ]);
            }
            fclose($stream);
        };
        // 保存ファイル名
        $filename = sprintf('会員リスト_%s.csv', date('Ymd'));
    	
        // ファイルダウンロードさせるために、ヘッダー出力を調整
        $header = [
            'Content-Type' => 'application/octet-stream',
        ];
        return response()->streamDownload($callback, $filename, $header);
    }
}

