<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/medicines', function () {
    return view('medicines.index');
})->name('medicines');



Route::middleware(['auth:sanctum', 'verified'])->get('medicines', [MedicineController::class, 'index'])->name('medicines');
Route::middleware(['auth:sanctum', 'verified'])->get('add_medicine', [MedicineController::class, 'create'])->name('add_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('store_medicine', [MedicineController::class, 'store'])->name('store_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_medicine', [MedicineController::class, 'delete'])->name('delete_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_medicine', [MedicineController::class, 'edit'])->name('edit_medicine');
Route::middleware(['auth:sanctum', 'verified'])->post('update_medicine', [MedicineController::class, 'update'])->name('update_medicine');

Route::middleware(['auth:sanctum', 'verified'])->get('categories', [CategoryController::class, 'index'])->name('categories');

Route::middleware(['auth:sanctum', 'verified'])->get('/contacts', function () {
    return view('contacts.index');
})->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])->get('brands', [BrandController::class, 'index'])->name('brands');

