<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\SetResultController;
use App\Http\Controllers\MatchResultController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CourtReservationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('countries', CountryController::class);
Route::resource('addresses', AddressController::class);
Route::resource('roles', RoleController::class);
Route::resource('courts', CourtController::class);
Route::resource('cities', CityController::class);
Route::resource('members', MemberController::class);
Route::resource('matches', MatchController::class);
Route::resource('set_results', SetResultController::class);
Route::resource('match_results', MatchResultController::class);
Route::resource('court_reservation', CourtReservationController::class);
