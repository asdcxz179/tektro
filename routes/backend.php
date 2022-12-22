<?php
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::group(['as' => 'backend.', 'prefix' => 'backend'],function () {
    //登入
    Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
        Route::get('/login', [Controllers\Backend\LoginController::class, 'index'])->name('login')->middleware(['guest:'.config('fortify.guard')]);
        $limiter = config('fortify.limiters.login');
        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware(array_filter([
                'guest:'.config('fortify.guard'),
                $limiter ? 'throttle:'.$limiter : null,
            ]));
    });

    Route::group(['middleware' => ['auth:admin', 'user.status', 'verified']],function () {
        Route::get('/home/dashboard', [Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
        //修改密碼
        Route::resource('/edit_password', Controllers\Backend\AuthController::class);
        
        //操作紀錄
        Route::resource('/audits', Controllers\Backend\AuditController::class);

        //資訊
        Route::group(['prefix' => 'info'],function () {
            //最新消息
            Route::resource('/news', Controllers\Backend\UserController::class);
            Route::put('/news/status/{news}', [Controllers\Backend\UserController::class, 'status'])->name('news.status');
            //人才招募
            Route::get('/talents/select', [Controllers\Backend\UserController::class, 'select'])->name('talents.select');
            Route::resource('/talents', Controllers\Backend\UserController::class);  
            Route::put('/talents/status/{talents}', [Controllers\Backend\UserController::class, 'status'])->name('talents.status');
        });   
        
        //關於我們
        Route::resource('/abouts', Controllers\Backend\UserController::class);
        Route::put('/abouts/status/{about}', [Controllers\Backend\UserController::class, 'status'])->name('abouts.status');

        //產品品牌
        Route::group(['prefix' => 'product_label'],function () {
            //品牌
            Route::get('/product_brands/select', [Controllers\Backend\UserController::class, 'select'])->name('product_brands.select');
            Route::resource('/product_brands', Controllers\Backend\UserController::class);
            Route::put('/product_brands/status/{product_brand}', [Controllers\Backend\UserController::class, 'status'])->name('product_brands.status');
            //分類
            Route::get('/product_categories/select', [Controllers\Backend\UserController::class, 'select'])->name('product_categories.select');
            Route::resource('/product_categories', Controllers\Backend\UserController::class);  
            Route::put('/product_categories/status/{product_category}', [Controllers\Backend\UserController::class, 'status'])->name('product_categories.status');
            //標籤
            Route::get('/product_tags/select', [Controllers\Backend\UserController::class, 'select'])->name('product_tags.select');
            Route::resource('/product_tags', Controllers\Backend\UserController::class);  
            Route::put('/product_tags/status/{product_tag}', [Controllers\Backend\UserController::class, 'status'])->name('product_tags.status');
            //關鍵字
            Route::get('/product_keywords/select', [Controllers\Backend\UserController::class, 'select'])->name('product_keywords.select');
            Route::resource('/product_keywords', Controllers\Backend\UserController::class);  
            Route::put('/product_keywords/status/{product_keyword}', [Controllers\Backend\UserController::class, 'status'])->name('product_keywords.status');
            //產品
            Route::get('/products/select', [Controllers\Backend\UserController::class, 'select'])->name('products.select');
            Route::resource('/products', Controllers\Backend\UserController::class);  
            Route::put('/products/status/{product}', [Controllers\Backend\UserController::class, 'status'])->name('products.status');
        });          

        Route::group(['prefix' => 'users_setting'],function () {
            //新增管理員
            Route::resource('/users', Controllers\Backend\UserController::class);
            Route::put('/users/status/{user}', [Controllers\Backend\UserController::class, 'status'])->name('users.status');
            //角色
            Route::get('/roles/select', [Controllers\Backend\RoleController::class, 'select'])->name('roles.select');
            Route::resource('/roles', Controllers\Backend\RoleController::class);  
        });   

        Route::group(['prefix' => 'test'],function () {
            Route::resource('/template', Controllers\Backend\TemplateController::class);
            Route::put('/template/status/{template}', [Controllers\Backend\TemplateController::class, 'status'])->name('template.status');
        });  

        Route::post('/upload', [Controllers\Backend\UploadController::class, 'store'])->name('upload.store');
        Route::delete('/upload', [Controllers\Backend\UploadController::class, 'destroy'])->name('upload.destroy');
    });
});
