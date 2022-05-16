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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

/*================================================================================
                            FRONTEND PAGE ROUTING
=================================================================================*/

Route::get('/', 'App\Http\Controllers\IndexHomeController@index');
Route::get('/about', 'App\Http\Controllers\AboutController@about');
Route::get('/menu', 'App\Http\Controllers\MenuController@menu');
Route::get('/order', 'App\Http\Controllers\OrderController@order');
Route::get('/reservation', 'App\Http\Controllers\ReservationController@reservation');
Route::get('/contact', 'App\Http\Controllers\ContactController@contact');

Route::post('/storeorder', 'App\Http\Controllers\OrderController@storeorder')->name('storeorder.submit');

/*================================================================================
                            FRONTEND INSERT FUNCTION ROUTING
=================================================================================*/

Route::post('/doreservation', 'App\Http\Controllers\ReservationController@doreservation')->name('doreservation.submit');
Route::post('/docontact', 'App\Http\Controllers\ContactController@docontact')->name('docontact.submit');



/*================================================================================
                            ADMIN DASHBOARD PAGE ROUTING
=================================================================================*/

Route::get('/dashboard', 'App\Http\Controllers\Admin\DashbaordController@dashboard');
Route::get('/expense', 'App\Http\Controllers\Admin\ExpenseController@expense');
Route::get('/dashmenu', 'App\Http\Controllers\Admin\DashMenuController@dashmenu');
Route::get('/message', 'App\Http\Controllers\Admin\MessageController@message');
Route::get('/newadmin', 'App\Http\Controllers\Admin\NewAdminController@newadmin');
Route::get('/occupancy', 'App\Http\Controllers\Admin\OccupancyController@occupancy');
Route::get('/dashorder', 'App\Http\Controllers\Admin\DashOrderController@dashorder');
Route::get('/revenue', 'App\Http\Controllers\Admin\RevenueController@revenue');
Route::get('/staff', 'App\Http\Controllers\Admin\StaffController@staff');
Route::get('/tablereservation', 'App\Http\Controllers\Admin\TableReservationController@tablereservation');



/*================================================================================
                            BACKEND INSERT FUNCTION ROUTING
=================================================================================*/

Route::post('/doaddmenu', 'App\Http\Controllers\Admin\DashMenuController@addfood')->name('doaddmenu.submit');

Route::post('/doaddcategory', 'App\Http\Controllers\Admin\DashMenuController@addcategory')->name('doaddcategory.submit');

Route::post('/doaddadmin', 'App\Http\Controllers\Admin\NewAdminController@doaddadmin')->name('doaddadmin.submit');

Route::post('/doaddstaff', 'App\Http\Controllers\Admin\StaffController@doaddstaff')->name('doaddstaff.submit');

Route::post('/doaddexpense', 'App\Http\Controllers\Admin\ExpenseController@doaddexpense')->name('doaddexpense.submit');

Route::post('/doaddexpensecategories', 'App\Http\Controllers\Admin\ExpenseController@doaddexpensecategories')->name('doaddexpensecategories.submit');


Route::post('/editmenu', 'App\Http\Controllers\Admin\DashMenuController@editmenu')->name('editmenu.submit');

Route::get('/removemenu/{id}', 'App\Http\Controllers\Admin\DashMenuController@removemenu');

Route::get('/confirm/{id}/{name}', 'App\Http\Controllers\Admin\DashOrderController@confirm');

Route::get('/removeorder/{id}', 'App\Http\Controllers\Admin\DashOrderController@removeorder');


Route::get('/approve/{id}/{name}', 'App\Http\Controllers\Admin\TableReservationController@approve');

Route::get('/deletereservation/{id}', 'App\Http\Controllers\Admin\TableReservationController@deletereservation');

Route::get('/removeexpense/{id}', 'App\Http\Controllers\Admin\ExpenseController@removeexpense');


Route::get('/removestaff/{id}', 'App\Http\Controllers\Admin\StaffController@removestaff');


Route::get('/removemessage/{id}', 'App\Http\Controllers\Admin\MessageController@removemessage');

Route::post('/updateprofile', 'App\Http\Controllers\Admin\DashbaordController@editprofile')->name('updateprofile.submit');

Route::post('/editstaff', 'App\Http\Controllers\Admin\StaffController@editstaff')->name('editstaff.submit');

Route::post('/editexpense', 'App\Http\Controllers\Admin\ExpenseController@editexpense')->name('editexpense.submit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
