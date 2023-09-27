<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\mcuController;
use App\Http\Controllers\Backend\paketpersalinanController;
use App\Http\Controllers\Backend\layananlaboratorium;
use App\Http\Controllers\Backend\EswlController;
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

Route::get('/admin/logout',[AdminController::class, 'logout'])->name('admin.logout');

//semua route untuk user

Route::prefix('users')->group(function(){
    Route::get('/view',[UserController::class, 'userView'])->name('user.view');
    Route::get('/add',[UserController::class, 'userAdd'])->name('user.add');
    Route::post('/store',[UserController::class, 'userStore'])->name('user.store');

});


Route::prefix('mcu')->group(function(){
    Route::get('/view',[mcuController::class, 'index'])->name('mcu.view');
    Route::get('/add',[mcuController::class, 'add'])->name('mcu.add');
    Route::post('/store',[mcuController::class, 'store'])->name('mcu.store');
    Route::get('/edit/{id}',[mcuController::class, 'edit'])->name('mcu.edit');
    Route::post('/update/{id}',[mcuController::class, 'update'])->name('mcu.update');
    Route::get('/delete/{id}',[mcuController::class, 'delete'])->name('mcu.delete');

});

Route::prefix('paketpersalinan')->group(function(){
    Route::get('/view',[PaketPersalinanController::class, 'index'])->name('paketpersalinan.view');
    Route::get('/add',[PaketPersalinanController::class, 'add'])->name('paketpersalinan.add');
    Route::post('/store',[PaketPersalinanController::class, 'store'])->name('paketpersalinan.store');
    Route::get('/edit/{id}',[PaketPersalinanController::class, 'edit'])->name('paketpersalinan.edit');
    Route::post('/update/{id}',[PaketPersalinanController::class, 'update'])->name('paketpersalinan.update');
    Route::get('/delete/{id}',[PaketPersalinanController::class, 'delete'])->name('paketpersalinan.delete');

});



Route::prefix('layananlaboratorium')->group(function(){
    Route::get('/view',[layananlaboratorium::class, 'index'])->name('layananlaboratorium.view');
    Route::get('/add',[layananlaboratorium::class, 'add'])->name('layananlaboratorium.add');
    Route::post('/store',[layananlaboratorium::class, 'store'])->name('layananlaboratorium.store');
    Route::get('/edit/{id}',[layananlaboratorium::class, 'edit'])->name('layananlaboratorium.edit');
    Route::post('/update/{id}',[layananlaboratorium::class, 'update'])->name('layananlaboratorium.update');
    Route::get('/delete/{id}',[layananlaboratorium::class, 'delete'])->name('layananlaboratorium.delete');

});

Route::prefix('eswl')->group(function(){
    Route::get('/view',[eswl::class, 'index'])->name('eswl.view');
    Route::get('/add',[eswl::class, 'add'])->name('eswl.add');
    Route::post('/store',[eswl::class, 'store'])->name('eswl.store');
    Route::get('/edit/{id}',[eswl::class, 'edit'])->name('eswl.edit');
    Route::post('/update/{id}',[eswl::class, 'update'])->name('eswl.update');
    Route::get('/delete/{id}',[eswl::class, 'delete'])->name('eswl.delete');

});

Route::prefix('promosikes')->group(function(){
    Route::get('/view',[promosikes::class, 'index'])->name('promosikes.view');
    Route::get('/add',[promosikes::class, 'add'])->name('promosikes.add');
    Route::post('/store',[promosikes::class, 'store'])->name('promosikes.store');
    Route::get('/edit/{id}',[promosikes::class, 'edit'])->name('promosikes.edit');
    Route::post('/update/{id}',[promosikes::class, 'update'])->name('promosikes.update');
    Route::get('/delete/{id}',[promosikes::class, 'delete'])->name('promosikes.delete');

});