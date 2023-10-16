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
use App\Http\Controller\Backend\Informasikes;
use App\Http\Controller\Backend\Artikelkes;
use App\Http\Controller\Backend\berita;
use App\Http\Controller\Backend\kegiatankami;
use App\Http\Controller\Backend\jadwalDokter;
use App\Http\Controller\Backend\layananunggulan;
use App\Http\Controller\Backend\layananlainnya;
use App\Http\Controller\Backend\rawatinap;



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

Route::prefix('informasikes')->group(function () {
    Route::get('/view', [informasikesController::class, 'index'])->name('informasikes.view');
    Route::get('/add', [informasikesController::class, 'add'])->name('informasikes.add');
    Route::post('/store', [informasikesController::class, 'store'])->name('informasikes.store');
    Route::get('/edit/{id}', [informasikesController::class, 'edit'])->name('informasikes.edit');
    Route::post('/update/{id}', [informasikesController::class, 'update'])->name('informasikes.update');
    Route::get('/delete/{id}', [informasikesController::class, 'delete'])->name('informasikes.delete');
});

Route::prefix('artikelkes')->group(function () {
    Route::get('/view', [artikelkesController::class, 'index'])->name('artikelkes.view');
    Route::get('/add', [artikelkesController::class, 'add'])->name('artikelkes.add');
    Route::post('/store', [artikelkesController::class, 'store'])->name('artikelkes.store');
    Route::get('/edit/{id}', [artikelkesController::class, 'edit'])->name('artikelkes.edit');
    Route::post('/update/{id}', [artikelkesController::class, 'update'])->name('artikelkes.update');
    Route::get('/delete/{id}', [artikelkesController::class, 'delete'])->name('artikelkes.delete');
});

Route::prefix('berita')->group(function () {
    Route::get('/view', [beritaController::class, 'index'])->name('berita.view');
    Route::get('/add', [beritaController::class, 'add'])->name('berita.add');
    Route::post('/store', [beritaController::class, 'store'])->name('berita.store');
    Route::get('/edit/{id}', [beritaController::class, 'edit'])->name('berita.edit');
    Route::post('/update/{id}', [beritaController::class, 'update'])->name('berita.update');
    Route::get('/delete/{id}', [beritaController::class, 'delete'])->name('berita.delete');
});

Route::prefix('kegiatankami')->group(function () {
    Route::get('/view', [kegiatankamiController::class, 'index'])->name('kegiatankami.view');
    Route::get('/add', [kegiatankamiController::class, 'add'])->name('kegiatankami.add');
    Route::post('/store', [kegiatankamiController::class, 'store'])->name('kegiatankami.store');
    Route::get('/edit/{id}', [kegiatankamiController::class, 'edit'])->name('kegiatankami.edit');
    Route::post('/update/{id}', [kegiatankamiController::class, 'update'])->name('kegiatankami.update');
    Route::get('/delete/{id}', [kegiatankamiController::class, 'delete'])->name('kegiatankami.delete');
});

Route::prefix('jadwalDokter')->group(function () {
    Route::get('/view', [jadwalDokterController::class, 'index'])->name('jadwalDokter.view');
    Route::get('/add', [jadwalDokterController::class, 'add'])->name('jadwalDokter.add');
    Route::post('/store', [jadwalDokterController::class, 'store'])->name('jadwalDokter.store');
    Route::get('/edit/{id}', [jadwalDokterController::class, 'edit'])->name('jadwalDokter.edit');
    Route::post('/update/{id}', [jadwalDokterController::class, 'update'])->name('jadwalDokter.update');
    Route::get('/delete/{id}', [jadwalDokterController::class, 'delete'])->name('jadwalDokter.delete');
});

Route::prefix('layananunggulan')->group(function () {
    Route::get('/view', [layananunggulanController::class, 'index'])->name('layananunggulan.view');
    Route::get('/add', [layananunggulanController::class, 'add'])->name('layananunggulan.add');
    Route::post('/store', [layananunggulanController::class, 'store'])->name('layananunggulan.store');
    Route::get('/edit/{id}', [layananunggulanController::class, 'edit'])->name('layananunggulan.edit');
    Route::post('/update/{id}', [layananunggulanController::class, 'update'])->name('layananunggulan.update');
    Route::get('/delete/{id}', [layananunggulanController::class, 'delete'])->name('layananunggulan.delete');
});

Route::prefix('layananlainnya')->group(function () {
    Route::get('/view', [layananlainnyaController::class, 'index'])->name('layananlainnya.view');
    Route::get('/add', [layananlainnyaController::class, 'add'])->name('layananlainnya.add');
    Route::post('/store', [layananlainnyaController::class, 'store'])->name('layananlainnya.store');
    Route::get('/edit/{id}', [layananlainnyaController::class, 'edit'])->name('layananlainnya.edit');
    Route::post('/update/{id}', [layananlainnyaController::class, 'update'])->name('layananlainnya.update');
    Route::get('/delete/{id}', [layananlainnyaController::class, 'delete'])->name('layananlainnya.delete');
});

Route::prefix('rawatinap')->group(function () {
    Route::get('/view', [rawatinapController::class, 'index'])->name('rawatinap.view');
    Route::get('/add', [rawatinapController::class, 'add'])->name('rawatinap.add');
    Route::post('/store', [rawatinapController::class, 'store'])->name('rawatinap.store');
    Route::get('/edit/{id}', [rawatinapController::class, 'edit'])->name('rawatinap.edit');
    Route::post('/update/{id}', [rawatinapController::class, 'update'])->name('rawatinap.update');
    Route::get('/delete/{id}', [rawatinapController::class, 'delete'])->name('rawatinap.delete');
});