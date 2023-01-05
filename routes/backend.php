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

        //首頁
        Route::resource('/homes', Controllers\Backend\HomeController::class);
        Route::put('/homes/status/{homes}', [Controllers\Backend\HomeController::class, 'status'])->name('homes.status');

        //資訊
        Route::group(['prefix' => 'info'],function () {
            //最新消息
            Route::resource('/news', Controllers\Backend\NewsController::class);
            Route::put('/news/status/{news}', [Controllers\Backend\NewsController::class, 'status'])->name('news.status');
            //人才招募
            Route::resource('/talents', Controllers\Backend\TalentsController::class);  
            Route::put('/talents/status/{talents}', [Controllers\Backend\TalentsController::class, 'status'])->name('talents.status');
        });   
        
        //關於我們
        Route::resource('/abouts', Controllers\Backend\AboutController::class);
        Route::put('/abouts/status/{about}', [Controllers\Backend\AboutController::class, 'status'])->name('abouts.status');

        //產品品牌
        Route::group(['prefix' => 'product_label'],function () {
            //品牌
            Route::get('/product_brands/select', [Controllers\Backend\ProductBrandController::class, 'select'])->name('product_brands.select');
            Route::resource('/product_brands', Controllers\Backend\ProductBrandController::class);
            Route::put('/product_brands/status/{product_brand}', [Controllers\Backend\ProductBrandController::class, 'status'])->name('product_brands.status');
            //分類
            Route::get('/product_categories/select', [Controllers\Backend\ProductCategoryController::class, 'select'])->name('product_categories.select');
            Route::resource('/product_categories', Controllers\Backend\ProductCategoryController::class);  
            Route::put('/product_categories/status/{product_category}', [Controllers\Backend\ProductCategoryController::class, 'status'])->name('product_categories.status');
            //標籤
            Route::get('/product_tags/select', [Controllers\Backend\ProductTagController::class, 'select'])->name('product_tags.select');
            Route::resource('/product_tags', Controllers\Backend\ProductTagController::class);  
            Route::put('/product_tags/status/{product_tag}', [Controllers\Backend\ProductTagController::class, 'status'])->name('product_tags.status');
            //關鍵字
            Route::get('/product_keywords/select', [Controllers\Backend\ProductKeywordController::class, 'select'])->name('product_keywords.select');
            Route::resource('/product_keywords', Controllers\Backend\ProductKeywordController::class);  
            Route::put('/product_keywords/status/{product_keyword}', [Controllers\Backend\ProductKeywordController::class, 'status'])->name('product_keywords.status');
            //產品
            Route::get('/products/select', [Controllers\Backend\ProductController::class, 'select'])->name('products.select');
            Route::resource('/products', Controllers\Backend\ProductController::class);  
            Route::put('/products/status/{product}', [Controllers\Backend\ProductController::class, 'status'])->name('products.status');
        });          

        //支援
        Route::group(['prefix' => 'assist'],function () {
            //技術分類            
            Route::get('/support_categories/select', [Controllers\Backend\SupportCategoryController::class, 'select'])->name('support_categories.select');
            Route::resource('/support_categories', Controllers\Backend\SupportCategoryController::class);
            Route::put('/support_categories/status/{support_category}', [Controllers\Backend\SupportCategoryController::class, 'status'])->name('support_categories.status');
            //技術手冊            
            Route::resource('/supports', Controllers\Backend\SupportController::class);  
            Route::put('/supports/status/{support}', [Controllers\Backend\SupportController::class, 'status'])->name('supports.status');
            //影音分享            
            Route::resource('/video_settings', Controllers\Backend\VideoSettingController::class);  
            Route::put('/video_settings/status/{video_setting}', [Controllers\Backend\VideoSettingController::class, 'status'])->name('video_settings.status');
            //常見問題            
            Route::resource('/commons', Controllers\Backend\CommonController::class);  
            Route::put('/commons/status/{common}', [Controllers\Backend\CommonController::class, 'status'])->name('commons.status');
        });   

        //聯絡我們
        Route::group(['prefix' => 'connect'],function () {
            //資料            
            Route::resource('/contacts', Controllers\Backend\ContactController::class);
            Route::put('/contacts/status/{contact}', [Controllers\Backend\ContactController::class, 'status'])->name('contacts.status');
            //設定
            Route::resource('/contact_settings', Controllers\Backend\ContactSettingController::class);  
            Route::put('/contact_settings/status/{contact_setting}', [Controllers\Backend\ContactSettingController::class, 'status'])->name('contact_settings.status');
            //經銷商
            Route::resource('/dealers', Controllers\Backend\DealerController::class);
            Route::put('/dealers/status/{community}', [Controllers\Backend\DealerController::class, 'status'])->name('dealers.status');
            Route::resource('/subscription', Controllers\Backend\SubscriptionController::class);
        });  

        //社群管理
        Route::resource('/communities', Controllers\Backend\CommunityController::class);


        //地區
        Route::get('/areas/select', [Controllers\Backend\AreaController::class, 'select'])->name('areas.select');
        
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
