<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;




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



// Route::get('/register',[HomeController::class,'register']);

Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/teachers_Page',[HomeController::class,'teachers_Page']);
Route::get('/test',[HomeController::class,'test']);
Route::get('/test2',[HomeController::class,'test2']);
Route::get('/testtt',[HomeController::class,'testtt']);

Route::get('/homee',[HomeController::class,'redirect']);

Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/search',[HomeController::class,'search']);


//chat
// Route::get('/chatify/{$to_id}', [HomeController::class,'chatify']);

// Route::get('/chatify/{id}',[HomeController::class,'chatify']);
// Route::get('/chatify/{id}', [HomeController::class, 'chatify'])->name('chatify');

// Route::get('/chatify/{id}', [HomeController::class, 'redirectToChatify']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::get('/showcart',[HomeController::class,'showcart']);

// Route::get('/delete/{id}',[HomeController::class,'deletecart']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/approved/{id}',[HomeController::class,'approved']);
Route::get('/canceled/{id}',[HomeController::class,'canceled']);
Route::get('/finsh_order/{id}',[HomeController::class,'finsh_order']);


//
Route::resource('teacherpage',TeacherController::class);
//

Route::get('/teachers',[AdminController::class,'redirect']);

Route::post('/uploadteachers',[AdminController::class,'uploadteachers']);
Route::get('/showteachers',[AdminController::class,'showteachers']);
Route::get('/deleteteachers/{id}',[AdminController::class,'deleteteachers']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/updateteachers/{id}',[AdminController::class,'updateteachers']);
// اخر 2 لجدول الحجوزات
Route::get('/showcarts',[AdminController::class,'showcarts']);
Route::post('/addcarts/{id}',[AdminController::class,'addcarts']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/remove_order/{id}',[AdminController::class,'remove_order']);

Route::get('/showallteachers',[AdminController::class,'showallteachers']);
Route::get('/showallstudents',[AdminController::class,'showallstudents']);
Route::get('/showall',[AdminController::class,'showall']);

Route::get('/allusers/{id}',[AdminController::class,'allusers']);
// لرفض وقبول المستخدم من عند الادمن
Route::get('/approve/{id}',[AdminController::class,'approve']);

Route::get('/cancel/{id}',[AdminController::class,'cancel']);



Route::get('/search_user',[AdminController::class,'search_user']);
Route::get('/search_request',[AdminController::class,'search_request']);

Route::get('/finsh_order/{id}',[AdminController::class,'finsh_order']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
