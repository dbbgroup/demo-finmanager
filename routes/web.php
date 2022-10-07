<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


Route::view('/', 'home')->name("/");
Route::view('/auth', 'auth')->name("auth");
Route::view('/payment/add', 'add-payment')->name("add-payment");
Route::view('/coworker/add', 'add-coworkers')->name("add-coworkers");
Route::view('/company/add', 'add-company')->name("add-company");
Route::view('/company', 'companies')->name("companies");
Route::view('/coworker', 'coworkers')->name("coworkers");
Route::view('/payments', 'payments')->name("payments");
Route::view('/settings', 'settings')->name("settings");

Route::view('/payment/success', 'screens.payment')->name("succ-payment");
Route::view('/report/success', 'screens.report')->name("succ-report");

Route::post('/payment/add', [Controllers\add_payment::class, 'Add']);
Route::get('/payments', [App\Http\Controllers\add_payment::class, 'Output']);

Route::post('/company/add', [Controllers\add_company::class, 'Add']);
Route::get('/company', [Controllers\add_company::class, 'Output']);

Route::post('/coworker/add', [Controllers\add_coworker::class, 'Add']);
Route::get('/coworker', [Controllers\add_coworker::class, 'Output']);

Route::view('/report/add', 'add-report')->name("add-report");

Route::post('/report/add', [Controllers\add_report::class, 'Add']);
Route::get('/report', [Controllers\add_report::class, 'GenerateReport']);
