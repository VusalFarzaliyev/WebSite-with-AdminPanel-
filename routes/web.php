<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
Route::group(["prefix"=>"/admin"],function (){
    Route::group(['middleware'=>'isLogin'],function (){
        Route::get("/",[Authcontroller::class,'login']);
        Route::post("/login",[Authcontroller::class,'Authcheck']);
    });
    Route::group(['middleware'=>'notLogin'],function (){
        Route::get("/contact",[ContactController::class,'index'])->name('admin.contact');
        Route::get("/contact/{id}",[ContactController::class,'store']);
        Route::get("/contact/delete/{id}",[ContactController::class,'delete']);
        Route::get('/settings/',[SettingController::class,'index'])->name("setting");
        Route::post('/settings/update',[SettingController::class,'update'])->name("admin.settings.update");
        Route::get("/mail/",[MailController::class,"index"]);
        Route::post("/mail/send",[MailController::class,"send"]);
    });

});
Route::group(['middleware'=>'notLogin'],function (){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get("/logout",[Authcontroller::class,'logout']);
});
Route::get('/',[MainController::class,"index"]);
Route::post("/",[ContactController::class,"create"])->name("contact");






