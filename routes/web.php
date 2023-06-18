<?php

use App\Http\Controllers\CourseController;
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
    return view('welcome');
})->name('home');
Route::get("/document", function () {
    return view('upload-document');
})->name('upload-document');

Route::get('/manage-document', function () {
    return view('manage-document');
})->name('manage-document');

Route::get('/clerk', function () {
    return view('dashboard');
});
Route::get('/account', function () {
    return view('client-file-accounting');
});
Route::get('/admin-portal', function () {
    return view('admin-portal');
});

Route::prefix('/users')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
    Route::get('/upload', [UsersController::class, 'upload'])->name('upload');
    Route::post('/upload', [UsersController::class, 'savefile'])->name('savefile');
    Route::get('files', [UsersController::class, 'files'])->name('files');
    Route::get('/files/{id}', [UsersController::class, 'file'])->name('file');
    Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
    Route::prefix('/appointments')->group(function () {
        Route::get('/', [UsersController::class, 'appointment'])->name('appointment');
        Route::get('/view', [UsersController::class, 'viewappointment'])->name('view-appointment');
        Route::post('/', [UsersController::class, 'saveappointment'])->name('save-appointment');
    });
    Route::prefix('/contacts')->group(function () {
        Route::get('/', [UsersController::class, 'contacts'])->name('contacts');
        // Route::get('/{id}', [UsersController::class, 'contact'])->name('contact');
        Route::post('/', [UsersController::class, 'savecontact'])->name('savecontact');
        Route::get('/view', [UsersController::class, 'viewcontacts'])->name('view-contacts');
    });
});

// Route::prefix('dashboard')->middleware('auth')->group(function () {
//     Route::get('/', function () {
//         return view('dashboard');
//     });
//     Route::prefix("/user")->group(function () {
//         Route::get("/", [UserController::class, 'index'])->name('users.list');
//         Route::get('/create', [UserController::class, 'form'])->name('users.create');
//         Route::post("/", [UserController::class, 'save'])->name('users.save');
//     });
//     Route::prefix("/courses")->group(function () {
//         Route::get("/", [CourseController::class, 'index'])->name('courses.list');
//         Route::get('/create', [CourseController::class, 'form'])->name('courses.create');
//         Route::post("/", [CourseController::class, 'save'])->name('courses.save');
//         Route::get("/{id}", [CourseController::class, 'view'])->name('courses.view');
//         Route::post("/material", [CourseController::class, 'material'])
//             ->name('courses.material.upload');
//         Route::get('/material/{id}', [CourseController::class, 'viewMaterial'])
//             ->name('material.view');
//     });
//     Route::get("/{id}", [])->name('returns.view');
//     Route::post('/{salesId}', [ProductReturnController::class, 'store'])->name('returns.save');
//     Route::get("/sales/{salesId}", [ProductReturnController::class, 'salesReturn'])->name('returns.sales');
// });


require __DIR__ . '/auth.php';
