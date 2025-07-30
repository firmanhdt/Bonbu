<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuUserController;

Route::get('/', [HomeController::class, 'index']);


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::prefix('admin')->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu.index');
    Route::get('/menu-add', [MenuController::class, 'create'])->name('admin.menu.create');
    Route::post('/menu-add', [MenuController::class, 'store'])->name('admin.menu.store');
    Route::delete('/menu/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');
    Route::get('/menu-edit', [MenuController::class, 'edit'])->name('admin.menu.edit');

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category-add', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category-add', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/category-edit/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/courier', [CourierController::class, 'index'])->name('admin.courier.index');
    Route::get('/courier-add', [CourierController::class, 'create'])->name('admin.courier.create');
    Route::post('/courier-add', [CourierController::class, 'store'])->name('admin.courier.store');
    Route::delete('/courier/{id}', [CourierController::class, 'destroy'])->name('admin.courier.destroy');

    Route::get('/user-management', [CustomerController::class, 'index'])->name('admin.user.management');
});

Route::prefix('users')->group(function () {
    Route::get('/menu', [MenuUserController::class, 'index'])->name('menu.index');
    Route::get('/profile/address-edit/{id}', [AddressController::class, 'edit'])->name('address.edit');

    Route::get('/address', [AddressController::class, 'index'])->name('address.index');
    Route::get('/address/add', [AddressController::class, 'create'])->name('address.create');
    Route::post('/address/add', [AddressController::class, 'store'])->name('address.store');

    // ✅ Tambahkan ini:
    Route::put('/address/update/{id}', [AddressController::class, 'update'])->name('address.update');
});






























Route::get('/sign-in', function () {
    return view('auth.sign-in');
});

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/menu', function () {
//     return view('menu');
// });

Route::get('/profile', function () {
    return view('profile.index');
});

Route::get('/profile-edit', function () {
    return view('profile.edit');
});

Route::get('/profile-change-password', function () {
    return view('profile.change-password');
});

Route::get('/profile-address', function () {
    return view('profile.address');
});

Route::get('/profile-address-edit', function () {
    return view('profile.address-edit');
});

Route::get('/profile-address-add', function () {
    return view('profile.address-add');
});

Route::get('/profile-privacy', function () {
    return view('profile.privacy');
});

Route::get('/profile-terms', function () {
    return view('profile.terms');
});

Route::get('/profile-help', function () {
    return view('profile.help');
});

Route::get('/checkout', function () {
    return view('pembayaran.checkout');
});

Route::get('/payment', function () {
    return view('pembayaran.payment');
});

Route::get('/payment-success', function () {
    return view('pembayaran.payment-success');
});

Route::get('/payment-success-detail', function () {
    return view('pembayaran.payment-success-detail');
});

//admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/order', function () {
    return view('admin.order-management');
});


Route::get('/admin/settings', function () {
    return view('admin.settings');
});

//courier
Route::get('/courier/active-order', function () {
    return view('courier.active-order');
});

Route::get('/courier/active-order-detail', function () {
    return view('courier.active-order-detail');
});

Route::get('/courier/completed', function () {
    return view('courier.completed');
});

Route::get('/courier/completed-order', function () {
    return view('courier.completed-order');
});
