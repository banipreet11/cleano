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
    return view('dashboard');
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
Route::post('settings/add',  [Homecontroller::class ,"staff_add"]);

Route::get('ratings',  [Homecontroller::class ,"ratings"])->name('ratings');

Route::get('payment',  [Homecontroller::class ,"payment"])->name('payment');

Route::get('discount',  [Homecontroller::class ,"discount"])->name('discount');

Route::get('orders',  [Homecontroller::class ,"orders"])->name('orders');

Route::get('users',  [Homecontroller::class ,"users"])->name('users');
Route::get('users_add',  [Homecontroller::class ,"users_add"])->name('users_add');
// Route::get('users/import',  [Homecontroller::class ,"usersImport"]);
Route::get('/usermanagement_userdetail',  [Homecontroller::class, "usermanagement_userdetail"])->name('usermanagement_userdetail');


/* Vendor */
/*  ======== */

Route::get('vendors',  [Homecontroller::class ,"vendors"])->name('vendors');
Route::get('vendor_addition',  [Homecontroller::class ,"vendor_addition"])->name('vendor_addition');
Route::get('/Vendor_Approval_Request',  [Homecontroller::class, "Vendor_Approval_Request"])->name('Vendor_Approval_Request');
Route::get('vendor_preview',  [Homecontroller::class ,"vendor_preview"])->name('vendor_preview');
Route::get('vendors/add',  [Homecontroller::class ,"addvendor"])->name('add-vendor');


/* Delivery */
/* ======== */

Route::get('delivery',  [Homecontroller::class ,"delivery"])->name('delivery');

Route::get('delivery_add',  [Homecontroller::class ,"delivery_add"])->name('delivery_add');
