<?php

use App\Http\Controllers\EcofriendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\OpenRecruitment\OprecController;
use App\Http\Controllers\OpenRecruitment\OprecTableController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\Auth\LogoutAdminController;

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
  return view('cms.page.home', ['title' => 'UMN ECO 2021']);
});

Route::get('/profile', [EcofriendController::class, 'profileView'])->name('profileView');
// Route::post('/registration', [RegistrationController::class, 'index']);
Route::get('/open-recruitment', [OprecController::class, 'index'])->name('oprecView');
Route::post('/open-recruitment', [OprecController::class, 'store'])->name('oprecPost');
Route::post('/open-recruitment-form', [OprecController::class, 'viewform'])->name('oprecForm');
Route::get('/register', [EcofriendController::class, 'registerView'])->name('registerView');
Route::post('/register', [EcofriendController::class, 'register'])->name('register');
Route::get('/login', [EcofriendController::class, 'loginView'])->name('loginView');
Route::post('/login', [EcofriendController::class, 'login'])->name('login');
Route::post('/logout', [EcofriendController::class, 'logout'])->name('logout');


//admin side
Route::post('/logoutAdmin', [LogoutAdminController::class, 'store'])->name('logoutAdmin');
Route::get('/registerAdmin', [RegisterAdminController::class, 'index'])->name('registerAdmin');
Route::post('/registerAdmin', [RegisterAdminController::class, 'store']);

Route::get('/loginAdmin', [LoginAdminController::class, 'index'])->name('loginAdmin');
Route::post('/loginAdmin', [LoginAdminController::class, 'store']);

Route::get('/admin-table', [OprecTableController::class, 'index'])->name('oprecTable');

// Redirect home on random url
Route::any(
  '{query}',
  function () {
    return redirect('/');
  }
)->where('query', '.*');
