<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController; 
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TeamController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login.submit');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); 
})->name('logout');


Route::group(['middleware'=>['auth','admin']],function(){
    Route::group(['namespace'=>'Dashboard','prefix'=>'dashboard','as'=>'dashboard.'],function(){
        Route::get('/',[AdminController::class,'index']);
    });
});


// Route::middleware(['auth', 'admin'])->group(function () {

    // Route::group([''])
// 
    // Route::get('dashboard', [AdminController::class, 'index']);

    

    // Route::resource('admin/products', ProductController::class);
// });

Route::resource('blogs', BlogController::class);  //niye resource istifade edirsen axi ? -_-

Route::resource('teams', TeamController::class);