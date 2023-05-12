<?php

use Illuminate\Support\Facades\Route;
//For Front
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\SerachController;
use App\Http\Controllers\RoomController;


//General User Login
use App\Http\Controllers\GeneralUserLoginController;
use App\Http\Controllers\GeneralDashboardController;
use App\Http\Controllers\GeneralQueueController;


//For Admin
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;


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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::post('/search', [SerachController::class,'searchPage'])->name('search');
Route::post('/hold-on/{id}', [SerachController::class,'hold'])->name('hold.on');
Route::get('/token-Confirm', [ConfirmController::class,'tokenConfirm'])->name('token.confirm');
Route::post('/token-Confirm', [ConfirmController::class,'tokenConfirm'])->name('token.confirm');
Route::post('/token', [ConfirmController::class,'index'])->name('get.token');


//General User
Route::get('/general-dashboard', [GeneralDashboardController::class,'dashboard'])->name('general.dashboard')->middleware('generalUser');
Route::any('/start-serve', [GeneralDashboardController::class,'startServe'])->name('start.serve');
Route::any('/serve-update/{id}', [GeneralDashboardController::class,'updateServe'])->name('update.serve');
Route::any('/serve', [GeneralDashboardController::class,'serve'])->name('serve');


Route::get('/general-all-queue',[GeneralQueueController::class,'allQueue'])->name('general.all.queue');
Route::post('/general-update-queue/{id}',[GeneralQueueController::class,'update'])->name('general.update.queue');
Route::get('/general-edit-queue/{id}',[GeneralQueueController::class,'edit'])->name('general.edit.queue');
Route::get('/general-delete-queue/{id}',[GeneralQueueController::class,'delete'])->name('general.delete.queue');

Route::get('/general-login-page', [GeneralUserLoginController::class,'loginPage'])->name('general.login.page');
Route::any('/general-login', [GeneralUserLoginController::class,'generalLogin'])->name('general.login');
Route::any('/general-logout', [GeneralUserLoginController::class,'generalLogout'])->name('general.logout');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function ()
{
    //Dashboard
    Route::get('/dashboard',[DashBoardController::class,'dashboard'])->name('dashboard');

    //Counterz
    Route::get('/add-room',[RoomController::class,'addRoom'])->name('add.room');
    Route::post('/new-room',[RoomController::class,'newRoom'])->name('new.room');
    Route::get('/manage-room',[RoomController::class,'manageRoom'])->name('manage.room');
    Route::get('/edit-room/{id}',[RoomController::class,'editRoom'])->name('edit.room');
    Route::post('/update-room/{id}',[RoomController::class,'updateRoom'])->name('update.room');
    Route::get('/delete-room/{id}',[RoomController::class,'deleteRoom'])->name('delete.room');

    //Service
    Route::get('/add-service',[ServiceController::class,'addService'])->name('add.service');
    Route::post('/new-service',[ServiceController::class,'newService'])->name('new.service');
    Route::get('/manage-service',[ServiceController::class,'manageService'])->name('manage.service');
    Route::get('/edit-service/{id}',[ServiceController::class,'editService'])->name('edit.service');
    Route::post('/update-service/{id}',[ServiceController::class,'updateService'])->name('update.service');
    Route::get('/delete-service/{id}',[ServiceController::class,'deleteService'])->name('delete.service');

    //Queue
    Route::get('/all-queue',[QueueController::class,'allQueue'])->name('all.queue');
    Route::post('/update-queue/{id}',[QueueController::class,'update'])->name('update.queue');
    Route::get('/edit-queue/{id}',[QueueController::class,'edit'])->name('edit.queue');
    Route::get('/delete-queue/{id}',[QueueController::class,'delete'])->name('delete.queue');


    Route::get('/report',[ReportController::class,'report'])->name('report');
    //user
    Route::get('/add-user',[UserController::class,'add'])->name('add.user');
    Route::post('/create',[UserController::class,'create'])->name('create.user');
    Route::get('/user',[UserController::class,'manage'])->name('user');
    Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('edit.user');
    Route::post('/update-user/{id}',[UserController::class,'update'])->name('update.user');
    Route::get('/delete-user/{id}',[UserController::class,'delete'])->name('delete.user');
//    Route::get('/manage-user',[UserController::class,'manageUser'])->name('manage.user');

});
