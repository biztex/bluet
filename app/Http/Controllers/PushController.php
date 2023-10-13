<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use tgMdk\TGMDK_Exception;
use tgMdk\TGMDK_MerchantUtility;
use tgMdk\TGMDK_Config;
use tgMdk\TGMDK_Logger;
use tgMdk\TGMDK_Transaction;
use App\Models\Reservation;
use App\Models\Price;
use App\Models\Plan;
use App\Models\User;
use App\Models\PriceType;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Yasumi\Yasumi;
use DateTime;

class PushController extends Controller
{

    public function mpi(Request $request)
    {
        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }
        TGMDK_Config::getInstance();
        $body = $request->getContent();
        Log::debug("body:" . $body);

        $hmac = $request->header('content-hmac');
        Log::debug("content-hmac:" . $hmac);

        try {
            if (TGMDK_MerchantUtility::checkMessage($body, $hmac)) {
                $array1 = explode('&', $body);
                $res = array();
                foreach($array1 as $arr){
                    $arr0 = explode('=', $arr);
                    $res[$arr0[0]] = $arr0[1];
                }
                // 入金通知件数を取得
                $max = $res['numberOfNotify'];
                //入金結果を予約情報に反映
                for($i=1;$i <= $max; $i++){
                    $reservation = Reservation::where('order_id', $res[sprintf('orderId%04d', $i-1)])->first();
                    if(!is_null($reservation)){
                        $reservation->status = '予約確定';
                        $reservation->save();
                        // メール送信タイミング変更
                        // 合計金額セット
                        $amount = 0;
                        $dt = new Carbon($reservation->fixed_datetime);
                        $week_map = [
                            0 => 'sunday',
                            1 => 'monday',
                            2 => 'tuesday',
                            3 => 'wednesday',
                            4 => 'thursday',
                            5 => 'friday',
                            6 => 'saturday',
                        ];
                        $day_of_week = $dt->dayOfWeek;
                        $weekday = $week_map[$day_of_week];
                        // 祝日判定
                        $holidays = Yasumi::create('Japan', $dt->format('Y'));
                        foreach ($holidays->getHolidayDates() as $holiday) {
                            if ($holiday == $dt->format('Y-m-d')) {
                        $weekday = 'holiday';
                            }
                        }
                        foreach ($reservation->plan->prices as $price) {
                            if ($reservation->type0_number && $price->type == 0) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type0_number * $price->price; 
                            } else {
                                        $amount += $reservation->type0_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type1_number && $price->type == 1) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type1_number * $price->price; 
                            } else {
                                        $amount += $reservation->type1_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type2_number && $price->type == 2) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type2_number * $price->price; 
                            } else {
                                        $amount += $reservation->type2_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type3_number && $price->type == 3) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type3_number * $price->price; 
                            } else {
                                        $amount += $reservation->type3_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type4_number && $price->type == 4) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type4_number * $price->price; 
                            } else {
                                        $amount += $reservation->type4_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type5_number && $price->type == 5) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type5_number * $price->price; 
                            } else {
                                        $amount += $reservation->type5_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type6_number && $price->type == 6) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type6_number * $price->price; 
                            } else {
                                        $amount += $reservation->type6_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type7_number && $price->type == 7) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type7_number * $price->price; 
                            } else {
                                        $amount += $reservation->type7_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type8_number && $price->type == 8) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type8_number * $price->price; 
                            } else {
                                        $amount += $reservation->type8_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type9_number && $price->type == 9) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type9_number * $price->price; 
                            } else {
                                        $amount += $reservation->type9_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type10_number && $price->type == 10) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type10_number * $price->price; 
                            } else {
                                        $amount += $reservation->type10_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type11_number && $price->type == 11) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type11_number * $price->price; 
                            } else {
                                        $amount += $reservation->type11_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type12_number && $price->type == 12) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type12_number * $price->price; 
                            } else {
                                        $amount += $reservation->type12_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type13_number && $price->type == 13) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type13_number * $price->price; 
                            } else {
                                        $amount += $reservation->type13_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type14_number && $price->type == 14) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type14_number * $price->price; 
                            } else {
                                        $amount += $reservation->type14_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type15_number && $price->type == 15) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type15_number * $price->price; 
                            } else {
                                        $amount += $reservation->type15_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type16_number && $price->type == 16) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type16_number * $price->price; 
                            } else {
                                        $amount += $reservation->type16_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type17_number && $price->type == 17) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type17_number * $price->price; 
                            } else {
                                        $amount += $reservation->type17_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type18_number && $price->type == 18) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type18_number * $price->price; 
                            } else {
                                        $amount += $reservation->type18_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type19_number && $price->type == 19) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type19_number * $price->price; 
                            } else {
                                        $amount += $reservation->type19_number * $price->{$weekday}; 
                            }
                            } else if ($reservation->type20_number && $price->type == 20) {
                                if ($price->week_flag == 0) {
                                    $amount += $reservation->type20_number * $price->price; 
                            } else {
                                        $amount += $reservation->type20_number * $price->{$weekday}; 
                            }
                            }
                        }
                        // 料金区分２０以上対応
                        if(!is_null($reservation->Number_of_reservations)){
                            $Number_of_reservations = json_decode($reservation->Number_of_reservations);
                            // 合計金額リセット
                            $amount = 0;
                            foreach ($reservation->plan->prices as $price) {
                                for($j=0;$j<=100;$j++){
                                    if(array_key_exists(sprintf('type%d_number', $j),$Number_of_reservations)){
                                        if($Number_of_reservations->{sprintf('type%d_number', $j)} > 0 && $price->type == $j){
                                            $amount += $Number_of_reservations->{sprintf('type%d_number', $j)} * $price->price;
                                        }
                                    }
                                }
                            }
                        }
                        Mail::send(['text' => 'user.reservations.email'], [
                            "number" => $reservation->number,
                            "plan" => $reservation->plan->name,
                            "date" => date('Y年m月d日', strtotime($reservation->fixed_datetime)),
                            "activity" => $reservation->activity_date,
                            "name_last" => $reservation->user->name_last,
                            "name_first" => $reservation->user->name_first,
                            "email" => $reservation->user->email,
                            "tel" => $reservation->user->tel,
                            "tel2" => $reservation->user->tel2,
                            "reservation" => $reservation,
                            "payment" => 'コンビニ決済',
                            "haraikomiUrl" => null,
                            "receiptNo" => null,
                            "weekday" => $weekday,
                            "amount" => $amount
                        ], function($message) use($reservation) {
                            if ($reservation->user->email) {
                                $message
                                ->to($reservation->user->email)
                                ->bcc(['blue@quality-t.com', 'test.zenryo@gmail.com'])
                                //->bcc(['test.zenryo@gmail.com'])
                                ->from('no-reply@blue-tourism-hokkaido.website')
                                ->subject("【ブルーツーリズム北海道】コンビニ決済 予約確定メール");
                        }
                        });
                        // メール送信タイミング変更
                        Mail::send(['text' => 'user.reservations.cvs_complete_email'], [
                            "number" => $reservation->number,
                        ], function($message) use($reservation) {
                            $message
                            ->to(['blue@quality-t.com', 'test.zenryo@gmail.com'])
                            ->from('blue@quality-t.com')
                            ->subject("【ブルーツーリズム北海道】コンビニ決済完了メール");
                        });
                    }
                }
                Log::debug('入金通知データの検証に成功しました。');
                return response("OK", 200);
            } else {
                Log::debug('入金通知データの検証に失敗しました。');
            }
        } catch (TGMDK_Exception $e) {
            Log::error('入金通知データの検証中に例外が発生しました。');
        }
        return response("NG", 500);
    }
}