<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RecoveryCodeController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\TwoFactorQrCodeController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/**
* 認証
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/**
* API
*/

Route::get('api/plans/json/{kind?}', '\App\Http\Controllers\PlansController@apiJson');
Route::get('api/plan/json/{id?}/{preview?}', '\App\Http\Controllers\PlansController@apiSpecifyJson');
Route::get('api/stocks/json/{year?}/{month?}/{plan?}', '\App\Http\Controllers\StocksController@indexJson');
Route::get('reservations/create', '\App\Http\Controllers\ReservationsController@createForUser');
Route::post('reservations/store', '\App\Http\Controllers\ReservationsController@storeForUser');

/**
* 決済
*/
Route::get('menu', '\App\Http\Controllers\MenuController@index');
Route::get('card', '\App\Http\Controllers\CardController@index');
Route::post('card', '\App\Http\Controllers\CardController@cardAuthorize');
Route::get('card/result/{orderId}', '\App\Http\Controllers\CardController@authorizeResult');
Route::get('mpi', '\App\Http\Controllers\MpiController@index');
Route::post('mpi', '\App\Http\Controllers\MpiController@mpiAuthorize');
Route::post('mpi/result', '\App\Http\Controllers\MpiController@result');
Route::get('cvs', '\App\Http\Controllers\CvsController@index');
Route::post('cvs', '\App\Http\Controllers\CvsController@cvsAuthorize');
Route::get('cvs/result/{orderId}', '\App\Http\Controllers\CvsController@authorizeResult');
Route::get('pay', '\App\Http\Controllers\ReservationsController@emailToPay');

Route::post('push/mpi', 'PushController@mpi');

