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
Route::get('/about-red', function () {
  return view('cms.page.about-red', ['title' => 'UMN ECO 2021']);
});

// Route::post('/registration', [RegistrationController::class, 'index']);
Route::get('/open-recruitment', [OprecController::class, 'index'])->name('oprecView');
Route::post('/open-recruitment', [OprecController::class, 'store'])->name('oprecPost');
Route::post('/open-recruitment-form', [OprecController::class, 'viewform'])->name('oprecForm');
Route::get('/registration', [EcofriendController::class, 'registrationView'])->name('registrationView');
Route::post('/registration', [EcofriendController::class, 'register'])->name('registration');
Route::get('/login', [EcofriendController::class, 'loginView'])->name('loginView');
Route::post('/login', [EcofriendController::class, 'login'])->name('login');
Route::get('/logout', [EcofriendController::class, 'logout'])->name('logout');

//submit link challange
Route::post('/submitLink', [EcofriendController::class, 'submitLink'])->name('submitLink');

// mysteryQuest
Route::post('/mysteryQuest', [EcofriendController::class, 'mysteryQuest'])->name('mysteryQuest');

//admin side
Route::post('/xAdmin', [LogoutAdminController::class, 'store'])->name('logoutAdmin');
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