<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CanaryTokenController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeGroupController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\SendEmailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    // GET          /chirps                 index   chirps.index
    // POST	        /chirps	                store	chirps.store
    // GET	        /chirps/{chirp}/edit    edit	chirps.edit
    // PUT/PATCH	/chirps/{chirp}         update	chirps.update

    // Manage user profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/users', UserController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    // Home page - campaign summary
    Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::resource('employees', EmployeeController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

    Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
    Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
    Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');

    Route::post('/employees/assign_group', [EmployeeGroupController::class, 'store'])->name('employee_groups.store');

    Route::get('/campaign', [CampaignController::class, 'index'])->name('campaign.index');
    Route::post('/campaign', [CampaignController::class, 'store'])->name('campaign.store');
    Route::delete('/campaign/{campaign}', [CampaignController::class, 'destroy'])->name('campaign.destroy');

    Route::get('/employees/by-group', [CampaignController::class, 'getEmployeesByGroup'])->name('employees.byGroup');

    Route::post('/results', [ResultsController::class, 'store'])->name('results.store');

    Route::get('/analytics/{campaign}', [AnalyticsController::class, 'index'])->name('analytics.index');
});

Route::post('/send_email', [SendEmailsController::class, 'store'])->name('send_email.store');

Route::get('/landing', [LandingController::class, 'index'])->name('landing');
Route::post('/landing', [LandingController::class, 'store'])->name('landing.store');

Route::post('/canary/webhook', [CanaryTokenController::class, 'handleWebhook'])->name('canary.webhook');



require __DIR__.'/auth.php';
