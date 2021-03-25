<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('specialist_doctors_bd.layout.home');
});

/*Route::get('/blog', function () {
    return view('specialist_doctors_bd.blog.blog');
});*/

Route::get('/home', function () {
    return view('specialist_doctors_bd.layout.home');
});

Route::get('/doctor-registration', function () {
    return view('specialist_doctors_bd.layout.doctor-registration');
});

/*Starting Doctor Registration Controller*/
/*both addimage and basicinfo is needed to run doctor basic info*/
Route::post('/addimage', 'DoctorRegistrationController@dbstore')->name('addimage');
Route::post('/basicinfo', 'DoctorRegistrationController@dbstore')->name('basicinfo');
Route::post('/chamberlocation', 'DoctorRegistrationController@clstore')->name('chamberlocation');
Route::post('/hospitalaffliation', 'DoctorRegistrationController@hastore')->name('hospitalaffliation');
Route::post('/education', 'DoctorRegistrationController@estore')->name('education');
Route::post('/award', 'DoctorRegistrationController@astore')->name('award');
Route::post('/insurance', 'DoctorRegistrationController@istore')->name('insurance');
/*Closing Doctor Registration Controller*/

/*Starting Doctor Displaying*/
/*Route::get('/doctor', function () {
    return view('specialist_doctors_bd.doctor.doctor');
});*/
Route::get('/doctor', 'DoctorController@display');
/*Closing Doctor Displaying*/

/*Doctor By Speciality Starting*/
Route::get('/doctor_by_speciality', 'DoctorBySpecialityController@doctor_by_speciality');
Route::get('specialist_doctor_profile/{id?}', 'DoctorBySpecialityController@specialist_doctor_profile')->name('specialist_doctor_profile');
Route::get('/category/{value}', 'DoctorBySpecialityController@commoncategory');
/*Doctor By Speciality Closing*/

/*Doctor By Location Starting*/
Route::get('/doctor_by_location', 'DoctorByLocationController@doctor_by_location');
Route::get('/New_York', 'DoctorByLocationController@New_York');
Route::get('/generalstate', 'DoctorByLocationController@generalstate');
Route::get('/location/{value}', 'DoctorByLocationController@commonlocation');
Route::get('/location/{cityname}/{speciality}', 'DoctorByLocationController@commonlocationspeciality');
/*Doctor By Location Closing*/

/*Doctor By Searching Starting*/
Route::get('/groupsearching', 'DoctorController@groupsearching');

Route::get('/namesearching', 'DoctorController@namesearching');

Route::get('/spesearching', 'DoctorController@spesearching');
Route::get('/spenamesearching', 'DoctorController@spenamesearching');
Route::get('/specitysearching', 'DoctorController@specitysearching');

Route::get('/citysearching', 'DoctorController@citysearching');
Route::get('/citynamesearching', 'DoctorController@citynamesearching');
Route::get('/cityspecialitysearching', 'DoctorController@cityspecialitysearching');

Route::get('/zipsearching', 'DoctorController@zipsearching');
/*Route::get('/zipsearching', 'DoctorController@zipsearching');*/
/*Doctor By Searching Closing*/

/*Blogging Starting*/
Route::get('/blog', 'BlogController@index');
Route::post('/blog', 'BlogController@create')->name('blog');
/*Blogging Closing*/

Route::get('/cardiology', 'SpecialistDoctorController@cardiology');

Route::get('/testing', 'SpecialistDoctorController@index');

Route::get('/testBackEnd', 'StudentController@index');

Route::get('/normal', function () {
    return view('student.normal');
});