/**
* 非認証ページ
*/
//Route::get('user/reservations/create', '\App\Http\Controllers\ReservationsController@createForUser');
/**
* ルーティング（管理者・クライアント・ユーザー）
*/
foreach(config('fortify.users') as $user){
    Route::prefix($user)
    ->namespace('\Laravel\Fortify\Http\Controllers')
    ->name($user.'.')
    ->group(function () use($user) {
        /**
        * ログイン 画面
        * @method GET
        */
        Route::name('login')->middleware('guest')
        ->get('/login', 'AuthenticatedSessionController@create');
        /**
        * ログイン 認証
        * @method POST
        */
        Route::name('login')->middleware(['guest', 'throttle:'.config('fortify.limiters.login')])
        ->post('/login', 'AuthenticatedSessionController@store');
        /**
        * ログアウト
        * @method POST
        */
        Route::name('logout')->middleware('guest')
        ->post('/logout', 'AuthenticatedSessionController@destroy');
        /**
        * ダッシュボード
        * @method GET
        */
        Route::name('mypage')->middleware(['auth:'.\Str::plural($user), 'verified'])
        ->get('/mypage', function () use($user) {
            return view($user.'.mypage');
        });

        /**
        * 認証後ページ
        */
        Route::group(['middleware' => 'auth:'.\Str::plural($user), 'verified'], function() {
            /**
            * Adminルーティング
            */
            /**
            * Clientルーティング
            */
            // clients
            Route::get('json', '\App\Http\Controllers\ClientsController@json');
            Route::get('/', '\App\Http\Controllers\ClientsController@index');
            Route::get('create', '\App\Http\Controllers\ClientsController@create');
            Route::post('store', '\App\Http\Controllers\ClientsController@store');
            Route::get('edit/{id}', '\App\Http\Controllers\ClientsController@edit');
            Route::put('update/{id}', '\App\Http\Controllers\ClientsController@update');
            Route::post('destroy/{id}', '\App\Http\Controllers\ClientsController@destroy');
            Route::post('destroy-selected', '\App\Http\Controllers\ClientsController@destroySelected');
            Route::get('replicate/{id}/', '\App\Http\Controllers\ClientsController@replicate');
            Route::get('users', '\App\Http\Controllers\ClientsController@indexUser');
            Route::get('users/create', '\App\Http\Controllers\ClientsController@createUser');
            Route::post('users/store', '\App\Http\Controllers\ClientsController@storeUser');
            Route::get('users/edit/{id}', '\App\Http\Controllers\ClientsController@editUser');
            Route::put('users/update/{id}', '\App\Http\Controllers\ClientsController@updateUser');
            Route::post('users/destroy/{id}', '\App\Http\Controllers\ClientsController@destroyUser');
            Route::post('users/destroy-selected', '\App\Http\Controllers\ClientsController@destroySelectedUser');
            Route::get('users/json', '\App\Http\Controllers\ClientsController@jsonUser');
            Route::get('users/csv', '\App\Http\Controllers\ClientsController@downloadUserCsv');
            // companies
            Route::get('companies/json', '\App\Http\Controllers\CompaniesController@json');
            Route::get('companies', '\App\Http\Controllers\CompaniesController@index');
            Route::get('companies/create', '\App\Http\Controllers\CompaniesController@create');
            Route::post('companies/store', '\App\Http\Controllers\CompaniesController@store');
            Route::get('companies/edit/{id}', '\App\Http\Controllers\CompaniesController@edit');
            Route::put('companies/update/{id}', '\App\Http\Controllers\CompaniesController@update');
            Route::post('companies/destroy-selected', '\App\Http\Controllers\CompaniesController@destroySelected');
            Route::get('companies/replicate/{id}/', '\App\Http\Controllers\CompaniesController@replicate');
            // bankaccounts
            Route::get('bankaccounts/json', '\App\Http\Controllers\BankaccountsController@json');
            Route::get('bankaccounts', '\App\Http\Controllers\BankaccountsController@index');
            Route::get('bankaccounts/create', '\App\Http\Controllers\BankaccountsController@create');
            Route::post('bankaccounts/store', '\App\Http\Controllers\BankaccountsController@store');
            Route::get('bankaccounts/edit/{id}', '\App\Http\Controllers\BankaccountsController@edit');
            Route::put('bankaccounts/update/{id}', '\App\Http\Controllers\BankaccountsController@update');
            Route::post('bankaccounts/destroy-selected', '\App\Http\Controllers\BankaccountsController@destroySelected');
            Route::get('bankaccounts/replicate/{id}/', '\App\Http\Controllers\BankaccountsController@replicate');
            // plans
            Route::get('plans/json', '\App\Http\Controllers\PlansController@json');
            Route::get('plans', '\App\Http\Controllers\PlansController@index');
            Route::get('plans/create', '\App\Http\Controllers\PlansController@create');
            Route::post('plans/store', '\App\Http\Controllers\PlansController@store');
            Route::post('plans/store-tmp', '\App\Http\Controllers\PlansController@storeTmp');
            Route::put('plans/update-tmp/{id}', '\App\Http\Controllers\PlansController@updateTmp');
            Route::get('plans/edit/{id}', '\App\Http\Controllers\PlansController@edit');
            Route::put('plans/update/{id}', '\App\Http\Controllers\PlansController@update');
            Route::post('plans/destroy/{id}', '\App\Http\Controllers\PlansController@destroy');
            Route::post('plans/destroy-selected', '\App\Http\Controllers\PlansController@destroySelected');
            Route::get('plans/replicate/{id}/', '\App\Http\Controllers\PlansController@replicate');
            Route::post('plans/sort-ajax', '\App\Http\Controllers\PlansController@sortAjax');
            // stocks
            Route::get('stocks/{year?}/{month?}/{plan?}', '\App\Http\Controllers\StocksController@index');
            Route::put('stocks/update/{id}', '\App\Http\Controllers\StocksController@update');
            // reservations
            Route::get('reservations/json/{id?}', '\App\Http\Controllers\ReservationsController@json');
            Route::get('reservations', '\App\Http\Controllers\ReservationsController@index');
            Route::get('reservations/create', '\App\Http\Controllers\ReservationsController@create');
            Route::post('reservations/store', '\App\Http\Controllers\ReservationsController@store');
            Route::get('reservations/edit/{id}', '\App\Http\Controllers\ReservationsController@edit');
            Route::put('reservations/update/{id}', '\App\Http\Controllers\ReservationsController@update');
            Route::put('reservations/sendpaymentmail/{id}', '\App\Http\Controllers\ReservationsController@sendPaymentMail');
            Route::post('reservations/destroy/{id}', '\App\Http\Controllers\ReservationsController@destroy');
            Route::post('reservations/destroy-selected', '\App\Http\Controllers\ReservationsController@destroySelected');
            // genres
            Route::get('genres/json', '\App\Http\Controllers\GenresController@json');
            Route::get('genres/json/{name}', '\App\Http\Controllers\GenresController@jsonSpecific');
            Route::get('genres', '\App\Http\Controllers\GenresController@index');
            Route::get('genres/create', '\App\Http\Controllers\GenresController@create');
            Route::post('genres/store', '\App\Http\Controllers\GenresController@store');
            Route::get('genres/edit/{id}', '\App\Http\Controllers\GenresController@edit');
            Route::put('genres/update/{id}', '\App\Http\Controllers\GenresController@update');
            Route::post('genres/destroy-selected', '\App\Http\Controllers\GenresController@destroySelected');
            Route::get('genres/replicate/{id}/', '\App\Http\Controllers\GenresController@replicate');
	    // price_types
            Route::get('price_types/json', '\App\Http\Controllers\PriceTypesController@json');
            Route::get('price_types', '\App\Http\Controllers\PriceTypesController@index');
            Route::get('price_types/create', '\App\Http\Controllers\PriceTypesController@create');
            Route::post('price_types/store', '\App\Http\Controllers\PriceTypesController@store');
            Route::get('price_types/edit/{id}', '\App\Http\Controllers\PriceTypesController@edit');
            Route::put('price_types/update/{id}', '\App\Http\Controllers\PriceTypesController@update');
            Route::post('price_types/sort-ajax', '\App\Http\Controllers\PriceTypesController@sortAjax');

            // cars
            Route::get('publishers/json', '\App\Http\Controllers\PublishersController@json');
            Route::get('publishers', '\App\Http\Controllers\PublishersController@index');
            Route::get('publishers/create', '\App\Http\Controllers\PublishersController@create');
            Route::post('publishers/store', '\App\Http\Controllers\PublishersController@store');
            Route::get('publishers/edit/{id}', '\App\Http\Controllers\PublishersController@edit');
            Route::put('publishers/update/{id}', '\App\Http\Controllers\PublishersController@update');
            Route::post('publishers/destroy-selected', '\App\Http\Controllers\PublishersController@destroySelected');
            Route::get('/publishers/replicate/{id}/', '\App\Http\Controllers\PublishersController@replicate');
            Route::get('cars/index', '\App\Http\Controllers\CarsController@index');
            Route::get('cars/json', '\App\Http\Controllers\CarsController@json');
            Route::get('create_vehicle_listings', function () { return view('user.create_vehicle_listings');});
            /**
            * Userルーティング
            */
        });
    });
}

