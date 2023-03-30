<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Cookie\FileCookieJar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client-file-accounting');
});
Route::get('/clerk', function () {
    return view('client-dashboard');
});
Route::get('/account', function () {
    return view('client-file-accounting');
});
Route::get('/admin-portal', function () {
    return view('admin-portal');
});
Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('clients-dashboard');
    })->name('dashboard');
    Route::get('/file', function () {
        return view('file-uppoad-form');
    })->name('uplaod-form');
    Route::get('file/{id}', [FileController::class, 'file'])->name('view-file');
    Route::post('/file', [FileController::class, 'upload'])->name('uplaod');
    Route::get('files', [FileController::class, 'files'])->name('files');
    Route::post('comment/:{id}', [FileController::class, 'comment'])->name('comment');
    Route::get('user', [UserController::class, 'form'])->name('user-form');
    Route::post('user', [UserController::class, 'save'])->name('save-user');
    Route::get('users', [UserController::class, 'users'])->name('list-users');
    Route::get('file/approve/{id}', [FileController::class, 'approve'])->name('approve');
    Route::post('file/assign', [FileController::class, 'assign'])->name('assign');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
