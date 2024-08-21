<?php

use App\Http\Controllers\CanaryTokenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeGroupController;
use App\Http\Controllers\EmployeeInputHandleController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Middleware\EnsureAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', EnsureAdmin::class)->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/users', UserController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/userdashboard', [UserDashboardController::class, 'index'])->name('userdashboard');
    Route::resource('employees', EmployeeController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
    Route::get('/employee_management', [EmployeeManagementController::class, 'index'])->name('employee_management');
    Route::get('/groups', [EmployeeManagementController::class, 'index'])->name('employee_management');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
    Route::post('/employees/assign_group', [EmployeeGroupController::class, 'store'])->name('employee_groups.store');
});

Route::get('/landing', [LandingController::class, 'index'])->name('landing');
Route::post('/landing', [LandingController::class, 'store'])->name('landing.store');

Route::post('/canary/webhook', [CanaryTokenController::class, 'handleWebhook'])->name('canary.webhook');


require __DIR__.'/auth.php';
