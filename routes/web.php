<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Vendor;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Vendor Management Route
    Route::group(['prefix'=>'vendor'], function (){
        Route::get('list', [Vendor::class,'show'])->name('list.vendors');
        Route::get('edit/{vendorId}', [Vendor::class,'editView'])->name('edit.vendors');
        Route::get('create', [Vendor::class,'create'])->name('create.vendors');
        Route::post('create', [Vendor::class,'put'])->name('update.vendors');

    });
});

require __DIR__.'/auth.php';
