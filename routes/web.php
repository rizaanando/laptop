<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\EditUserAccountController;
use App\Http\Controllers\HistoryNilaiController;
use App\Http\Controllers\JadwalCombasedController;
use App\Http\Controllers\ListPendaftaranController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengajuanCetakController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\resetpasController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEditAccountController;
use App\Http\Controllers\UserHistoryNilaiController;
use App\Http\Controllers\UserListPendaftaranController;
use App\Http\Controllers\UserPembayaranController;
use App\Http\Controllers\UserPengajuanCetakController;
use App\Http\Controllers\UserPengumumanController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

//route multi user
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home',function(){
Return Redirect('/admin');
});

Route::middleware(['auth'])->group(function(){   
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/user', [AdminController::class, 'user'])->middleware('userAkses:user');
Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');

Route::get('/logout', [SesiController::class, 'logout']);
//multi user------------


//route user
Route::get('/shop', [SesiController::class, 'shop'])->name('shop');
Route::get('/userindex', [SesiController::class, 'userindex'])->name('userindex');

Route::get('/myprofile', [SesiController::class, 'myprofile'])->name('myprofile');
Route::get('/navuser', [SesiController::class, 'navuser'])->name('navuser');
Route::get('/halamanshop', [SesiController::class, 'halamanshop'])->name('halamanshop');
//route admin
Route::get('/dashbooardadmin', [SesiController::class, 'dashbooardadmin'])->name('dashbooardadmin');
Route::get('/myprofileadmin', [SesiController::class, 'myprofileadmin'])->name('myprofileadmin');
Route::get('/pendaftaranadmin', [SesiController::class, 'pendaftaranadmin'])->name('pendaftaranadmin');


Route::get('/koonfirmasipembayaran', [SesiController::class, 'koonfirmasipembayaran'])->name('koonfirmasipembayaran');
Route::get('/tambahlistpendaftaran', [SesiController::class, 'tambahlistpendaftaran'])->name('tambahlistpendaftaran');
Route::get('/tambahjadwalcombase', [SesiController::class, 'tambahjadwalcombase'])->name('tambahjadwalcombase');
Route::get('/tambahhistory', [SesiController::class, 'tambahhistori'])->name('tambahhistory');
Route::get('/tambahpengumuman', [SesiController::class, 'tambahpengumuman'])->name('tambahpengumuman');
Route::get('/tambahcetakserti', [SesiController::class, 'tambahcetakserti'])->name('tambahcetakserti');
Route::get('/tambahpembayaran', [SesiController::class, 'tambahpembayaran'])->name('tambahpembayaran');
Route::get('/tambahnotifikasi', [SesiController::class, 'tambahnotifikasi'])->name('tambahnotifikasi');

Route::get('/products', [ProductController::class, 'index'])->name('productsindex');
Route::get('/products/tambahproducts', [ProductController::class, 'create'])->name('tambahproducts');
Route::post('/products/tambahproducts', [ProductController::class, 'store'])->name('tambahproducts');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit.products');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/users', [UserController::class, 'index'])->name('toko.adminpage.users');
Route::get('/users/tambahuser', [UserController::class, 'create'])->name('tambahuser');
Route::post('/users/tambahuser', [UserController::class, 'store'])->name('tambahuser');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit.user');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// routes/web.php
Route::get('/adminpage/navsidebar', [AdminHomeController::class, 'index'])->name('toko.adminpage.navsidebar');
Route::get('/adminpage/products', [ProductController::class, 'index'])->name('toko.adminpage.products');
Route::get('/adminpage/orders', [OrdersController::class, 'index'])->name('toko.adminpage.orders');

Route::get('/my-account', [UserAccountController::class, 'myAccount'])->name('usermyaccont');
Route::get('/editprofile', [UserEditAccountController::class, 'editprofile'])->name('editprofile');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/restpasword', [resetpasController::class, 'index'])->name('restpasword');
Route::post('/restpasword', [resetpasController::class, 'sendResetLinkEmail'])->name('sendemail');

Route::get('/chart', [SesiController::class, 'chart'])->name('chart');
Route::get('/detailproducts', [SesiController::class, 'detailproducts'])->name('detailproducts');
Route::get('/thanksindex', [SesiController::class, 'thanksindex'])->name('thanksindex');
});
