<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AgentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/custom_logout3',[HomeController::class,'custom_logout3'])->name('custom_logout3');

//backend routes

//admin
Route::get('/login/Admin', [AdminController::class, 'adminLoginForm'])->name('admin.login.form');
Route::post('/admin_Login', [AdminController::class, 'admin_Login'])->name('admin.login');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/custom_logout',[AdminController::class,'custom_logout'])->name('custom_logout');
});

//agent
Route::get('/login/agent', [AgentController::class, 'agentLoginForm'])->name('agent.login.form');
Route::post('/agent_Login', [AgentController::class, 'agent_Login'])->name('agent.login');
Route::group(['middleware'=>'agent'],function(){
    Route::get('/agent/dashboard', [DashboardController::class, 'agentDashboard'])->name('agent.dashboard');
    Route::get('/custom_logout2',[AgentController::class,'custom_logout2'])->name('custom_logout2');
});


