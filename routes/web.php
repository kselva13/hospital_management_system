<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'save']);

Route::post('/doctor_appointment',[HomeController::class,'save']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/appointment-delete/{id}',[HomeController::class,'appointment_delete']);

Route::get('/appointments_view',[AdminController::class,'show_appointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/doctors_view',[AdminController::class,'show_doctor']);

Route::get('/edit-doctor/{id}',[AdminController::class,'edit_doctor']);

Route::get('/delete-doctor/{id}',[AdminController::class,'delete_doctor']);

Route::post('/update-doctor/{id}',[AdminController::class,'update_doctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::get('/sendemail/{id}',[AdminController::class,'sendmail']);





