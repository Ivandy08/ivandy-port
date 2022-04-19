<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

//frontend
Route::get('portfolio', function () {
    return view('frontend/frontend_home');
});
Route::get('portfolio/details', function () {
    return view('frontend/frontend_details');
});


//backend
/*Route::get('admin/beranda', function () {
    return view('admin/admin_beranda');
});*/

//backend_master
Route::get('admin/blog', function () {
    return view('admin_master/admin_blog');
});
Route::get('admin/portfolio', function () {
    return view('admin_master/admin_portfolio');
});
Route::get('admin/resume', function () {
    return view('admin_master/admin_resume');
});
Route::get('admin/skill', function () {
    return view('admin_master/admin_skill');
});

//backend_web
Route::get('admin/about', function () {
    return view('admin_web/admin_about');
});
Route::get('admin/contact', function () {
    return view('admin_web/admin_contact');
});
Route::get('admin/info', function () {
    return view('admin_web/admin_info');
});
Route::get('admin/menu', function () {
    return view('admin_web/admin_menu');
});

//login
Route::get('admin', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




