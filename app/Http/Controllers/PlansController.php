<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Models\Plan;
use App\Models\Genre;
use App\Models\Activity;
use App\Models\Price;
use App\Models\Stock;
use App\Models\PriceType;
use Auth;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PlansController extends Controller
{
    // 一覧画面
    public function index()
    {
        return view('client.plans.index');
    }
    // 作成画面 
    public function create()
    {
        $plans = Plan::all();
        $categories = Genre::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->orderBy('id')
            ->get();
        $genres = Genre::all();
        $price_types = PriceType::orderBy('sort')->get();
        return view('client.plans.create', compact('plans', 'categories', 'genres', 'price_types'));
    }
    // 作成処理
    public function store(Request $request)
    {
        ini_set('memory_limit', '256M');
        $rules = [
            'kind' => ['required'],
            'is_listed' => ['required'],
            'name' => ['required', 'string', 'max:100'],
            'catchphrase' => ['required', 'string', 'max:300'],
            'description' => ['required', 'string', 'max:1200'],
            'start_day' => ['required', 'date'],
            'end_day' => ['required', 'date', 'after_or_equal:start_day'],
            'repetition_flag' => ['required'],
            'repetition_day' => ['nullable', 'numeric'],
            'holiday_selected' => ['required'],
            'holiday_nonselected' => ['required'],
            'is_autoextend' => ['required'],
            'time_hour' => ['required', 'numeric'],
            'time_minute' => ['required', 'numeric'],
            'age_from' => ['nullable', 'numeric'],
            'age_to' => ['nullable', 'numeric'],
            'res_type' => ['required'],
            'res_end_flag' => ['required'],
            'res_before_day' => ['required', 'numeric'],
            'res_before_type' => ['required'],
            'res_before_time' => ['required', 'numeric'],
            'res_end_day' => ['required', 'numeric'],
            'res_end_type' => ['required'],
            'res_end_time' => ['required', 'numeric'],
            'req_before_day' => ['required', 'numeric'],
            'req_before_type' => ['required'],
            'req_before_time' => ['required', 'numeric'],
            'res_limit_flag' => ['required'],
            'res_limit_number' => ['required', 'numeric'],
            'min_number' => ['required', 'numeric'],
            'max_number' => ['required', 'numeric'],
            //'payment_method' => ['required', 'numeric'],
            'etc_card_name' => ['nullable', 'string', 'max:50'],
            'payment_comment' => ['nullable', 'string', 'max:200'],
            'is_discount' => ['required'],
            'included_item' => ['nullable', 'string', 'max:100'],
            'place_name' => ['required', 'string', 'max:120'],
            'place_postalcode' => ['nullable', 'string', 'max:8'],
            'place_prefecture' => ['nullable', 'string', 'max:5'],
            'place_address' => ['nullable', 'string', 'max:100'],
            'place_access' => ['nullable', 'string', 'max:120'],
            'place_latitude' => ['required', 'string', 'max:50'],
            'place_longitude' => ['required', 'string', 'max:50'],
            'meeting_point_flag' => ['required', 'numeric'],
            'question_flag' => ['required'],
            'question_content' => ['nullable', 'string', 'max:1200'],
            'caution_flag' => ['required'],
            'caution_content' => ['nullable', 'string', 'max:5000'],
            'item' => ['nullable', 'string', 'max:1000'],
            'wear' => ['nullable', 'string', 'max:1000'],
            'file_path1' => 'required_without:old_file_path1|mimes:jpeg,jpg,png,gif|max:500000',
            'old_file_path1' => 'required_without:file_path1|string|max:1000',
            'file_path2' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path3' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path4' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path5' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path6' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path7' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path8' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path9' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path10' => 'mimes:jpeg,jpg,png,gif|max:500000',
        ];
/*
        if ($request->payment_method == 0 || $request->payment_method == 3) {
            $p_rules = [
                'cache_flag' => ['required_without:card_flag'],
                'card_flag' => ['required_without:cache_flag'],
            ];
            $rules = array_merge($rules, $p_rules);
        }
*/
        if ($request->meeting_point_flag == 1) {
            $m_rules = [
                'meeting_point_name' => ['required', 'string', 'max:120'],
                'meeting_point_postalcode' => ['nullable', 'string', 'max:8'],
                'meeting_point_prefecture' => ['nullable', 'string', 'max:5'],
                'meeting_point_address' => ['nullable', 'string', 'max:100'],
                'meeting_point_access' => ['nullable', 'string', 'max:120'],
                'meeting_point_latitude' => ['required', 'string', 'max:50'],
                'meeting_point_longitude' => ['required', 'string', 'max:50'],
            ];
            $rules = array_merge($rules, $m_rules);
        }
        $a_rules1 = [
            // 体験時間join
            'activity_name1' => ['required'],
            'activity_is_overday1' => ['required'],
            'activity_start_hour1' => ['required'],
            'activity_start_minute1' => ['required'],
            'activity_end_hour1' => ['required'],
            'activity_end_minute1' => ['required'],
            'activity_period_flag1' => ['required'],
            'activity_start_day1' => ['nullable', 'date'],
            'activity_end_day1' => ['nullable', 'date'],
        ];
        $rules = array_merge($rules, $a_rules1);
        if ($request->{'add-activity'} >= 2) {
            $a_rules2 = [
                // 体験時間join
                'activity_name2' => ['required'],
                'activity_is_overday2' => ['required'],
                'activity_start_hour2' => ['required'],
                'activity_start_minute2' => ['required'],
                'activity_end_hour2' => ['required'],
                'activity_end_minute2' => ['required'],
                'activity_period_flag2' => ['required'],
                'activity_start_day2' => ['nullable', 'date'],
                'activity_end_day2' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules2);
        }
        if ($request->{'add-activity'} >= 3) {
            $a_rules3 = [
                // 体験時間join
                'activity_name3' => ['required'],
                'activity_is_overday3' => ['required'],
                'activity_start_hour3' => ['required'],
                'activity_start_minute3' => ['required'],
                'activity_end_hour3' => ['required'],
                'activity_end_minute3' => ['required'],
                'activity_period_flag3' => ['required'],
                'activity_start_day3' => ['nullable', 'date'],
                'activity_end_day3' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules3);
        }
        if ($request->{'add-activity'} >= 4) {
            $a_rules4 = [
                // 体験時間join
                'activity_name4' => ['required'],
                'activity_is_overday4' => ['required'],
                'activity_start_hour4' => ['required'],
                'activity_start_minute4' => ['required'],
                'activity_end_hour4' => ['required'],
                'activity_end_minute4' => ['required'],
                'activity_period_flag4' => ['required'],
                'activity_start_day4' => ['nullable', 'date'],
                'activity_end_day4' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules4);
        }
        $g_rules = [
            // ジャンルjoin
            'genre_name' => ['required', 'numeric'],
        ];
        $rules = array_merge($rules, $g_rules);
        $p_rules1 = [
            // 料金join
            'price_type1' => ['required'],
            'price_before_price1' => ['nullable', 'numeric'],
            'price_price1' => ['nullable', 'numeric'],
            //'price_week_flag1' => ['required'],
            'price_monday1' => ['nullable', 'numeric'],
            'price_tuesday1' => ['nullable', 'numeric'],
            'price_wednesday1' => ['nullable', 'numeric'],
            'price_thursday1' => ['nullable', 'numeric'],
            'price_friday1' => ['nullable', 'numeric'],
            'price_saturaday1' => ['nullable', 'numeric'],
            'price_sunday1' => ['nullable', 'numeric'],
            'price_holiday1' => ['nullable', 'numeric'],
        ];
        $rules = array_merge($rules, $p_rules1);
        if ($request->{'add-price'} >= 2) {
            $p_rules2 = [
                // 料金join
                'price_type2' => ['required'],
                'price_before_price2' => ['nullable', 'numeric'],
                'price_price2' => ['nullable', 'numeric'],
                //'price_week_flag2' => ['required'],
                'price_monday2' => ['nullable', 'numeric'],
                'price_tuesday2' => ['nullable', 'numeric'],
                'price_wednesday2' => ['nullable', 'numeric'],
                'price_thursday2' => ['nullable', 'numeric'],
                'price_friday2' => ['nullable', 'numeric'],
                'price_saturaday2' => ['nullable', 'numeric'],
                'price_sunday2' => ['nullable', 'numeric'],
                'price_holiday2' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules2);
        }
        if ($request->{'add-price'} >= 3) {
            $p_rules3 = [
                // 料金join
                'price_type3' => ['required'],
                'price_before_price3' => ['nullable', 'numeric'],
                'price_price3' => ['nullable', 'numeric'],
                //'price_week_flag3' => ['required'],
                'price_monday3' => ['nullable', 'numeric'],
                'price_tuesday3' => ['nullable', 'numeric'],
                'price_wednesday3' => ['nullable', 'numeric'],
                'price_thursday3' => ['nullable', 'numeric'],
                'price_friday3' => ['nullable', 'numeric'],
                'price_saturaday3' => ['nullable', 'numeric'],
                'price_sunday3' => ['nullable', 'numeric'],
                'price_holiday3' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules3);
        }
        if ($request->{'add-price'} >= 4) {
            $p_rules4 = [
                // 料金join
                'price_type4' => ['required'],
                'price_before_price4' => ['nullable', 'numeric'],
                'price_price4' => ['nullable', 'numeric'],
                //'price_week_flag4' => ['required'],
                'price_monday4' => ['nullable', 'numeric'],
                'price_tuesday4' => ['nullable', 'numeric'],
                'price_wednesday4' => ['nullable', 'numeric'],
                'price_thursday4' => ['nullable', 'numeric'],
                'price_friday4' => ['nullable', 'numeric'],
                'price_saturaday4' => ['nullable', 'numeric'],
                'price_sunday4' => ['nullable', 'numeric'],
                'price_holiday4' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules4);
        }
        if ($request->{'add-price'} >= 5) {
            $p_rules5 = [
                // 料金join
                'price_type5' => ['required'],
                'price_before_price5' => ['nullable', 'numeric'],
                'price_price5' => ['nullable', 'numeric'],
                //'price_week_flag5' => ['required'],
                'price_monday5' => ['nullable', 'numeric'],
                'price_tuesday5' => ['nullable', 'numeric'],
                'price_wednesday5' => ['nullable', 'numeric'],
                'price_thursday5' => ['nullable', 'numeric'],
                'price_friday5' => ['nullable', 'numeric'],
                'price_saturaday5' => ['nullable', 'numeric'],
                'price_sunday5' => ['nullable', 'numeric'],
                'price_holiday5' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules5);
        }
        if ($request->{'add-price'} >= 6) {
            $p_rules6 = [
                // 料金join
                'price_type6' => ['required'],
                'price_before_price6' => ['nullable', 'numeric'],
                'price_price6' => ['nullable', 'numeric'],
                //'price_week_flag6' => ['required'],
                'price_monday6' => ['nullable', 'numeric'],
                'price_tuesday6' => ['nullable', 'numeric'],
                'price_wednesday6' => ['nullable', 'numeric'],
                'price_thursday6' => ['nullable', 'numeric'],
                'price_friday6' => ['nullable', 'numeric'],
                'price_saturaday6' => ['nullable', 'numeric'],
                'price_sunday6' => ['nullable', 'numeric'],
                'price_holiday6' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules6);
        }
        $this->validate($request, $rules);
        // 支払方法のバリデーション　いずれか1つ必須
        if ($request->spot == 0 && $request->prepay == 0 && $request->cvs == 0 && $request->card == 0) {
            throw ValidationException::withMessages(['non_payment_method' => '支払方法は最低1つ必須です']);
        }
        // 画像トリミング処理（forのループ分）
        $image_count = 0;
        for ($i = 1 ; $i <= 10; $i++){
            if (${'file' . $i} = $request->{'file_path' .$i}) {
                // オリジナルサイズで保存
                $time = time();
                ${'fileName' . $i} = "origin-" . $time . ${'file' . $i}->getClientOriginalName();
                $target_path = public_path('/uploads');
                ${'maked_file' . $i} = InterventionImage::make(${'file' . $i});
                ${'maked_file' . $i}->save($target_path .'/' . ${'fileName' . $i});
                // ファイルコピーしてリサイズ保存
                copy($target_path . "/". ${'fileName' . $i}, $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName());
                ${'thumbnail_file' . $i} = $time . ${'file' . $i}->getClientOriginalName();
                ${'thumbnail_path' . $i} = $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName();
                ${'maked_thumbnail_file' . $i} = InterventionImage::make(${'thumbnail_path' . $i});
                if (${'maked_thumbnail_file' . $i}->width() > ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), floor(${'maked_thumbnail_file' . $i}->width() * 0.667))
                        ->save(${'thumbnail_path' . $i});
                } else if (${'maked_thumbnail_file' . $i}->width() == ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), ${'maked_thumbnail_file' . $i}->width())
                        ->save(${'thumbnail_path' . $i});
                } else {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(floor(${'maked_thumbnail_file' . $i}->height() * 1.5), ${'maked_thumbnail_file' . $i}->height())
                        ->save(${'thumbnail_path' . $i});
                }
                $image_count++;
            } else {
                ${'fileName' . $i} = "";
            }
        }
        // データ保存
        $plans = new Plan();
        $plans->group_id = $request->group_id;
        $plans->genre_id = $request->genre_name; //name=>id
        $plans->kind = $request->kind;
        $plans->is_listed = $request->is_listed;
        $plans->name = $request->name;
        $plans->company_id = 1;
        $plans->catchphrase = $request->catchphrase;
        $plans->description = $request->description;
        $plans->start_day = $request->start_day;
        $plans->end_day = $request->end_day;
        $plans->repetition_flag = $request->repetition_flag;
        $plans->repetition_day = $request->repetition_day;
        $plans->monday = $request->monday;
        $plans->tuesday = $request->tuesday;
        $plans->wednesday = $request->wednesday;
        $plans->thursday = $request->thursday;
        $plans->friday = $request->friday;
        $plans->saturday = $request->saturday;
        $plans->sunday = $request->sunday;
        $plans->holiday_selected = $request->holiday_selected;
        $plans->holiday_nonselected = $request->holiday_nonselected;
        $plans->is_autoextend = $request->is_autoextend;
        $plans->time_hour = $request->time_hour;
        $plans->time_minute = $request->time_minute;
        $plans->age_from = $request->age_from;
        $plans->age_to = $request->age_to;
        $plans->res_type = $request->res_type;
        $plans->res_end_flag = $request->res_end_flag;
        $plans->res_before_day = $request->res_before_day;
        $plans->res_before_type = $request->res_before_type;
        $plans->res_before_time = $request->res_before_time;
        $plans->res_end_day = $request->res_end_day;
        $plans->res_end_type = $request->res_end_type;
        $plans->res_end_time = $request->res_end_time;
        $plans->req_before_day = $request->req_before_day;
        $plans->req_before_type = $request->req_before_type;
        $plans->req_before_time = $request->req_before_time;
        $plans->res_limit_flag = $request->res_limit_flag;
        $plans->res_limit_number = $request->res_limit_number;
        $plans->min_number = $request->min_number;
        $plans->max_number = $request->max_number;
        //$plans->payment_method = $request->payment_method;
        $plans->cache_flag = $request->cache_flag;
        $plans->card_flag = $request->card_flag;
        $plans->visa = $request->visa;
        $plans->mastercard = $request->mastercard;
        $plans->americanexpress = $request->americanexpress;
        $plans->jcb = $request->jcb;
        $plans->unionpay = $request->unionpay;
        $plans->diners = $request->diners;
        $plans->discover = $request->discover;
        $plans->etc_card = $request->etc_card;
        $plans->etc_card_name = $request->etc_card_name;
        $plans->payment_comment = $request->payment_comment;
        $plans->is_discount = $request->is_discount;
        $plans->included_item = $request->included_item;
        $plans->place_name = $request->place_name;
        $plans->place_postalcode = $request->place_postalcode;
        $plans->place_prefecture = $request->place_prefecture;
        $plans->place_address = $request->place_address;
        $plans->place_access = $request->place_access;
        $plans->place_latitude = $request->place_latitude;
        $plans->place_longitude = $request->place_longitude;
        $plans->meeting_point_flag = $request->meeting_point_flag;
        $plans->meeting_point_name = $request->meeting_point_name;
        $plans->meeting_point_postalcode = $request->meeting_point_postalcode;
        $plans->meeting_point_prefecture = $request->meeting_point_prefecture;
        $plans->meeting_point_address = $request->meeting_point_address;
        $plans->meeting_point_access = $request->meeting_point_access;
        $plans->meeting_point_latitude = $request->meeting_point_latitude;
        $plans->meeting_point_longitude = $request->meeting_point_longitude;
        $plans->question_flag = $request->question_flag;
        $plans->question_content = $request->question_content;
        $plans->answer_flag = $request->answer_flag;
        $plans->caution_flag = $request->caution_flag;
        $plans->caution_content = $request->caution_content;
        $plans->item = $request->item;
        $plans->wear = $request->wear;
	$plans->spot = $request->spot;
	$plans->prepay = $request->prepay;
	$plans->cvs = $request->cvs;
	$plans->card = $request->card;
        for ($i = 0; $i < $image_count ; $i++) {
            $plans->{'file_path' . ($i + 1)} = ${'fileName' . ($i + 1)};
        }
        $max_sort_number = Plan::max('sort');
        $plans->sort = $max_sort_number + 1;
        $plans->save();
        $id = $plans->id;
        // activities 
        $ac = 0;
        for ($i = 1; $i <= 4; $i++) { 
            if ($request->{'activity_name' . $i}) {
               $ac++;
            }
        }
        for ($i = 1; $i <= $ac; $i++) { 
            $activity = new Activity();
            $activity->plan_id = $id;
            $activity->name = $request->{'activity_name' . $i};
            $activity->is_overday = $request->{'activity_is_overday' . $i};
            $activity->start_hour = $request->{'activity_start_hour' . $i};
            $activity->start_minute = $request->{'activity_start_minute' . $i};
            $activity->days_after = $request->{'activity_days_after' . $i};
            $activity->end_hour = $request->{'activity_end_hour' . $i};
            $activity->end_minute = $request->{'activity_end_minute' . $i};
            $activity->period_flag = $request->{'activity_period_flag' . $i};
            $activity->start_day = $request->{'activity_start_day' . $i};
            $activity->end_day = $request->{'activity_end_day' . $i};
            $activity->save();
        }
        // prices 何フォームあるかをカウントする
        $pc = 0;
        for ($i = 1; $i <= 6; $i++) { 
            if ($request->{'price_price' . $i} || $request->{'price_monday' . $i}) {
               $pc++;
            }
        }
        for ($i = 1; $i <= $pc; $i++) { 
           $price = new Price();
           $price->plan_id = $id;
           $price->type = $request->{'price_type' . $i};
           $price->price = $request->{'price_price' . $i};
           if ($request->{'price_week_flag' . $i}) {
               $price->week_flag = $request->{'price_week_flag' . $i};
           } else {
               $price->week_flag = 0;
           }
           $price->before_price = $request->{'price_before_price' . $i};
           $price->monday = $request->{'price_monday' . $i};
           $price->tuesday = $request->{'price_tuesday' . $i};
           $price->wednesday = $request->{'price_wednesday' . $i};
           $price->thursday = $request->{'price_thursday' . $i};
           $price->friday = $request->{'price_friday' . $i};
           $price->saturday = $request->{'price_saturday' . $i};
           $price->sunday = $request->{'price_sunday' . $i};
           $price->holiday = $request->{'price_holiday' . $i};
           $price->save();
        }
        // stocks
        $start_day = new Carbon($plans->start_day);
        $end_day = new Carbon($plans->end_day);
        $diff_days = $start_day->diffInDays($end_day);
        $loop_count = $diff_days + 1;
        if ($plans->repetition_flag == 0) {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if (($plans->monday == 1 && $start_day->isMonday()) || 
                    ($plans->tuesday == 1 && $start_day->isTuesday()) ||
                    ($plans->wednesday == 1 && $start_day->isWednesday()) ||
                    ($plans->thursday == 1 && $start_day->isThursday()) ||
                    ($plans->friday == 1 && $start_day->isFriday()) ||
                    ($plans->saturday == 1 && $start_day->isSaturday()) ||
                    ($plans->sunday == 1 && $start_day->isSunday())) {
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number;
                    $stock->save();
                }
            }
        } else {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if ($plans->repetition_day == $start_day->day) { 
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number;
                    $stock->save();
                }
            }
        }
        return redirect('/client/plans')->with('message', '追加が完了しました');
    }

    //　一時保存 
    public function storeTmp(Request $request)
    {
        ini_set('memory_limit', '256M');
        // 画像トリミング処理（forのループ分）
        $image_count = 0;
        for ($i = 1 ; $i <= 10; $i++){
            if (${'file' . $i} = $request->{'file_path' .$i}) {
                // オリジナルサイズで保存
                $time = time();
                ${'fileName' . $i} = "origin-" . $time . ${'file' . $i}->getClientOriginalName();
                $target_path = public_path('/uploads');
                ${'maked_file' . $i} = InterventionImage::make(${'file' . $i});
                ${'maked_file' . $i}->save($target_path .'/' . ${'fileName' . $i});
                // ファイルコピーしてリサイズ保存
                copy($target_path . "/". ${'fileName' . $i}, $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName());
                ${'thumbnail_file' . $i} = $time . ${'file' . $i}->getClientOriginalName();
                ${'thumbnail_path' . $i} = $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName();
                ${'maked_thumbnail_file' . $i} = InterventionImage::make(${'thumbnail_path' . $i});
                if (${'maked_thumbnail_file' . $i}->width() > ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), floor(${'maked_thumbnail_file' . $i}->width() * 0.667))
                        ->save(${'thumbnail_path' . $i});
                } else if (${'maked_thumbnail_file' . $i}->width() == ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), ${'maked_thumbnail_file' . $i}->width())
                        ->save(${'thumbnail_path' . $i});
                } else {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(floor(${'maked_thumbnail_file' . $i}->height() * 1.5), ${'maked_thumbnail_file' . $i}->height())
                        ->save(${'thumbnail_path' . $i});
                }
                $image_count++;
            } else {
                ${'fileName' . $i} = "";
            }
        }
        // データ保存
        $plans = new Plan();
        $plans->group_id = $request->group_id;
        $plans->genre_id = $request->genre_id ? $request->genre_id : '1';
        $plans->kind = $request->kind;
        $plans->is_listed = $request->is_listed ? $request->is_listed : '2'; 
        $plans->name = $request->name ? $request->name : '';
        $plans->company_id = 1;
        $plans->catchphrase = $request->catchphrase ? $request->catchphrase : '';
        $plans->description = $request->description ? $request->description : '';
        $plans->start_day = $request->start_day ? $request->start_day : new DateTime('now');
        $plans->end_day = $request->end_day ? $request->end_day : new DateTime('now');
        $plans->repetition_flag = $request->repetition_flag;
        $plans->repetition_day = $request->repetition_day;
        $plans->monday = $request->monday;
        $plans->tuesday = $request->tuesday;
        $plans->wednesday = $request->wednesday;
        $plans->thursday = $request->thursday;
        $plans->friday = $request->friday;
        $plans->saturday = $request->saturday;
        $plans->sunday = $request->sunday;
        $plans->holiday_selected = $request->holiday_selected;
        $plans->holiday_nonselected = $request->holiday_nonselected;
        $plans->is_autoextend = $request->is_autoextend;
        $plans->time_hour = $request->time_hour ? $request->time_hour : '0';
        $plans->time_minute = $request->time_minute ? $request->time_minute : '0';
        $plans->age_from = $request->age_from;
        $plans->age_to = $request->age_to;
        $plans->res_type = $request->res_type;
        $plans->res_end_flag = $request->res_end_flag;
        $plans->res_before_day = $request->res_before_day ? $request->res_before_day : '0';
        $plans->res_before_type = $request->res_before_type;
        $plans->res_before_time = $request->res_before_time;
        $plans->res_end_day = $request->res_end_day ? $request->res_end_day : '0';
        $plans->res_end_type = $request->res_end_type;
        $plans->res_end_time = $request->res_end_time;
        $plans->req_before_day = $request->req_before_day ? $request->req_before_day : '0';
        $plans->req_before_type = $request->req_before_type;
        $plans->req_before_time = $request->req_before_time;
        $plans->res_limit_flag = $request->res_limit_flag;
        $plans->res_limit_number = $request->res_limit_number;
        $plans->min_number = $request->min_number;
        $plans->max_number = $request->max_number;
        //$plans->payment_method = $request->payment_method;
        $plans->cache_flag = $request->cache_flag;
        $plans->card_flag = $request->card_flag;
        $plans->visa = $request->visa;
        $plans->mastercard = $request->mastercard;
        $plans->americanexpress = $request->americanexpress;
        $plans->jcb = $request->jcb;
        $plans->unionpay = $request->unionpay;
        $plans->diners = $request->diners;
        $plans->discover = $request->discover;
        $plans->etc_card = $request->etc_card;
        $plans->etc_card_name = $request->etc_card_name;
        $plans->payment_comment = $request->payment_comment;
        $plans->is_discount = $request->is_discount;
        $plans->included_item = $request->included_item;
        $plans->place_name = $request->place_name ? $request->place_name : '';
        $plans->place_postalcode = $request->place_postalcode;
        $plans->place_prefecture = $request->place_prefecture;
        $plans->place_address = $request->place_address;
        $plans->place_access = $request->place_access;
        $plans->place_latitude = $request->place_latitude ? $request->place_latitude : '';
        $plans->place_longitude = $request->place_longitude ? $request->place_longitude : '';
        $plans->meeting_point_flag = $request->meeting_point_flag;
        $plans->meeting_point_name = $request->meeting_point_name;
        $plans->meeting_point_postalcode = $request->meeting_point_postalcode;
        $plans->meeting_point_prefecture = $request->meeting_point_prefecture;
        $plans->meeting_point_address = $request->meeting_point_address;
        $plans->meeting_point_access = $request->meeting_point_access;
        $plans->meeting_point_latitude = $request->meeting_point_latitude;
        $plans->meeting_point_longitude = $request->meeting_point_longitude;
        $plans->question_flag = $request->question_flag;
        $plans->question_content = $request->question_content;
        $plans->answer_flag = $request->answer_flag;
        $plans->caution_flag = $request->caution_flag;
        $plans->caution_content = $request->caution_content;
        $plans->item = $request->item;
        $plans->wear = $request->wear;
	$plans->spot = $request->spot;
	$plans->prepay = $request->prepay;
	$plans->cvs = $request->cvs;
	$plans->card = $request->card;
        for ($i = 0; $i < $image_count ; $i++) {
            $plans->{'file_path' . ($i + 1)} = ${'fileName' . ($i + 1)};
        }
        $max_sort_number = Plan::max('sort');
        $plans->sort = $max_sort_number + 1;
        $plans->save();
        $id = $plans->id;
        // activities 
        $ac = 0;
        for ($i = 1; $i <= 4; $i++) { 
            if ($request->{'activity_name' . $i}) {
               $ac++;
            }
        }
        for ($i = 1; $i <= $ac; $i++) { 
            $activity = new Activity();
            $activity->plan_id = $id;
            $activity->name = $request->{'activity_name' . $i};
            $activity->is_overday = $request->{'activity_is_overday' . $i};
            $activity->start_hour = $request->{'activity_start_hour' . $i};
            $activity->start_minute = $request->{'activity_start_minute' . $i};
            $activity->days_after = $request->{'activity_days_after' . $i};
            $activity->end_hour = $request->{'activity_end_hour' . $i};
            $activity->end_minute = $request->{'activity_end_minute' . $i};
            $activity->period_flag = $request->{'activity_period_flag' . $i};
            $activity->start_day = $request->{'activity_start_day' . $i};
            $activity->end_day = $request->{'activity_end_day' . $i};
            $activity->save();
        }
        if ($ac == 0) {
            $activity = new Activity();
            $activity->plan_id = $id;
            $activity->name = '';
            $activity->start_hour = '00';
            $activity->start_minute = '00';
            $activity->days_after = '00';
            $activity->end_hour = '00';
            $activity->end_minute = '00';
            $activity->save();
        }
        // prices 何フォームあるかをカウントする
        $pc = 0;
        for ($i = 1; $i <= 6; $i++) { 
            if ($request->{'price_price' . $i} || $request->{'price_monday' . $i}) {
               $pc++;
            }
        }
        for ($i = 1; $i <= $pc; $i++) { 
           $price = new Price();
           $price->plan_id = $id;
           $price->type = $request->{'price_type' . $i};
           $price->price = $request->{'price_price' . $i};
           if ($request->{'price_week_flag' . $i}) {
               $price->week_flag = $request->{'price_week_flag' . $i};
           } else {
               $price->week_flag = 0;
           }
           $price->before_price = $request->{'price_before_price' . $i};
           $price->monday = $request->{'price_monday' . $i};
           $price->tuesday = $request->{'price_tuesday' . $i};
           $price->wednesday = $request->{'price_wednesday' . $i};
           $price->thursday = $request->{'price_thursday' . $i};
           $price->friday = $request->{'price_friday' . $i};
           $price->saturday = $request->{'price_saturday' . $i};
           $price->sunday = $request->{'price_sunday' . $i};
           $price->holiday = $request->{'price_holiday' . $i};
           $price->save();
        }
        if ($pc == 0) {
           $price = new Price();
           $price->plan_id = $id;
           $price->type = 0;
           $price->price = 0;
           $price->save();
        }
        // stocks
        $start_day = new Carbon($plans->start_day);
        $end_day = new Carbon($plans->end_day);
        $diff_days = $start_day->diffInDays($end_day);
        $loop_count = $diff_days + 1;
        if ($plans->repetition_flag == 0) {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if (($plans->monday == 1 && $start_day->isMonday()) || 
                    ($plans->tuesday == 1 && $start_day->isTuesday()) ||
                    ($plans->wednesday == 1 && $start_day->isWednesday()) ||
                    ($plans->thursday == 1 && $start_day->isThursday()) ||
                    ($plans->friday == 1 && $start_day->isFriday()) ||
                    ($plans->saturday == 1 && $start_day->isSaturday()) ||
                    ($plans->sunday == 1 && $start_day->isSunday())) {
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number ? $plans->res_limit_number : '0';
                    $stock->save();
                }
            }
        } else {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if ($plans->repetition_day == $start_day->day) { 
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number ? $plans->res_limit_number : '0';
                    $stock->save();
                }
            }
        }
        return redirect('/client/plans/edit/' . $plans->id)->with('message', '下書き保存が完了しました');
    }

    //　一時保存上書き 
    public function updateTmp(Request $request, $id)
    {
        ini_set('memory_limit', '256M');
        // 画像トリミング処理（forのループ分）
        $image_count = 0;
        for ($i = 1 ; $i <= 10; $i++){
            if (${'file' . $i} = $request->{'file_path' .$i}) {
                // オリジナルサイズで保存
                $time = time();
                ${'fileName' . $i} = "origin-" . $time . ${'file' . $i}->getClientOriginalName();
                $target_path = public_path('/uploads');
                ${'maked_file' . $i} = InterventionImage::make(${'file' . $i});
                ${'maked_file' . $i}->save($target_path .'/' . ${'fileName' . $i});
                // ファイルコピーしてリサイズ保存
                copy($target_path . "/". ${'fileName' . $i}, $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName());
                ${'thumbnail_file' . $i} = $time . ${'file' . $i}->getClientOriginalName();
                ${'thumbnail_path' . $i} = $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName();
                ${'maked_thumbnail_file' . $i} = InterventionImage::make(${'thumbnail_path' . $i});
                if (${'maked_thumbnail_file' . $i}->width() > ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), floor(${'maked_thumbnail_file' . $i}->width() * 0.667))
                        ->save(${'thumbnail_path' . $i});
                } else if (${'maked_thumbnail_file' . $i}->width() == ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), ${'maked_thumbnail_file' . $i}->width())
                        ->save(${'thumbnail_path' . $i});
                } else {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(floor(${'maked_thumbnail_file' . $i}->height() * 1.5), ${'maked_thumbnail_file' . $i}->height())
                        ->save(${'thumbnail_path' . $i});
                }
                $image_count++;
            } else {
                ${'fileName' . $i} = "";
            }
        }
        // データ保存
        $plans = Plan::find($id);
        $plans->group_id = $request->group_id;
        $plans->genre_id = $request->genre_id ? $request->genre_id : '1';
        $plans->kind = $request->kind;
        $plans->is_listed = $request->is_listed ? $request->is_listed : '2'; 
        $plans->name = $request->name ? $request->name : '';
        $plans->company_id = 1;
        $plans->catchphrase = $request->catchphrase ? $request->catchphrase : '';
        $plans->description = $request->description ? $request->description : '';
        $plans->start_day = $request->start_day ? $request->start_day : new DateTime('now');
        $plans->end_day = $request->end_day ? $request->end_day : new DateTime('now');
        $plans->repetition_flag = $request->repetition_flag;
        $plans->repetition_day = $request->repetition_day;
        $plans->monday = $request->monday;
        $plans->tuesday = $request->tuesday;
        $plans->wednesday = $request->wednesday;
        $plans->thursday = $request->thursday;
        $plans->friday = $request->friday;
        $plans->saturday = $request->saturday;
        $plans->sunday = $request->sunday;
        $plans->holiday_selected = $request->holiday_selected;
        $plans->holiday_nonselected = $request->holiday_nonselected;
        $plans->is_autoextend = $request->is_autoextend;
        $plans->time_hour = $request->time_hour ? $request->time_hour : '0';
        $plans->time_minute = $request->time_minute ? $request->time_minute : '0';
        $plans->age_from = $request->age_from;
        $plans->age_to = $request->age_to;
        $plans->res_type = $request->res_type;
        $plans->res_end_flag = $request->res_end_flag;
        $plans->res_before_day = $request->res_before_day ? $request->res_before_day : '0';
        $plans->res_before_type = $request->res_before_type;
        $plans->res_before_time = $request->res_before_time;
        $plans->res_end_day = $request->res_end_day ? $request->res_end_day : '0';
        $plans->res_end_type = $request->res_end_type;
        $plans->res_end_time = $request->res_end_time;
        $plans->req_before_day = $request->req_before_day ? $request->req_before_day : '0';
        $plans->req_before_type = $request->req_before_type;
        $plans->req_before_time = $request->req_before_time;
        $plans->res_limit_flag = $request->res_limit_flag;
        $plans->res_limit_number = $request->res_limit_number;
        $plans->min_number = $request->min_number;
        $plans->max_number = $request->max_number;
        //$plans->payment_method = $request->payment_method;
        $plans->cache_flag = $request->cache_flag;
        $plans->card_flag = $request->card_flag;
        $plans->visa = $request->visa;
        $plans->mastercard = $request->mastercard;
        $plans->americanexpress = $request->americanexpress;
        $plans->jcb = $request->jcb;
        $plans->unionpay = $request->unionpay;
        $plans->diners = $request->diners;
        $plans->discover = $request->discover;
        $plans->etc_card = $request->etc_card;
        $plans->etc_card_name = $request->etc_card_name;
        $plans->payment_comment = $request->payment_comment;
        $plans->is_discount = $request->is_discount;
        $plans->included_item = $request->included_item;
        $plans->place_name = $request->place_name ? $request->place_name : '';
        $plans->place_postalcode = $request->place_postalcode;
        $plans->place_prefecture = $request->place_prefecture;
        $plans->place_address = $request->place_address;
        $plans->place_access = $request->place_access;
        $plans->place_latitude = $request->place_latitude ? $request->place_latitude : '';
        $plans->place_longitude = $request->place_longitude ? $request->place_longitude : '';
        $plans->meeting_point_flag = $request->meeting_point_flag;
        $plans->meeting_point_name = $request->meeting_point_name;
        $plans->meeting_point_postalcode = $request->meeting_point_postalcode;
        $plans->meeting_point_prefecture = $request->meeting_point_prefecture;
        $plans->meeting_point_address = $request->meeting_point_address;
        $plans->meeting_point_access = $request->meeting_point_access;
        $plans->meeting_point_latitude = $request->meeting_point_latitude;
        $plans->meeting_point_longitude = $request->meeting_point_longitude;
        $plans->question_flag = $request->question_flag;
        $plans->question_content = $request->question_content;
        $plans->answer_flag = $request->answer_flag;
        $plans->caution_flag = $request->caution_flag;
        $plans->caution_content = $request->caution_content;
        $plans->item = $request->item;
        $plans->wear = $request->wear;
	$plans->spot = $request->spot;
	$plans->prepay = $request->prepay;
	$plans->cvs = $request->cvs;
	$plans->card = $request->card;
        for ($i = 0; $i < $image_count ; $i++) {
            $plans->{'file_path' . ($i + 1)} = ${'fileName' . ($i + 1)};
        }
        $max_sort_number = Plan::max('sort');
        $plans->sort = $max_sort_number + 1;
        $plans->save();
        $id = $plans->id;
        // activities 
        $ac = 0;
        for ($i = 1; $i <= 4; $i++) { 
            if ($request->{'activity_name' . $i}) {
               $ac++;
            }
        }
        for ($i = 1; $i <= $ac; $i++) { 
            $activity = new Activity();
            $activity->plan_id = $id;
            $activity->name = $request->{'activity_name' . $i};
            $activity->is_overday = $request->{'activity_is_overday' . $i};
            $activity->start_hour = $request->{'activity_start_hour' . $i};
            $activity->start_minute = $request->{'activity_start_minute' . $i};
            $activity->days_after = $request->{'activity_days_after' . $i};
            $activity->end_hour = $request->{'activity_end_hour' . $i};
            $activity->end_minute = $request->{'activity_end_minute' . $i};
            $activity->period_flag = $request->{'activity_period_flag' . $i};
            $activity->start_day = $request->{'activity_start_day' . $i};
            $activity->end_day = $request->{'activity_end_day' . $i};
            $activity->save();
        }
        // prices 何フォームあるかをカウントする
        $pc = 0;
        for ($i = 1; $i <= 6; $i++) { 
            if ($request->{'price_price' . $i} || $request->{'price_monday' . $i}) {
               $pc++;
            }
        }
        for ($i = 1; $i <= $pc; $i++) { 
           $price = new Price();
           $price->plan_id = $id;
           $price->type = $request->{'price_type' . $i};
           $price->price = $request->{'price_price' . $i};
           if ($request->{'price_week_flag' . $i}) {
               $price->week_flag = $request->{'price_week_flag' . $i};
           } else {
               $price->week_flag = 0;
           }
           $price->before_price = $request->{'price_before_price' . $i};
           $price->monday = $request->{'price_monday' . $i};
           $price->tuesday = $request->{'price_tuesday' . $i};
           $price->wednesday = $request->{'price_wednesday' . $i};
           $price->thursday = $request->{'price_thursday' . $i};
           $price->friday = $request->{'price_friday' . $i};
           $price->saturday = $request->{'price_saturday' . $i};
           $price->sunday = $request->{'price_sunday' . $i};
           $price->holiday = $request->{'price_holiday' . $i};
           $price->save();
        }
        // stocks
        $start_day = new Carbon($plans->start_day);
        $end_day = new Carbon($plans->end_day);
        $diff_days = $start_day->diffInDays($end_day);
        $loop_count = $diff_days + 1;
        if ($plans->repetition_flag == 0) {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if (($plans->monday == 1 && $start_day->isMonday()) || 
                    ($plans->tuesday == 1 && $start_day->isTuesday()) ||
                    ($plans->wednesday == 1 && $start_day->isWednesday()) ||
                    ($plans->thursday == 1 && $start_day->isThursday()) ||
                    ($plans->friday == 1 && $start_day->isFriday()) ||
                    ($plans->saturday == 1 && $start_day->isSaturday()) ||
                    ($plans->sunday == 1 && $start_day->isSunday())) {
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number ? $plans->res_limit_number : '0';
                    $stock->save();
                }
            }
        } else {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if ($plans->repetition_day == $start_day->day) { 
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number ? $plans->res_limit_number : '0';
                    $stock->save();
                }
            }
        }
        return redirect('/client/plans/edit/' . $plans->id)->with('message', '下書き保存が完了しました');
    }

    // 詳細画面
    public function show($id)
    {
    }

    // 編集画面
    public function edit($id)
    {
        $plans = Plan::find($id);
        $categories = Genre::select('category', DB::raw('count(*) as total'))
            ->groupBy('category')
            ->orderBy('id')
            ->get();
        $genres = Genre::all();
        $price_types = PriceType::orderBy('sort')->get();
        return view('client.plans.edit', compact('plans', 'categories', 'genres', 'price_types'));
    }
 
    // 更新処理
    public function update(Request $request, $id)
    {
        ini_set('memory_limit', '256M');
        $rules = [
            'kind' => ['required'],
            'is_listed' => ['required'],
            'name' => ['required', 'string', 'max:100'],
            'catchphrase' => ['required', 'string', 'max:300'],
            'description' => ['required', 'string', 'max:1200'],
            'start_day' => ['required', 'date'],
            'end_day' => ['required', 'date', 'after_or_equal:start_day'],
            'repetition_flag' => ['required'],
            'repetition_day' => ['nullable', 'numeric'],
            'holiday_selected' => ['required'],
            'holiday_nonselected' => ['required'],
            'is_autoextend' => ['required'],
            'time_hour' => ['required', 'numeric'],
            'time_minute' => ['required', 'numeric'],
            'age_from' => ['nullable', 'numeric'],
            'age_to' => ['nullable', 'numeric'],
            'res_type' => ['required'],
            'res_end_flag' => ['required'],
            'res_before_day' => ['required', 'numeric'],
            'res_before_type' => ['required'],
            'res_before_time' => ['required', 'numeric'],
            'res_end_day' => ['required', 'numeric'],
            'res_end_type' => ['required'],
            'res_end_time' => ['required', 'numeric'],
            'req_before_day' => ['required', 'numeric'],
            'req_before_type' => ['required'],
            'req_before_time' => ['required', 'numeric'],
            'res_limit_flag' => ['required'],
            'res_limit_number' => ['required', 'numeric'],
            'min_number' => ['required', 'numeric'],
            'max_number' => ['required', 'numeric'],
            //'payment_method' => ['required', 'numeric'],
            'etc_card_name' => ['nullable', 'string', 'max:50'],
            'payment_comment' => ['nullable', 'string', 'max:200'],
            'is_discount' => ['required'],
            'included_item' => ['nullable', 'string', 'max:100'],
            'place_name' => ['required', 'string', 'max:120'],
            'place_postalcode' => ['nullable', 'string', 'max:8'],
            'place_prefecture' => ['nullable', 'string', 'max:5'],
            'place_address' => ['nullable', 'string', 'max:100'],
            'place_access' => ['nullable', 'string', 'max:120'],
            'place_latitude' => ['required', 'string', 'max:50'],
            'place_longitude' => ['required', 'string', 'max:50'],
            'question_flag' => ['required'],
            'question_content' => ['nullable', 'string', 'max:1200'],
            'caution_flag' => ['required'],
            'caution_content' => ['nullable', 'string', 'max:5000'],
            'item' => ['nullable', 'string', 'max:1000'],
            'wear' => ['nullable', 'string', 'max:1000'],
            'file_path1' => 'required_without:old_file_path1|mimes:jpeg,jpg,png,gif|max:500000',
            'old_file_path1' => 'required_without:file_path1|string|max:1000',
            'file_path2' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path3' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path4' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path5' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path6' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path7' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path8' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path9' => 'mimes:jpeg,jpg,png,gif|max:500000',
            'file_path10' => 'mimes:jpeg,jpg,png,gif|max:500000',
        ];
/*
        if ($request->payment_method == 0 || $request->payment_method == 3) {
            $p_rules = [
                'cache_flag' => ['required_without:card_flag'],
                'card_flag' => ['required_without:cache_flag'],
            ];
            $rules = array_merge($rules, $p_rules);
        }
*/
        if ($request->meeting_point_flag == 1) {
            $m_rules = [
                'meeting_point_name' => ['required', 'string', 'max:120'],
                'meeting_point_postalcode' => ['nullable', 'string', 'max:8'],
                'meeting_point_prefecture' => ['nullable', 'string', 'max:5'],
                'meeting_point_address' => ['nullable', 'string', 'max:100'],
                'meeting_point_access' => ['nullable', 'string', 'max:120'],
                'meeting_point_latitude' => ['required', 'string', 'max:50'],
                'meeting_point_longitude' => ['required', 'string', 'max:50'],
            ];
            $rules = array_merge($rules, $m_rules);
        }
        $a_rules1 = [
            // 体験時間join
            'activity_name1' => ['required'],
            'activity_is_overday1' => ['required'],
            'activity_start_hour1' => ['required'],
            'activity_start_minute1' => ['required'],
            'activity_end_hour1' => ['required'],
            'activity_end_minute1' => ['required'],
            'activity_period_flag1' => ['required'],
            'activity_start_day1' => ['nullable', 'date'],
            'activity_end_day1' => ['nullable', 'date'],
        ];
        $rules = array_merge($rules, $a_rules1);
        if ($request->{'add-activity'} >= 2) {
            $a_rules2 = [
                // 体験時間join
                'activity_name2' => ['required'],
                'activity_is_overday2' => ['required'],
                'activity_start_hour2' => ['required'],
                'activity_start_minute2' => ['required'],
                'activity_end_hour2' => ['required'],
                'activity_end_minute2' => ['required'],
                'activity_period_flag2' => ['required'],
                'activity_start_day2' => ['nullable', 'date'],
                'activity_end_day2' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules2);
        }
        if ($request->{'add-activity'} >= 3) {
            $a_rules3 = [
                // 体験時間join
                'activity_name3' => ['required'],
                'activity_is_overday3' => ['required'],
                'activity_start_hour3' => ['required'],
                'activity_start_minute3' => ['required'],
                'activity_end_hour3' => ['required'],
                'activity_end_minute3' => ['required'],
                'activity_period_flag3' => ['required'],
                'activity_start_day3' => ['nullable', 'date'],
                'activity_end_day3' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules3);
        }
        if ($request->{'add-activity'} >= 4) {
            $a_rules4 = [
                // 体験時間join
                'activity_name4' => ['required'],
                'activity_is_overday4' => ['required'],
                'activity_start_hour4' => ['required'],
                'activity_start_minute4' => ['required'],
                'activity_end_hour4' => ['required'],
                'activity_end_minute4' => ['required'],
                'activity_period_flag4' => ['required'],
                'activity_start_day4' => ['nullable', 'date'],
                'activity_end_day4' => ['nullable', 'date'],
            ];
            $rules = array_merge($rules, $a_rules4);
        }
        $g_rules = [
            // ジャンルjoin
            'genre_name' => ['required', 'numeric'],
        ];
        $rules = array_merge($rules, $g_rules);
        $p_rules1 = [
            // 料金join
            'price_type1' => ['required'],
            'price_before_price1' => ['nullable', 'numeric'],
            'price_price1' => ['nullable', 'numeric'],
            //'price_week_flag1' => ['required'],
            'price_monday1' => ['nullable', 'numeric'],
            'price_tuesday1' => ['nullable', 'numeric'],
            'price_wednesday1' => ['nullable', 'numeric'],
            'price_thursday1' => ['nullable', 'numeric'],
            'price_friday1' => ['nullable', 'numeric'],
            'price_saturaday1' => ['nullable', 'numeric'],
            'price_sunday1' => ['nullable', 'numeric'],
            'price_holiday1' => ['nullable', 'numeric'],
        ];
        $rules = array_merge($rules, $p_rules1);
        if ($request->{'add-price'} >= 2) {
            $p_rules2 = [
                // 料金join
                'price_type2' => ['required'],
                'price_before_price2' => ['nullable', 'numeric'],
                'price_price2' => ['nullable', 'numeric'],
                //'price_week_flag2' => ['required'],
                'price_monday2' => ['nullable', 'numeric'],
                'price_tuesday2' => ['nullable', 'numeric'],
                'price_wednesday2' => ['nullable', 'numeric'],
                'price_thursday2' => ['nullable', 'numeric'],
                'price_friday2' => ['nullable', 'numeric'],
                'price_saturaday2' => ['nullable', 'numeric'],
                'price_sunday2' => ['nullable', 'numeric'],
                'price_holiday2' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules2);
        }
        if ($request->{'add-price'} >= 3) {
            $p_rules3 = [
                // 料金join
                'price_type3' => ['required'],
                'price_before_price3' => ['nullable', 'numeric'],
                'price_price3' => ['nullable', 'numeric'],
                //'price_week_flag3' => ['required'],
                'price_monday3' => ['nullable', 'numeric'],
                'price_tuesday3' => ['nullable', 'numeric'],
                'price_wednesday3' => ['nullable', 'numeric'],
                'price_thursday3' => ['nullable', 'numeric'],
                'price_friday3' => ['nullable', 'numeric'],
                'price_saturaday3' => ['nullable', 'numeric'],
                'price_sunday3' => ['nullable', 'numeric'],
                'price_holiday3' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules3);
        }
        if ($request->{'add-price'} >= 4) {
            $p_rules4 = [
                // 料金join
                'price_type4' => ['required'],
                'price_before_price4' => ['nullable', 'numeric'],
                'price_price4' => ['nullable', 'numeric'],
                //'price_week_flag4' => ['required'],
                'price_monday4' => ['nullable', 'numeric'],
                'price_tuesday4' => ['nullable', 'numeric'],
                'price_wednesday4' => ['nullable', 'numeric'],
                'price_thursday4' => ['nullable', 'numeric'],
                'price_friday4' => ['nullable', 'numeric'],
                'price_saturaday4' => ['nullable', 'numeric'],
                'price_sunday4' => ['nullable', 'numeric'],
                'price_holiday4' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules4);
        }
        if ($request->{'add-price'} >= 5) {
            $p_rules5 = [
                // 料金join
                'price_type5' => ['required'],
                'price_before_price5' => ['nullable', 'numeric'],
                'price_price5' => ['nullable', 'numeric'],
                //'price_week_flag5' => ['required'],
                'price_monday5' => ['nullable', 'numeric'],
                'price_tuesday5' => ['nullable', 'numeric'],
                'price_wednesday5' => ['nullable', 'numeric'],
                'price_thursday5' => ['nullable', 'numeric'],
                'price_friday5' => ['nullable', 'numeric'],
                'price_saturaday5' => ['nullable', 'numeric'],
                'price_sunday5' => ['nullable', 'numeric'],
                'price_holiday5' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules5);
        }
        if ($request->{'add-price'} >= 6) {
            $p_rules6 = [
                // 料金join
                'price_type6' => ['required'],
                'price_before_price6' => ['nullable', 'numeric'],
                'price_price6' => ['nullable', 'numeric'],
                //'price_week_flag6' => ['required'],
                'price_monday6' => ['nullable', 'numeric'],
                'price_tuesday6' => ['nullable', 'numeric'],
                'price_wednesday6' => ['nullable', 'numeric'],
                'price_thursday6' => ['nullable', 'numeric'],
                'price_friday6' => ['nullable', 'numeric'],
                'price_saturaday6' => ['nullable', 'numeric'],
                'price_sunday6' => ['nullable', 'numeric'],
                'price_holiday6' => ['nullable', 'numeric'],
            ];
            $rules = array_merge($rules, $p_rules6);
        }
        $this->validate($request, $rules);
        // 支払方法のバリデーション　いずれか1つ必須
        if ($request->spot == 0 && $request->prepay == 0 && $request->cvs == 0 && $request->card == 0) {
            throw ValidationException::withMessages(['non_payment_method' => '支払方法は最低1つ必須です']);
        }
        // 画像トリミング処理（forのループ分）
        for ($i = 1 ; $i <= 10; $i++){
            if (${'file' . $i} = $request->{'file_path' .$i}) {
                // オリジナルサイズで保存
                $time = time();
                ${'fileName' . $i} = "origin-" . $time . ${'file' . $i}->getClientOriginalName();
                $target_path = public_path('/uploads');
                ${'maked_file' . $i} = InterventionImage::make(${'file' . $i});
                ${'maked_file' . $i}->save($target_path .'/' . ${'fileName' . $i});
                // ファイルコピーしてリサイズ保存
                copy($target_path . "/". ${'fileName' . $i}, $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName());
                ${'thumbnail_file' . $i} = $time . ${'file' . $i}->getClientOriginalName();
                ${'thumbnail_path' . $i} = $target_path . "/" . $time . ${'file' . $i}->getClientOriginalName();
                ${'maked_thumbnail_file' . $i} = InterventionImage::make(${'thumbnail_path' . $i});
                if (${'maked_thumbnail_file' . $i}->width() > ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), floor(${'maked_thumbnail_file' . $i}->width() * 0.667))
                        ->save(${'thumbnail_path' . $i});
                } else if (${'maked_thumbnail_file' . $i}->width() == ${'maked_thumbnail_file' . $i}->height()) {
                    ${'maked_thumbnail_file' . $i}->resizeCanvas(${'maked_thumbnail_file' . $i}->width(), ${'maked_thumbnail_file' . $i}->width())
                        ->save(${'thumbnail_path' . $i});
                } else {
                    ${'maked_thumbnail_file' . $i}
                        ->resizeCanvas(floor(${'maked_thumbnail_file' . $i}->height() * 1.5), ${'maked_thumbnail_file' . $i}->height())
                        ->save(${'thumbnail_path' . $i});
                }
            } else {
                ${'fileName' . $i} = "";
                ${'thumbnail_file' . $i} = NULL;
            }
        }
        // データ保存
        $plans = Plan::find($id);
        // activities 
        Activity::where('plan_id', $id)->delete();
        $ac = 0;
        for ($i = 1; $i <= 4; $i++) { 
            if ($request->{'activity_name' . $i}) {
               $ac++;
            }
        }
        for ($i = 1; $i <= $ac; $i++) { 
            $activity = new Activity();
            $activity->plan_id = $id;
            $activity->name = $request->{'activity_name' . $i};
            $activity->is_overday = $request->{'activity_is_overday' . $i};
            $activity->start_hour = $request->{'activity_start_hour' . $i};
            $activity->start_minute = $request->{'activity_start_minute' . $i};
            $activity->days_after = $request->{'activity_days_after' . $i};
            $activity->end_hour = $request->{'activity_end_hour' . $i};
            $activity->end_minute = $request->{'activity_end_minute' . $i};
            $activity->period_flag = $request->{'activity_period_flag' . $i};
            $activity->start_day = $request->{'activity_start_day' . $i};
            $activity->end_day = $request->{'activity_end_day' . $i};
            $activity->save();
        }
        // prices 何フォームあるかをカウントする
        $pc = 0;
        for ($i = 1; $i <= 6; $i++) { 
            if ($request->{'price_price' . $i} || $request->{'price_monday' . $i}) {
               $pc++;
            }
        }
        Price::where('plan_id', $id)->delete();
        for ($i = 1; $i <= $pc; $i++) { 
           $price = new Price();
           $price->plan_id = $id;
           $price->type = $request->{'price_type' . $i};
           $price->price = $request->{'price_price' . $i};
           if ($request->{'price_week_flag' . $i}) {
               $price->week_flag = $request->{'price_week_flag' . $i};
           } else {
               $price->week_flag = 0;
           }
           $price->before_price = $request->{'price_before_price' . $i};
           $price->monday = $request->{'price_monday' . $i};
           $price->tuesday = $request->{'price_tuesday' . $i};
           $price->wednesday = $request->{'price_wednesday' . $i};
           $price->thursday = $request->{'price_thursday' . $i};
           $price->friday = $request->{'price_friday' . $i};
           $price->saturday = $request->{'price_saturday' . $i};
           $price->sunday = $request->{'price_sunday' . $i};
           $price->holiday = $request->{'price_holiday' . $i};
           $price->save();
        }
        $plans->group_id = $request->group_id;
        $plans->genre_id = $request->genre_name; //name=>id
        $plans->kind = $request->kind;
        $plans->is_listed = $request->is_listed;
        $plans->name = $request->name;
        $plans->catchphrase = $request->catchphrase;
        $plans->description = $request->description;
	// 古いレコードを別出ししておく
	$old_start_day = $plans->start_day;
        $plans->start_day = $request->start_day;
	// 古いレコードを別出ししておく
	$old_end_day = $plans->end_day;
        $plans->end_day = $request->end_day;
        $plans->repetition_flag = $request->repetition_flag;
        $plans->repetition_day = $request->repetition_day;
        $plans->monday = $request->monday;
        $plans->tuesday = $request->tuesday;
        $plans->wednesday = $request->wednesday;
        $plans->thursday = $request->thursday;
        $plans->friday = $request->friday;
        $plans->saturday = $request->saturday;
        $plans->sunday = $request->sunday;
        $plans->holiday_selected = $request->holiday_selected;
        $plans->holiday_nonselected = $request->holiday_nonselected;
        $plans->is_autoextend = $request->is_autoextend;
        $plans->time_hour = $request->time_hour;
        $plans->time_minute = $request->time_minute;
        $plans->age_from = $request->age_from;
        $plans->age_to = $request->age_to;
        $plans->res_type = $request->res_type;
        $plans->res_end_flag = $request->res_end_flag;
        $plans->res_before_day = $request->res_before_day;
        $plans->res_before_type = $request->res_before_type;
        $plans->res_before_time = $request->res_before_time;
        $plans->res_end_day = $request->res_end_day;
        $plans->res_end_type = $request->res_end_type;
        $plans->res_end_time = $request->res_end_time;
        $plans->req_before_day = $request->req_before_day;
        $plans->req_before_type = $request->req_before_type;
        $plans->req_before_time = $request->req_before_time;
        $plans->res_limit_flag = $request->res_limit_flag;
        $plans->res_limit_number = $request->res_limit_number;
        $plans->min_number = $request->min_number;
        $plans->max_number = $request->max_number;
        //$plans->payment_method = $request->payment_method;
        $plans->cache_flag = $request->cache_flag;
        $plans->card_flag = $request->card_flag;
        $plans->visa = $request->visa;
        $plans->mastercard = $request->mastercard;
        $plans->americanexpress = $request->americanexpress;
        $plans->jcb = $request->jcb;
        $plans->unionpay = $request->unionpay;
        $plans->diners = $request->diners;
        $plans->discover = $request->discover;
        $plans->etc_card = $request->etc_card;
        $plans->etc_card_name = $request->etc_card_name;
        $plans->payment_comment = $request->payment_comment;
        $plans->is_discount = $request->is_discount;
        $plans->included_item = $request->included_item;
        $plans->place_name = $request->place_name;
        $plans->place_postalcode = $request->place_postalcode;
        $plans->place_prefecture = $request->place_prefecture;
        $plans->place_address = $request->place_address;
        $plans->place_access = $request->place_access;
        $plans->place_latitude = $request->place_latitude;
        $plans->place_longitude = $request->place_longitude;
        $plans->meeting_point_flag = $request->meeting_point_flag;
        $plans->meeting_point_name = $request->meeting_point_name;
        $plans->meeting_point_postalcode = $request->meeting_point_postalcode;
        $plans->meeting_point_prefecture = $request->meeting_point_prefecture;
        $plans->meeting_point_address = $request->meeting_point_address;
        $plans->meeting_point_access = $request->meeting_point_access;
        $plans->meeting_point_latitude = $request->meeting_point_latitude;
        $plans->meeting_point_longitude = $request->meeting_point_longitude;
        $plans->question_flag = $request->question_flag;
        $plans->question_content = $request->question_content;
        $plans->answer_flag = $request->answer_flag;
        $plans->caution_flag = $request->caution_flag;
        $plans->caution_content = $request->caution_content;
        $plans->item = $request->item;
        $plans->wear = $request->wear;
	$plans->spot = $request->spot;
	$plans->prepay = $request->prepay;
	$plans->cvs = $request->cvs;
	$plans->card = $request->card;
        // 既存画像処理
        for ($i = 1 ; $i <= 10; $i++){
            if (!empty($plans->{'file_path' . $i}) && $plans->{'file_path' . $i} == $request->{'old_file_path' . $i}) {
            } else {
                $plans->{'file_path' . $i} = ${'thumbnail_file' . $i};
            }
        }
        $plans->save();
        // stocks
	if ($old_start_day != $request->start_day || $old_end_day != $request->end_day) {
        Stock::where('plan_id', $id)->delete(); //既存の販売在庫をすべて削除
        $start_day = new Carbon($plans->start_day);
        $end_day = new Carbon($plans->end_day);
        $diff_days = $start_day->diffInDays($end_day);
        $loop_count = $diff_days + 1;
        if ($plans->repetition_flag == 0) {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if (($plans->monday == 1 && $start_day->isMonday()) || 
                    ($plans->tuesday == 1 && $start_day->isTuesday()) ||
                    ($plans->wednesday == 1 && $start_day->isWednesday()) ||
                    ($plans->thursday == 1 && $start_day->isThursday()) ||
                    ($plans->friday == 1 && $start_day->isFriday()) ||
                    ($plans->saturday == 1 && $start_day->isSaturday()) ||
                    ($plans->sunday == 1 && $start_day->isSunday())) {
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number;
                    $stock->save();
                }
            }
        } else {
            for ($i = 0; $i < $loop_count; $i++, $start_day->addDay()) {
                if ($plans->repetition_day == $start_day->day) { 
                    $stock = new Stock(); 
                    $stock->plan_id = $plans->id;
                    $stock->res_date = $start_day;
                    $stock->is_active = 1;
                    $stock->res_type = $plans->res_type;
                    $stock->limit_number = $plans->res_limit_number;
                    $stock->save();
                }
            }
        }
        }
        return redirect()->back()->with('message', '変更が完了しました');
    }

    // 複製処理
    public function replicate($id)
    {
        $oldrow = Plan::find($id);
        $newrow = $oldrow->replicate();
        $newrow->save();
        // リレーションテーブル複製1
        $last_insert_id = $newrow->id;
        $relations1 = $oldrow->activities;
        foreach($relations1 as $relation1)
        {
           $activity = new Activity();
           $activity->plan_id = $last_insert_id;
           $activity->name = $relation1->name;
           $activity->start_hour = $relation1->start_hour;
           $activity->start_minute = $relation1->start_minute;
           $activity->end_hour = $relation1->end_hour;
           $activity->end_minute = $relation1->end_minute;
           $activity->is_overday = $relation1->is_overday;
           $activity->days_after = $relation1->days_after;
           $activity->period_flag = $relation1->period_flag;
           $activity->start_day = $relation1->start_day;
           $activity->end_day = $relation1->end_day;
           $activity->save();
        }
        // リレーションテーブル複製2
        $relations2 = $oldrow->prices;
        foreach($relations2 as $relation2)
        {
           $price = new Price();
           $price->plan_id = $last_insert_id;
           $price->type = $relation2->type;
           $price->price = $relation2->price;
           $price->before_price = $relation2->before_price;
           $price->week_flag = $relation2->week_flag;
           $price->monday = $relation2->monday;
           $price->tuesday = $relation2->tuesday;
           $price->wednesday = $relation2->wednesday;
           $price->thursday = $relation2->thursday;
           $price->friday = $relation2->friday;
           $price->saturday = $relation2->saturday;
           $price->sunday = $relation2->sunday;
           $price->holiday = $relation2->holiday;
           $price->save();
        }
        // リレーションテーブル複製3
        $relations3 = $oldrow->stocks;
        foreach($relations3 as $relation3)
        {
           $stock = new Stock();
           $stock->plan_id = $last_insert_id;
           $stock->res_date = $relation3->res_date;
           $stock->res_type = $relation3->res_type;
           $stock->limit_number = $relation3->limit_number;
           $stock->save();
        }
        return redirect()->back();
    }

    // 削除処理
    public function destroy($id)
    {
        $plans = Plan::destroy($id);
        // リレーションレコード削除1
        Activity::where('plan_id', $id)->delete();
        // リレーションレコード削除2
        Price::where('plan_id', $id)->delete();
        return redirect()->back();
    }

    // 選択削除処理
    public function destroySelected(Request $request)
    {
        $ids = explode(',', $request->ids);
        $plans = Plan::destroy($ids);
        // リレーションレコード削除
        foreach ($ids as $id) {
            Activity::where('plan_id', $id)->delete();
            Price::where('plan_id', $id)->delete();
        }
        return redirect()->back();
    }

    // JSON返却
    public function json()
    {
        try {
           $result = Plan::select()->orderBy('sort')->get();
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

    // 表示順変更
    public function sortAjax(Request $request)
    {
        $id = $request->id;
        $sort = $request->sort;
        if ($sort > 0 && $sort < 1000) {
            $plan = Plan::find($id);
            $plan->sort = $sort;
            $plan->save();
            return $request->sort;
        } else {
            return 0;
        }
    }

    // JSON返却 API 種類別プラン情報
    public function apiJson($kind = null)
    {
        try {
           if (is_null($kind)) {
             $result = Plan::select()
             ->orderBy('sort')
             ->where('is_listed', 1)
             ->where('name', '!=', 'コピー用')
             ->get();

           }else{
             if ($kind >= 0) {
               $result = Plan::select()
               ->orderBy('sort')
               ->where('kind', $kind)
               ->where('is_listed', 1)
               ->where('name', '!=', 'コピー用')
               ->get();
             }
           }
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
    // JSON返却 API 個別プラン情報
    public function apiSpecifyJson($id = null, $preview = null)
    {
        try {
           if ($id > 0 && $preview == null) {
               $result = Plan::select()
               ->orderBy('sort')
               ->where('id', $id)
               ->where('name', '!=', 'コピー用')
	       // 休止状態はAPI返却もしない
               ->where('is_listed', 1)
               ->with('prices.price_types')
               ->with('activities')
               ->get();
           } else if ($id > 0 && $preview == 1) {
               $result = Plan::select()
               ->orderBy('sort')
               ->where('id', $id)
               ->where('name', '!=', 'コピー用')
	       // プレビューのため休止状態もAPI返却する
               ->with('prices.price_types')
               ->with('activities')
               ->get();
           }
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
}

