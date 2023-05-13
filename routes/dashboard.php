<?php

use App\Http\Controllers\Dashboard\AccountController;
use App\Http\Controllers\Dashboard\AdminLoginController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ClientServiceController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ExtraController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\FeaturesController;
use App\Http\Controllers\Dashboard\HeaderController;
use App\Http\Controllers\Dashboard\HelpdeskController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\PriceController;
use App\Http\Controllers\Dashboard\SayController;
use App\Http\Controllers\Dashboard\SectionTitleController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\DashboardExtraController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('a/c',function(){

    Admin::create([
        'name' => 'admin2',
        'email' =>'admin2@app2.com',
        'password' => Hash::make('password'),
    ]);
});
Route::name('admin.')->prefix('admin')->group(function(){

    Route::namespace('Auth')->middleware('guest:admin')->group(function(){

        Route::get('login',[AdminLoginController::class,'login'])->name('login');

        Route::post('login/post',[AdminLoginController::class,'processLogin'])->name('loginPost');



    });

    Route::middleware(['auth:admin'])->group(function(){

        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::post('/logout',[AdminLoginController::class,'destroy'])->name('logout');
        Route::get('home/setting',[SettingController::class,'index'])->name('settings');
        Route::put('home/setting/update',[SettingController::class,'update'])->name('setting.update');
        Route::get('/home/my-account', [AccountController::class, 'index'])->name('my-account');
        Route::put('/home/my-account-update', [AccountController::class, 'update'])->name('update-my-account');
        Route::resource('header',HeaderController::class);
        Route::resource('client-service',ClientServiceController::class);
        Route::resource('faq',FaqController::class);
        Route::resource('page',PageController::class);
        Route::resource('price',PriceController::class);
        Route::resource('helpdesk',HelpdeskController::class);
        Route::resource('features',FeaturesController::class);
        Route::resource('extra',ExtraController::class);
        Route::resource('say',SayController::class);
        Route::resource('category',CategoryController::class);
        Route::resource('post',PostController::class);

        Route::post('/ckeditor/image-upload', function (Request $request) {
            $image = $request->file('upload');

            // نقل الصورة المحملة مباشرةً إلى مجلد public/images/post
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'.DIRECTORY_SEPARATOR.'post'), $imageName);

            // إعادة المسار الكامل للصورة المحملة لعرضها في CKEditor
            $url = asset('images/post/' . $imageName);

            // تنسيق الرد الخاص بـ CKEditor
            $response = [
                'uploaded' => 1,
                'fileName' => $imageName,
                'url' => $url
            ];

            return response()->json($response);
        })->name('ckeditor.image-upload');

        Route::post('save/how',[SectionTitleController::class,'saveHow'])->name('save.how');
        Route::post('save/client',[SectionTitleController::class,'saveClient_title'])->name('save.client');
        Route::post('save/faq',[SectionTitleController::class,'saveFaq'])->name('save.faq');
        Route::post('save/price',[SectionTitleController::class,'savePrice'])->name('save.price');
        Route::post('save/feature',[SectionTitleController::class,'saveFeature'])->name('save.feature');

    });
});