/**
* 新規ユーザー登録
*/
$enableViews = config('fortify.views', true);
$twoFactorLimiter = config('fortify.limiters.two-factor');

// Password Reset...
if (Features::enabled(Features::resetPasswords())) {
    if ($enableViews) {
        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.request');

        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
            ->middleware(['guest'])
            ->name('password.reset');
    }

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware(['guest'])
        ->name('password.email');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware(['guest'])
        ->name('password.update');
}

// Registration...
if (Features::enabled(Features::registration())) {
    if ($enableViews) {
        Route::get('/user/register', [RegisteredUserController::class, 'create'])
            ->middleware(['guest'])
            ->name('/user/register');
    }

    Route::post('/user/register', [RegisteredUserController::class, 'store'])
        ->middleware(['guest']);
}

// Email Verification...
if (Features::enabled(Features::emailVerification())) {
    if ($enableViews) {
        Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
            ->middleware(['auth'])
            ->name('verification.notice');
    }

    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');
}

// Profile Information...
if (Features::enabled(Features::updateProfileInformation())) {
    Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
        ->middleware(['auth'])
        ->name('user-profile-information.update');
}

// Passwords...
if (Features::enabled(Features::updatePasswords())) {
    Route::put('/user/password', [PasswordController::class, 'update'])
        ->middleware(['auth'])
        ->name('user-password.update');
}

// Password Confirmation...
if ($enableViews) {
    Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware(['auth'])
        ->name('password.confirm');
}

Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
    ->middleware(['auth'])
    ->name('password.confirmation');

Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware(['auth']);

// Two Factor Authentication...
if (Features::enabled(Features::twoFactorAuthentication())) {
    if ($enableViews) {
        Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
            ->middleware(['guest'])
            ->name('two-factor.login');
    }

    Route::post('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest',
            $twoFactorLimiter ? 'throttle:'.$twoFactorLimiter : null,
        ]));

    $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
        ? ['auth', 'password.confirm']
        : ['auth'];

    Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
        ->middleware($twoFactorMiddleware);

    Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
        ->middleware($twoFactorMiddleware);

    Route::get('/user/two-factor-qr-code', [TwoFactorQrCodeController::class, 'show'])
        ->middleware($twoFactorMiddleware);

    Route::get('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'index'])
        ->middleware($twoFactorMiddleware);

    Route::post('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'store'])
        ->middleware($twoFactorMiddleware);
}
