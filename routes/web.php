<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/', 'main_pages.home');

Route::view('/about', 'main_pages.about');

Route::view('/contact', 'main_pages.contact');

Route::get('/plans', 'PlanController@front');

Auth::routes();

Route::get('/make_deposit', 'DepositController@create');

Route::post('/deposit/store', 'DepositController@store');

Route::get('/deposits', 'DepositController@admin');
Route::get('/confirm-depo', 'DepositController@index');

Route::put('deposits/{deposit}/complete', 'DepositController@complete')->name('deposit.complete');

Route::get('/make_withdrawal', 'WithdrawalController@create');

Route::post('/withdrawal/store', 'WithdrawalController@store');
Route::post('/contact', 'ContactController@send');

Route::get('/withdrawals', 'WithdrawalController@admin');
Route::get('/confirm-with', 'WithdrawalController@index');

Route::put('withdrawal/{withdrawal}/complete', 'WithdrawalController@complete')->name('withdrawal.complete');




Route::get('/dashboard', 'DashboardController@index');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-index', 'UserController@index');

Route::put('users/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('profile/{user}/edit', 'UserController@update')->name('user.profile');
Route::get('/referral', 'ReferralController@index');
Route::get('/edit-profile', 'UserController@editprofile');