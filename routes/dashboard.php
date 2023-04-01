<?php

use App\Http\Controllers\Dashboard\AdminLoginController;
use App\Http\Controllers\Dashboard\ClientServiceController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ExtraController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\FeaturesController;
use App\Http\Controllers\Dashboard\HeaderController;
use App\Http\Controllers\Dashboard\HelpdeskController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\PriceController;
use App\Http\Controllers\Dashboard\SectionTitleController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\DashboardExtraController;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('a/c',function(){

    Admin::create([
        'name' => 'admin',
        'email' =>'admin@app.com',
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

        Route::resource('header',HeaderController::class);
        Route::resource('client-service',ClientServiceController::class);
        Route::resource('faq',FaqController::class);
        Route::resource('page',PageController::class);
        Route::resource('price',PriceController::class);
        Route::resource('helpdesk',HelpdeskController::class);
        Route::resource('features',FeaturesController::class);
        Route::resource('extra',ExtraController::class);

        Route::post('save/how',[SectionTitleController::class,'saveHow'])->name('save.how');
        Route::post('save/client',[SectionTitleController::class,'saveClient_title'])->name('save.client');
        Route::post('save/faq',[SectionTitleController::class,'saveFaq'])->name('save.faq');
        Route::post('save/price',[SectionTitleController::class,'savePrice'])->name('save.price');
        Route::post('save/feature',[SectionTitleController::class,'saveFeature'])->name('save.feature');

    });
});
