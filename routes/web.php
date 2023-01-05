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
Route::middleware(['lang','init'])->name('front.')->prefix('{lang?}')->group(function () {
  Route::resource('/','App\Http\Controllers\Front\IndexController');
  Route::resource('/brand','App\Http\Controllers\Front\BrandController');
  Route::resource('/category','App\Http\Controllers\Front\CategoryController');
  Route::resource('/tag','App\Http\Controllers\Front\TagController');
  Route::resource('/product','App\Http\Controllers\Front\ProductController');
  Route::resource('/support','App\Http\Controllers\Front\SupportController');
  Route::resource('/news','App\Http\Controllers\Front\NewsController');
  Route::resource('/recruit','App\Http\Controllers\Front\RecruitController');
  Route::resource('/about','App\Http\Controllers\Front\AboutController');
  Route::resource('/video','App\Http\Controllers\Front\VideoController');
  Route::resource('/faq','App\Http\Controllers\Front\FaqController');
  Route::resource('/warranty','App\Http\Controllers\Front\WarrantyController');
  Route::resource('/contact','App\Http\Controllers\Front\ContactController');
  Route::resource('/global','App\Http\Controllers\Front\GlobalController');
  Route::resource('/search','App\Http\Controllers\Front\SearchController');
  Route::resource('/subscription','App\Http\Controllers\Front\SubscriptionController');
});
Route::get('/upload/Product/{name}','App\Http\Controllers\Front\DownloadController@show')->name('front.download');

//登出 前後台共用
Route::post('/logout', [Controllers\AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
  $hello = '';
  if(Auth::guard('admin')->check()){
    $hello = 'Hello admin';
  }else if(Auth::guard('web')->check()){
    $hello = 'Hello web';
  }
  return 'dashboard<br />' . $hello;
})->name('dashboard');
