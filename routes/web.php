<?php

use App\Http\Controllers\EcofriendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Page\OprecController;
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

// Route::post('/registration', [RegistrationController::class, 'index']);
Route::get('/open-recruitment', [OprecController::class, 'index'])->name('oprecView');
Route::post('/open-recruitment', [OprecController::class, 'store'])->name('oprecPost');
Route::post('/open-recruitment-form', [OprecController::class, 'viewform'])->name('oprecform');
Route::get('/register', [EcofriendController::class, 'registerView'])->name('registerView');
Route::post('/register', [EcofriendController::class, 'register'])->name('register');


// Redirect home on random url
Route::any(
  '{query}',
  function () {
    return redirect('/');
  }
)
  ->where('query', '.*');
