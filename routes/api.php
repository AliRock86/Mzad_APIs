<?php

use App\Http\Controllers\ImageControllerAPI;
use App\Http\Controllers\OutbiddingControllerAPI;
use App\Http\Controllers\MzadItemControllerAPI;
use App\Http\Controllers\UserControllerAPI;
use App\Http\Controllers\MzadTypeControllerAPI;
use App\Http\Controllers\AddresseControllerAPI;
use App\Http\Controllers\ProvinceControllerAPI;
use App\Http\Controllers\StatusControllerAPI;
use App\Http\Controllers\StatusTypeControllerAPI;
use App\Http\Controllers\RoleControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| Role endpoints
|--------------------------------------------------------------------------
 */
Route::name('roles.')->controller(RoleControllerAPI::class)->prefix('roles')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{role}', 'show')->name('show');
    Route::patch('/{role}', 'update')->name('update');
    Route::delete('/{role}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| StatusType endpoints
|--------------------------------------------------------------------------
 */
Route::name('status-types.')->controller(StatusTypeControllerAPI::class)->prefix('status-types')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{statusType}', 'show')->name('show');
    Route::patch('/{statusType}', 'update')->name('update');
    Route::delete('/{statusType}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Status endpoints
|--------------------------------------------------------------------------
 */
Route::name('statuses.')->controller(StatusControllerAPI::class)->prefix('statuses')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{status}', 'show')->name('show');
    Route::patch('/{status}', 'update')->name('update');
    Route::delete('/{status}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Province endpoints
|--------------------------------------------------------------------------
 */
Route::name('provinces.')->controller(ProvinceControllerAPI::class)->prefix('provinces')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{province}', 'show')->name('show');
    Route::patch('/{province}', 'update')->name('update');
    Route::delete('/{province}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Addresse endpoints
|--------------------------------------------------------------------------
 */
Route::name('addresses.')->controller(AddresseControllerAPI::class)->prefix('addresses')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{addresse}', 'show')->name('show');
    Route::patch('/{addresse}', 'update')->name('update');
    Route::delete('/{addresse}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| MzadType endpoints
|--------------------------------------------------------------------------
 */
Route::name('mzad-types.')->controller(MzadTypeControllerAPI::class)->prefix('mzad-types')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{mzadType}', 'show')->name('show');
    Route::patch('/{mzadType}', 'update')->name('update');
    Route::delete('/{mzadType}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| User endpoints
|--------------------------------------------------------------------------
 */
Route::name('users.')->controller(UserControllerAPI::class)->prefix('users')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{user}', 'show')->name('show');
    Route::patch('/{user}', 'update')->name('update');
    Route::delete('/{user}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| MzadItem endpoints
|--------------------------------------------------------------------------
 */
Route::name('mzad-items.')->controller(MzadItemControllerAPI::class)->prefix('mzad-items')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{mzadItem}', 'show')->name('show');
    Route::patch('/{mzadItem}', 'update')->name('update');
    Route::delete('/{mzadItem}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Outbidding endpoints
|--------------------------------------------------------------------------
 */
Route::name('outbiddings.')->controller(OutbiddingControllerAPI::class)->prefix('outbiddings')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{outbidding}', 'show')->name('show');
    Route::patch('/{outbidding}', 'update')->name('update');
    Route::delete('/{outbidding}', 'destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Image endpoints
|--------------------------------------------------------------------------
 */
Route::name('images.')->controller(ImageControllerAPI::class)->prefix('images')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('create');
    Route::get('/{image}', 'show')->name('show');
    Route::patch('/{image}', 'update')->name('update');
    Route::delete('/{image}', 'destroy')->name('destroy');
});

