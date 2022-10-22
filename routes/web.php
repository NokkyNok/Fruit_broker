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


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/', 'PagesController@login')->name('acc-login');
Route::get('/accounts/register', 'PagesController@register')->name('acc-register');
Route::get('/alogin', 'PagesController@alogin')->name('alogin');
Route::get('/elogin', 'PagesController@elogin')->name('elogin');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/registration', 'pagesController@registering')->name('registration');
Route::post('/registr', 'pagesController@register')->name('registr');
Route::get('/new-supply', 'pagesController@newsupply')->name('new')->middleware('auth');
Route::get('/reg','RegController@store')->name('reg');

Route::resource('/supply','SupplyController');
Route::resource('/expense','ExpensesController');
Route::get('/brokers','pagesController@brokers');
Route::delete('/userd/{id}','pagesController@userd')->name('userd');
Route::get('/dashboard','PagesController@dash')->middleware('auth');
Route::get('/supplies', 'PagesController@supply');
Route::get('/expenses','PagesController@expense');
Route::get('/expense','PagesController@pxpense');
Route::post('/new-expense','PagesController@nexpense')->name('nexpense');
Route::get('inquiries','PagesController@inquiry');

Route::resource('report','BrokerController');
Route::get('reports/supply-report','PagesController@generate_supply_report');
Route::get('print-supply','PagesController@prints');

/* supplier */
Route::get('/supplies-status', 'pagesController@supplierdash')->middleware('auth');
Route::get('/supplies-new-request', 'pagesController@inquire')->middleware('auth');
Route::get('/request-status', 'pagesController@inq')->middleware('auth');
Route::get('/completion/{id}', 'pagesController@state')->name('state');
Route::resource('/inquire','InquireController');
Route::get('/approve/{id}','PagesController@approve');
Route::get('/decline/{id}','PagesController@decline');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

	Route::resource('/users','UsersController');

});

