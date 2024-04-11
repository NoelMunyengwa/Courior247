<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParcelController;
use App\Models\Parcel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $parcels=Parcel::where('user_id',auth()->id())->orderBy('created_at', 'desc')->paginate(2);
        
    return view('dashboard',compact('parcels'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/create/parcel', function () {
    return view('parcel');
});

Route::resource('parcels', ParcelController::class);
require __DIR__.'/auth.php';
