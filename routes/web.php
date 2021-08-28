<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\IndexController;
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

Route::group(['prefix' => 'admin','middleware' => 'admin:admin'],function(){
    Route::get('/login',[AdminController::class,'loginForm'])->name('admin.loginForm');
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');

});

Route::middleware(['admin_auth:sanctum,admin', 'verified'])->get('admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
// Admin Routes

Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');

Route::get('/admin/profile',[AdminProfileController::class,'AdminProfile'])->name('admin.profile');

Route::get('admin/profile/edit',[AdminProfileController::class,'AdminProfileEdit'])->name('admin.profile.edit');


Route::post('/admin/profile/store',[AdminProfileController::class,'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password',[AdminProfileController::class,'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password',[AdminProfileController::class,'UpdateChangePassword'])->name('update.change.password');

// User Route
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/user/logout',[IndexController::class,'UserLogout'])->name('user.logout');
Route::get('/user/profile',[IndexController::class,'UserProfile'])->name('user.profile');

Route::post('user/profile/update',[IndexController::class,'UserProfileUpdate'])->name('user.profile.edit');

Route::get('user/change/password',[IndexController::class,'UserChangePassword'])->name('user.change.password');

Route::post('user/password/change',[IndexController::class,'UserPasswordChange'])->name('user.password.change');

Route::prefix("brand")->group(function(){
    Route::get('/view',[BrandController::class,"BrandView"])->name('all.brands');
});
