<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/optimize', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize');
    // dd(Artisan::output());
    return 'successfull';
  //  return redirect()->back()->with('success', 'cache has been cleared'); 
});

//
Route::get('invite', 'App\Http\Controllers\InviteController@invite')->name('invite');
Route::post('invite', 'App\Http\Controllers\InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('accept/{token}', 'App\Http\Controllers\InviteController@accept')->name('acceptInvitation');
//creating the account of the invited user
Route::post('invite/create', 'App\Http\Controllers\InviteController@InvitedUserCreate')->name('InvitedUserCreate');
//
Route::post('/confirmed',[App\Http\Controllers\AppointmentController::class, 'create'])->name('bookAppointment');
Route::get('/registration/{token}', 'App\Http\Controllers\UsersController@registration_view')->name('registration');
Route::POST('/registration', 'App\Http\Controllers\Auth\RegisterController@register')->name('accept');

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin-view', 'HomeController@adminView')->name('admin.view');
    Route::get('/delete/doctor/{id}',[App\Http\Controllers\DoctorController::class, 'delete']);
    Route::post('/next/appointments',[App\Http\Controllers\AppointmentController::class, 'nextAppointment'])->name('nextAppointment');
    Route::get('/make/admin', [App\Http\Controllers\HomeController::class, 'make_admin'])->name('make_admin');
    Route::get('/make/admin/{id}',[App\Http\Controllers\HomeController::class, 'change_permission'])->name('change_permission');


});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/doctors', [App\Http\Controllers\DoctorController::class, 'read'])->name('doctors');
    Route::get('/patients',[App\Http\Controllers\PatientController::class, 'read'])->name('patients');
    Route::get('/appointments',[App\Http\Controllers\AppointmentController::class, 'read'])->name('appointments');
    Route::get('/new/appointments',[App\Http\Controllers\AppointmentController::class, 'newAppointment'])->name('newAppointment');
    Route::get('/schedule',[App\Http\Controllers\AppointmentController::class, 'schedule'])->name('schedule');
    Route::get('/save/appointment/{id}',[App\Http\Controllers\AppointmentController::class, 'saveAppointment']);
    Route::get('/delete/appointment/{id}',[App\Http\Controllers\AppointmentController::class, 'deleteAppointment']);
    Route::post('/save/appointment/date',[App\Http\Controllers\AppointmentController::class, 'appointmentDate'])->name('appointmentDate');
    Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class, 'read']);
    Route::get('edit/profile/{id}',[App\Http\Controllers\ProfileController::class, 'update']);
    Route::post('save/profile',[App\Http\Controllers\ProfileController::class, 'saveProfile'])->name('saveProfile');
    Route::get('myprofile',[App\Http\Controllers\ProfileController::class, 'myprofile'])->name('myprofile');
    Route::post('/confirmed/manually',[App\Http\Controllers\AppointmentController::class, 'bookAppointmentManually'])->name('bookAppointmentManually');

    Route::get('/activities',[App\Http\Controllers\ActivitiesController::class, 'read'])->name('activities');
    Route::get('/activities/record/{id}',[App\Http\Controllers\ActivitiesController::class, 'add_record'])->name('add_record');
    Route::post('/save/record',[App\Http\Controllers\ActivitiesController::class, 'save_record'])->name('saveRecords');
    Route::get('/records/{id}',[App\Http\Controllers\PatientController::class, 'view_record'])->name('view_record');
    Route::get('/due/{id}',[App\Http\Controllers\PatientController::class, 'clear_due'])->name('clear_due');

});
