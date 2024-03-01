<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('dashboard',  [Homecontroller::class ,"dashboard"])->name('dashboard');

Route::get('sidemenu',  [Homecontroller::class ,"sidemenu"])->name('sidemenu');

Route::get('analystic_sales',  [Homecontroller::class ,"analystic_sales"])->name('analystic_sales');

Route::get('analystic_traffic',  [Homecontroller::class ,"analystic_traffic"])->name('analystic_traffic');

Route::get('analystic_products',  [Homecontroller::class ,"analystic_products"])->name('analystic_products');


Route::get('settings',  [Homecontroller::class ,"settings"])->name('settings');
