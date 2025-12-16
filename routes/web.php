<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchMentorController; 
use App\Http\Controllers\HomeMentor; 
use App\Http\Controllers\AddGig; 
use App\Http\Controllers\Auth\LoginMentorController; 
use App\Http\Controllers\Auth\LoginUserController; 
use App\Http\Controllers\EditGig;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RiwayatController;

Route::get('/riwayat', [RiwayatController::class, 'index'])
    ->name('riwayat.index');

Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.show');

Route::get('/payment', [PaymentController::class, 'index'])
    ->name('payment.index');

Route::post('/payment', [PaymentController::class, 'store'])
    ->name('payment.store');



Route::get('/edit-gigs/{id}', [EditGig::class, 'edit'])->name('editGigForm');

Route::put('/edit-gigs/{id}', [EditGig::class, 'update'])->name('editGigUpdate');


Route::get('/add-gigs', [AddGig::class, 'showForm'])->name('addGigForm');

Route::post('/add-gigs', [AddGig::class, 'store'])->name('addGigStore');

Route::delete('/mentorHome/{id}', [HomeMentor::class, 'delete'])->name('mentorHome.delete');

Route::get('/find', [SearchMentorController::class, 'index'])->name('cariMentor');

Route::get('/mentorHome', [HomeMentor::class, 'index'])->name('mentorHome');

Route::get('/loginMentor', [LoginMentorController::class, 'loginView'])->name('loginMentor');

Route::post('/loginMentor', [LoginMentorController::class, 'loginControl'])->name('loginControl');

Route::get('/loginUser', [LoginUserController::class, 'loginView'])->name('loginUser');

Route::post('/loginUser', [LoginUserController::class, 'loginControl'])->name('loginUserControl');


// Route Basic
Route::get('/', function () {
    return view('home');
});
Route::get('/userHome', function () {
    return view('userHome');
});
// Route::get('/booking/{gig}', function ($gig) {
//     return view('detailBooking', compact('gig'));
// })->name('booking');
Route::get('/rating', function () {
    return view('penilaian');
});
Route::get('/correct-payment', function () {
    return view('notifPayment');
});
Route::get('/profile', function () {
    return view('profile');
});
// Route::get('/riwayat', function () {
//     return view('riwayat');
// });
// Route::get('/add-gigs', function () {
//     return view('buatGigs');
// });
// Route::get('/payment', function () {
//     return view('payment');
// });
// Route::get('/mentorHome', function () {
//     return view('mentorHome');
// });
Route::get('/mentorProfile', function () {
    return view('mentorProfile');
});
