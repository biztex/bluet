<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LogoutResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // デフォルトのFortifyルーティングを無効化（任意）
        //Fortify::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        // マルチログイン用のカスタマイズ(注：上記より下に記述)
        $this->multiLoginCustomize();
    }
    /**
     * マルチログインのカスタマイズ用メソッド
     * @return void
     */
    private function multiLoginCustomize()
    {
        // urlからユーザーを取得
        $user = \Str::of(\Request::path())->before('/');
        if(in_array($user, config('fortify.users'))){
            // FortifyのviewPrefixを書き換え（各ユーザー用viewを使用）
            Fortify::viewPrefix($user.'.auth.');
            // 権限ページに合わせたguardの切り替え
            \Config::set('fortify.guard', \Str::plural($user));
            // password_resetテーブルの切り替え
            \Config::set('fortify.passwords', \Str::plural($user));
            // ダッシュボードの切り替え
            \Config::set('fortify.home', '/'.$user.RouteServiceProvider::HOME);
        }
        // ログアウト画面の切り替え
        $this->app
        ->singleton(LogoutResponse::class, function ($app) {
            return new \App\Http\Responses\LogoutResponse;
        });
    }
}
