<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;
use Inertia\Inertia;

use App\Http\Controllers\UserController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

<<<<<<< HEAD
Route::get('users', [UserController::class, 'index'])->name('users')->middleware(['auth.admin']);
=======
Route::middleware(['auth', 'auth.admin'])->get('/admin/dashboard', function () {
    return Inertia::render('Admin/user');
})->name('admin.dashboard');

Route::get('users', [UserController::class, 'index'])->name('users');
>>>>>>> 2e9c176ebb48651c2e54aec67e8dfda3662078a9

require_once __DIR__ . '/jetstream.php';
