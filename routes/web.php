<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GymClassController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ClassAdminController;
use App\Http\Controllers\Admin\MembershipAdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/classes', [GymClassController::class, 'index'])->name('classes.index');
Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships.index');
Route::get('/about-us', function () {
    return view('about'); // Ensure you have resources/views/about.blade.php
})->name('about');

// Admin Routes
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('classes', ClassAdminController::class);
    Route::resource('memberships', MembershipAdminController::class);
});


// Authentication Routes
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');





