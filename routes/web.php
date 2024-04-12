<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParcelController;
use App\Models\Parcel;
use App\Http\Controllers\PaymentController;

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

Route::post('/parcel/{id}/pick/driver',[ParcelController::class,'pickDriver'])->name('pickDriver');
Route::post('/parcel/{id}/pick/driver/{driver}',[ParcelController::class,'saveDriver'])->name('saveDriver');

Route::resource('parcels', ParcelController::class);


Route::post('/parcel/{id}/payment',[PaymentController::class,'store'])->name('confirmAmount');
Route::get('/map',[ParcelController::class,'viewMap'])->name('viewMap');
require __DIR__.'/auth.php';
