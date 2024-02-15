<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\DoctorController::class , 'showalldata'])->name('home')->middleware('auth');

Route::get('/addappointment' , [\App\Http\Controllers\AppointmentController::class , 'create'])->name('creer');

Route::get('/doctor', function (){
    return view('doctor.dashboard');
})->name('doctor');

Route::get('/doctorprofile/{id}' , [\App\Http\Controllers\DoctorController::class , 'showprofiledoctor'])->name('doctorprofile');

Route::get('/Medicament' , [\App\Http\Controllers\MedicamentController::class , 'index'])->name('medicament');

Route::get('/addMedicament' , [\App\Http\Controllers\MedicamentController::class , 'create'])->name('Medicament');


Route::get('/edit_medicament/{id}' , [\App\Http\Controllers\MedicamentController::class , 'update'])->name('edit_medicament');

Route::get('/deletemedicament/{id}' , [\App\Http\Controllers\MedicamentController::class , 'destroy'])->name('deletemedicament');

Route::get('/Speciality' , [\App\Http\Controllers\SpecialityController::class , 'create'])->name('Speciality');

Route::get('/dashboard' , [\App\Http\Controllers\SpecialityController::class , 'index'])->name('dashboard');

Route::get('Speciality', function (){
   return view('pages.speciality');
});

Route::get('/medcin' , function (){
   return view('medecinpage');
})->name('medcin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
