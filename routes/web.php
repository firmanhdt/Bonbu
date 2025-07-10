<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/menu', function () {
    return view('menu');
});

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

Route::get('/admin/menu', function () {
    return view('admin.menu');
});

Route::get('/admin/menu-add', function () {
    return view('admin.menu-add');
});

Route::get('/admin/menu-edit', function () {
    return view('admin.menu-edit');
});

Route::get('/admin/category', function () {
    return view('admin.category');
});

Route::get('/admin/category-add', function () {
    return view('admin.category-add');
});

Route::get('/admin/category-edit', function () {
    return view('admin.category-edit');
});

Route::get('/admin/order', function () {
    return view('admin.order-management');
});

Route::get('/admin/user', function () {
    return view('admin.user-management');
});

Route::get('/admin/courier', function () {
    return view('admin.courier');
});

Route::get('/admin/courier-add', function () {
    return view('admin.courier-add');
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
