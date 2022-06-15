<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AgentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mailController;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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



//backend routes

//user

//Auth::routes(['verfiy' => true]);

Auth::routes();

/*
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send'); 

*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/custom_logout3',[HomeController::class,'custom_logout3'])->name('custom_logout3');


//sendmail
Route::get('/sendMail',[mailController::class,'sendMail']);

//admin
Route::get('/login/Admin', [AdminController::class, 'adminLoginForm'])->name('admin.login.form');
Route::post('/admin_Login', [AdminController::class, 'admin_Login'])->name('admin.login');

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/custom_logout',[AdminController::class,'custom_logout'])->name('custom_logout');
    Route::get('/searchAdmin/', [DashboardController::class,'searchAdmin'])->name('searchAdmin');
});

//agent
Route::get('/login/agent', [AgentController::class, 'agentLoginForm'])->name('agent.login.form');
Route::post('/agent_Login', [AgentController::class, 'agent_Login'])->name('agent.login');

Route::get('/login/agent', [AgentController::class, 'agentLoginForm'])->name('agent.login.form');
Route::post('/agent_Login', [AgentController::class, 'agent_Login'])->name('agent.login');

Route::middleware(['auth', 'agent'])->group(function () {
    Route::get('/agent/dashboard', [DashboardController::class, 'agentDashboard'])->name('agent.dashboard');
    Route::get('/custom_logout2',[AgentController::class,'custom_logout2'])->name('custom_logout2');
});


