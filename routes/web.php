<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('items',[ItemController::class, 'index'])->name('items');

Route::group(['prefix' => 'employee', 'as' => 'employee.'], function(){
    Route::get('/', [EmployeeController::class, "index"])->name('index')->middleware('auth');
    Route::get('/create', [EmployeeController::class, "create"])->name('create')->middleware('auth');
    Route::post('/', [EmployeeController::class, "store"])->name('store')->middleware('auth');
    Route::get('/datatables', [EmployeeController::class, "datatables"])->name('datatables');
    Route::get('/{id}/show', [EmployeeController::class, "show"])->name('show')->middleware('auth');
    Route::put('/{id}/edit', [EmployeeController::class, "edit"])->name('edit')->middleware('auth');
    Route::delete('/{id}/delete', [EmployeeController::class, "destroy"])->name('destroy')->middleware('auth');
});


require __DIR__.'/auth.php';
