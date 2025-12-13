<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/find', function () {
    return view('cariMentor');
});
Route::get('/userHome', function () {
    return view('userHome');
});
Route::get('/booking', function () {
    return view('detailBooking');
});
Route::get('/rating', function () {
    return view('penilaian');
});
Route::get('/correct-payment', function () {
    return view('notifPayment');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
Route::get('/add-gigs', function () {
    return view('buatGigs');
});
Route::get('/payment', function () {
    return view('payment');
});
