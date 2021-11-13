<?php

use App\Http\Controllers\EcofriendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TwibbonController;
use App\Http\Controllers\OpenRecruitment\OprecController;
use App\Http\Controllers\OpenRecruitment\OprecTableController;
use App\Http\Controllers\Auth\RegisterAdminController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\Auth\LogoutAdminController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ListEcoFriendController;
use App\Http\Controllers\Admin\GreenateAdminController;
use App\Http\Controllers\Admin\BlueAdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShoppingCartController;

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


//Active Link
Route::get('/', [EcofriendController::class, 'index'])->name('home');

//For Landing Page
// Route::get('/landing-page', [EcofriendController::class, 'LandingPage'])->name('LandingPage');

Route::get('/about-us', function () {
    return view('cms.page.about-us', ['title' => 'UMN ECO 2021 - About UMN Eco']);
  })->name('about-us');

//our team
Route::get('/our-team', [OprecController::class, 'index'])->name('ourteam');

//User
Route::get('/registration', [EcofriendController::class, 'registrationView'])->name('registrationView');
Route::post('/registration', [EcofriendController::class, 'register'])->name('registration');
Route::get('/login', [EcofriendController::class, 'loginView'])->name('loginView');
Route::post('/login', [EcofriendController::class, 'login'])->name('login');
Route::get('/logout', [EcofriendController::class, 'logout'])->name('logout');
Route::post('/submit_link_blue', [EcofriendController::class, 'SubmitLinkBlue'])->name('SubmitLink');

//submit link challange
// Route::post('/submitLink', [EcofriendController::class, 'submitLink'])->name('submitLink');

// Admin
Route::post('/xAdmin', [LogoutAdminController::class, 'store'])->name('logoutAdmin');
Route::get('/loginAdmin', [LoginAdminController::class, 'index'])->name('loginAdmin');
Route::post('/loginAdmin', [LoginAdminController::class, 'store']);
Route::get('/AdminDashboard', [AdminDashboardController::class,'index'])->name('AdminDashboard');
Route::get('/EcoFriendList', [BlueAdminController::class,'index'])->name('blueEFL');
Route::post('/EFChangePassword', [BlueAdminController::class,'change_pass'])->name('changePass');

// Redirect home on random url
Route::any(
    '{query}',
    function () {
      return redirect('/');
    }
  )->where('query', '.*');



//not used link
// Route::get('/', function () {
//   return view('cms.page.home', ['title' => 'UMN ECO 2021']);
// })->name('home');

// Route::get('/profile', [EcofriendController::class, 'profileView'])->name('profileView');
// Route::get('/about-red', function () {
//   return view('cms.page.about-red', ['title' => 'UMN ECO 2021 - About RED']);
// })->name('about-red');
// Route::get('/about-greenate', function () {
//   return view('cms.page.about-greenate', ['title' => 'UMN ECO 2021 - About GREENATE']);
// })->name('about-greenate');

// Route::get('/registration-blue', function () {
//   return view('cms.page.registration-blue', ['title' => 'UMN ECO 2021 - About GREENATE']);
// })->name('registration-blue');

// Route::get('/home', function () {
//   return view('cms.page.home-blue-thank-you', ['title' => 'UMN ECO 2021 - Home BLUE']);
// })->name('home-blue');


// Route::post('/registration', [RegistrationController::class, 'index']);

// Route::post('/open-recruitment', [OprecController::class, 'store'])->name('oprecPost');
// Route::post('/open-recruitment-form', [OprecController::class, 'viewform'])->name('oprecForm');


    //testing email order
// Route::get('/testSendEmail', [EcofriendController::class, 'sendEmailTest']);

    // mysteryQuest
// Route::post('/mysteryQuest', [EcofriendController::class, 'mysteryQuest'])->name('mysteryQuest');

    // Twibbon
// Route::get('/twibbon', function () {return redirect('/twibbon/exhort');})->name('twibbon');
// Route::get('/twibbon/exhort', [TwibbonController::class, 'exhort'])->name('twibbonExhort');
// Route::get('/twibbon/alter', [TwibbonController::class, 'alter'])->name('twibbonAlter');
// Route::get('/twibbon/tidbit', [TwibbonController::class, 'tidbit'])->name('twibbonTidbit');

//Greenate Menu and Shopping carts
// Route::post('/RiseCompensation', [ListEcoFriendController::class,'riseCompensation'])->name('riseComp');
// Route::post('/UtopiaCompensation', [ListEcoFriendController::class,'utopiaCompensation'])->name('utopiaComp');
// Route::post('/EFChangePassword', [ListEcoFriendController::class,'efChangePassword'])->name('efchngpw');

// Route::get('/greenate-menu', [ShoppingCartController::class, 'menu'])->name('greenateMenu');
// Route::post('/greenate-shopping-cart', [ShoppingCartController::class, 'shoppingCart'])->name('greenateSC');
// Route::post('/greenate-order-submit', [ShoppingCartController::class, 'orderSubmit'])->name('greenateOS');


//admin side

// Route::get('/registerAdmin', [RegisterAdminController::class, 'index'])->name('registerAdmin');
// Route::post('/registerAdmin', [RegisterAdminController::class, 'store']);

// Route::get('/EcoFriendList', [GreenateAdminController::class,'index'])->name('greenateEFL');

// Route::get('/EcoFriendList', [ListEcoFriendController::class,'index'])->name('listEF');
// Route::get('/EcoFriendList/{id}', [ListEcoFriendController::class,'detail'])->name('detailEF');

// Route::get('/admin-table', [OprecTableController::class, 'index'])->name('oprecTable');

// Route::post('/DisapproveRise', [ListEcoFriendController::class,'disapproveRise'])->name('disRise');
// Route::post('/DisapproveUtopia', [ListEcoFriendController::class,'disapproveUtopia'])->name('disUtopia');
// Route::post('/DisapproveUtile', [ListEcoFriendController::class,'disapproveUtile'])->name('disUtile');
// Route::post('/DisapproveRaconteur', [ListEcoFriendController::class,'disapproveRaconteur'])->name('disRaconteur');

// Route::post('/ApproveRise', [ListEcoFriendController::class,'approveRise'])->name('apvRise');
// Route::post('/ApproveUtopia', [ListEcoFriendController::class,'approveUtopia'])->name('apvUtopia');
// Route::post('/ApproveUtile', [ListEcoFriendController::class,'approveUtile'])->name('apvUtile');
// Route::post('/ApproveRaconteur', [ListEcoFriendController::class,'approveRaconteur'])->name('apvRaconteur');
