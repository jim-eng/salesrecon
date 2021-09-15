<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('/company/aeon-big',[SalesController::class,'AeonBigStore'])->name('AeonBigStore');
Route::get('/company/aeon-co',[SalesController::class,'AeonCoStore'])->name('AeonCoStore');

Route::get('/cash-transaction',[SalesController::class,'CashTransaction'])->name('CashTransaction');
Route::get('/tender-transaction',[SalesController::class,'TenderTransaction'])->name('TenderTransaction');
Route::get('/bank-transaction',[SalesController::class,'BankTransaction'])->name('BankTransaction');
Route::get('/remarks',[SalesController::class,'Remarks'])->name('Remarks');

Route::get('/tender/view',[SalesController::class,'ManageTender'])->name('ManageTender');
Route::get('/tender/edit/{id}', [SalesController::class, 'TenderEdit']);

Route::get('/cashier-form',[SalesController::class,'CashierForm'])->name('CashierForm');


