<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\mcuController;
use App\Http\Controllers\Backend\paketpersalinanController;
use App\Http\Controllers\Backend\layananlaboratorium;
use App\Http\Controllers\Backend\EswlController;
use App\Http\Controllers\Backend\LayananlaboratoriumController;
use App\Http\Controllers\Backend\PromosikesController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//semua route untuk user

Route::prefix('users')->group(function () {
    Route::get('/view', [UserController::class, 'userView'])->name('user.view');
    Route::get('/add', [UserController::class, 'userAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'userStore'])->name('user.store');
});


Route::prefix('mcu')->group(function () {
    Route::get('/view', [McuController::class, 'index'])->name('mcu.view');
    Route::get('/add', [McuController::class, 'add'])->name('mcu.add');
    Route::post('/store', [McuController::class, 'store'])->name('mcu.store');
    Route::get('/edit/{id}', [McuController::class, 'edit'])->name('mcu.edit');
    Route::post('/update/{id}', [McuController::class, 'update'])->name('mcu.update');
    Route::get('/delete/{id}', [McuController::class, 'delete'])->name('mcu.delete');
});

Route::prefix('paketpersalinan')->group(function () {
    Route::get('/view', [PaketPersalinanController::class, 'index'])->name('paketpersalinan.view');
    Route::get('/add', [PaketPersalinanController::class, 'add'])->name('paketpersalinan.add');
    Route::post('/store', [PaketPersalinanController::class, 'store'])->name('paketpersalinan.store');
    Route::get('/edit/{id}', [PaketPersalinanController::class, 'edit'])->name('paketpersalinan.edit');
    Route::post('/update/{id}', [PaketPersalinanController::class, 'update'])->name('paketpersalinan.update');
    Route::get('/delete/{id}', [PaketPersalinanController::class, 'delete'])->name('paketpersalinan.delete');
});



Route::prefix('layananlaboratorium')->group(function () {
    Route::get('/view', [LayananlaboratoriumController::class, 'index'])->name('layananlaboratorium.view');
    Route::get('/add', [LayananlaboratoriumController::class, 'add'])->name('layananlaboratorium.add');
    Route::post('/store', [LayananlaboratoriumController::class, 'store'])->name('layananlaboratorium.store');
    Route::get('/edit/{id}', [LayananlaboratoriumController::class, 'edit'])->name('layananlaboratorium.edit');
    Route::post('/update/{id}', [LayananlaboratoriumController::class, 'update'])->name('layananlaboratorium.update');
    Route::get('/delete/{id}', [LayananlaboratoriumController::class, 'delete'])->name('layananlaboratorium.delete');
});

Route::prefix('eswl')->group(function () {
    Route::get('/view', [EswlController::class, 'index'])->name('eswl.view');
    Route::get('/add', [EswlController::class, 'add'])->name('eswl.add');
    Route::post('/store', [EswlController::class, 'store'])->name('eswl.store');
    Route::get('/edit/{id}', [EswlController::class, 'edit'])->name('eswl.edit');
    Route::post('/update/{id}', [EswlController::class, 'update'])->name('eswl.update');
    Route::get('/delete/{id}', [EswlController::class, 'delete'])->name('eswl.delete');
});

Route::prefix('promosikes')->group(function () {
    Route::get('/view', [PromosikesController::class, 'index'])->name('promosikes.view');
    Route::get('/add', [PromosikesController::class, 'add'])->name('promosikes.add');
    Route::post('/store', [PromosikesController::class, 'store'])->name('promosikes.store');
    Route::get('/edit/{id}', [PromosikesController::class, 'edit'])->name('promosikes.edit');
    Route::post('/update/{id}', [PromosikesController::class, 'update'])->name('promosikes.update');
    Route::get('/delete/{id}', [PromosikesController::class, 'delete'])->name('promosikes.delete');
});
