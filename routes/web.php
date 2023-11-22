<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OtherProjectController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\ProductFeatureController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ServiceDevelopmentController;
use App\Http\Controllers\ServiceFeatureController;
use App\Http\Controllers\TextController;

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
    return view('frontend.index');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');


Route::get('/clients', [AboutController::class, 'client'])->name('clients');
Route::get('/services', [ServicesController::class, 'facilities'])->name('facilities');
Route::get('/projects', [ProjectController::class, 'project'])->name('project');
Route::get('/game-development', [ProjectController::class, 'game'])->name('game.index');

Route::get('/hotel-managment', [ProjectController::class, 'hotel'])->name('hotel.index');
Route::get('/project/details/{id}', [ProjectController::class, 'hoteldetails'])->name('project.details');
Route::get('/hospital-managment', [ProjectController::class, 'hospital'])->name('hospital.index');
Route::get('/hospital-managment/details/{id}', [ProjectController::class, 'hospitaldetails'])->name('hospital.details');
Route::get('/account-managment', [ProjectController::class, 'account'])->name('account.index');
Route::get('/production-managment', [ProjectController::class, 'production'])->name('production.index');
Route::get('/restaurant-managment', [ProjectController::class, 'restaurant'])->name('restaurant.index');
Route::get('/domain-registration', [ProjectController::class, 'domain'])->name('domain.index');

Route::get('/forntpricing', [PriceController::class, 'index'])->name('forntpricing.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [AboutController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [AboutController::class, 'emailStore'])->name('contact.store');





Route::get('/login', [adminController::class, 'login'])->name('login');
Route::POST('/login', [adminController::class, 'authCheck'])->name('authCheck');
Route::get('/logout', [adminController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [adminController::class, 'password'])->name('password');
Route::post('/forgot-password', [adminController::class, 'ForgotPassword'])->name('ForgotPassword');
Route::get('/reset-password/{token}', [adminController::class, 'ResetPassword'])->name('ResetPassword');
Route::post('/reset-password/{token}', [adminController::class, 'ResetPass'])->name('ResetPass');

Route::get('/register', [userController::class, 'showRegister'])->name('showRegister');
Route::post('/register', [userController::class, 'register'])->name('register');

Route::get('/user-login', [userController::class, 'userShowLogin'])->name('userShowLogin');
Route::post('/user-login', [userController::class, 'userLogin'])->name('userLogin');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');

    Route::get('/company', [adminDashboardController::class, 'index'])->name('company.index');
    Route::post('/company/update', [adminDashboardController::class, 'update'])->name('company.update');

    Route::get('/text', [TextController::class, 'index'])->name('text.index');
    Route::post('/text/store', [TextController::class, 'store'])->name('text.store');
    Route::get('/text/edit/{id}', [TextController::class, 'edit'])->name('text.edit');
    Route::post('/text/update/{id}', [TextController::class, 'update'])->name('text.update');
    Route::get('/text/delete/{id}', [TextController::class, 'delete'])->name('text.delete');


    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

    // Route::get('/client', [ClientController::class, 'index'])->name('client.index');
    // Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    // Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
    // Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    // Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

    Route::get('/service', [serviceController::class, 'index'])->name('service.index');
    Route::post('/service/store', [serviceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [serviceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [serviceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{id}', [serviceController::class, 'delete'])->name('service.delete');


    Route::get('/service/development', [ServiceDevelopmentController::class, 'index'])->name('ServiceDev.index');
    Route::post('/service/development/update', [ServiceDevelopmentController::class, 'update'])->name('ServiceDev.update');

    Route::get('/product/feature', [ProductFeatureController::class, 'index'])->name('ProductFeature.index');
    Route::post('/product/feature/store', [ProductFeatureController::class, 'store'])->name('ProductFeature.store');
    Route::get('/product/feature/edit/{id}', [ProductFeatureController::class, 'edit'])->name('ProductFeature.edit');
    Route::post('/product/feature/update/{id}', [ProductFeatureController::class, 'update'])->name('ProductFeature.update');
    Route::get('/product/feature/delete/{id}', [ProductFeatureController::class, 'delete'])->name('ProductFeature.delete');



    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::get('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');


    Route::get('/other-project', [OtherProjectController::class, 'index'])->name('otherproject.index');
    Route::post('/other-project/store', [OtherProjectController::class, 'store'])->name('otherproject.store');
    Route::get('/other-project/edit/{id}', [OtherProjectController::class, 'edit'])->name('otherproject.edit');
    Route::post('/other-project/update/{id}', [OtherProjectController::class, 'update'])->name('otherproject.update');
    Route::get('/other-project/delete/{id}', [OtherProjectController::class, 'delete'])->name('otherproject.delete');


    Route::get('/servicefeature', [ServiceFeatureController::class, 'index'])->name('servicefeature.index');
    Route::post('/servicefeature/store', [ServiceFeatureController::class, 'store'])->name('servicefeature.store');
    Route::get('/servicefeature/edit/{id}', [ServiceFeatureController::class, 'edit'])->name('servicefeature.edit');
    Route::post('/servicefeature/update/{id}', [ServiceFeatureController::class, 'update'])->name('servicefeature.update');
    Route::get('/servicefeature/delete/{id}', [ServiceFeatureController::class, 'delete'])->name('servicefeature.delete');



    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
    Route::post('/pricing/store', [PricingController::class, 'store'])->name('pricing.store');
    Route::get('/pricing/edit/{id}', [PricingController::class, 'edit'])->name('pricing.edit');
    Route::post('/pricing/update/{id}', [PricingController::class, 'update'])->name('pricing.update');
    Route::get('/pricing/delete/{id}', [PricingController::class, 'delete'])->name('pricing.delete');


    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::post('/map/store', [MapController::class, 'store'])->name('map.store');
    Route::get('/map/edit/{id}', [MapController::class, 'edit'])->name('map.edit');
    Route::post('/map/update/{id}', [MapController::class, 'update'])->name('map.update');
    Route::get('/map/delete/{id}', [MapController::class, 'delete'])->name('map.delete');


    Route::get('/question', [QuestionController::class, 'index'])->name('question.index');
    Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
    Route::get('/question/edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');
    Route::post('/question/update/{id}', [QuestionController::class, 'update'])->name('question.update');
    Route::get('/question/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');



});
