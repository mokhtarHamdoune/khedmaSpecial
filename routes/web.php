<?php

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
    return view('welcome');
});
Route::get('/jobs',function(){
    return view ('jobs');
});
//candidats profil and edit profil
//show the profil
Route::get('/candidat/{id_candidat}',"CandidatController@show");
//take him to edit profile
Route::get('/candidat/{id_candidat}/edit',"CandidatController@edit");
//update 
Route::put('/candidat/{id_candidat}',"CandidatController@update");

// first essay
Route::get('/cv',function(){
    return view ('candidat.cv');
});
//now add a controller and its method
Route::get('/favorites',function(){
    return view ('candidat.favorites');
});
Route::get('/applied_jobs',function(){
    return view ('candidat.applied_jobs');
});
//recreteur 
Route::get("/recreteur",function(){
    return view ('recreteur.dashboard');
});
Route::get("/edit_profile_recreteur",function(){
    return view ('recreteur.edit_profile');
});
Route::get("/company_page",function(){
    return view ('recreteur.companyPage');
});
Route::get("/company_applications",function(){
    return view ('recreteur.companyApp');
});
Route::get("/manage_jobs",function(){
    return view ('recreteur.manage_jobs');
});
Route::get("/post_jobe",function(){
    return view ('recreteur.post_job');
});
//contact_us
Route::get("/contact_us",function(){
    return view ('contact_us');
});
//about us
Route::get("/about_us",function(){
    return view ('about_us');
});



Auth::routes();

// Route::get('/login', 'Auth\LoginController@showEmployerLoginForm');
    Route::get('/login', 'Auth\LoginController@showCandidateLoginForm');
    Route::get('/sign_up/employer', 'Auth\RegisterController@showEmployerRegisterForm');
    Route::get('/sign_up/candidate', 'Auth\RegisterController@showCandidateRegisterForm');

    // Route::post('/login/employer','Auth\LoginController@employerLogin');
    Route::post('/sign_in','Auth\LoginController@candidateLogin');
    Route::post('/sign_up/employer','Auth\RegisterController@createEmployer');
    Route::post('/candidat/create', 'Auth\RegisterController@createCandidate');
/*
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/employer', 'employer');
    Route::view('/candidate', 'candidate');*/

Route::get('/home', 'HomeController@index')->name('home');

//restrict access
Route::group(['middleware' => 'employer'], function () {
    Route::view('/employer', 'employer');
});

Route::group(['middleware' => 'candidate'], function () {
    Route::view('/candidate', 'candidate');
    Route::view('/resume', 'candidate.resume');
    Route::view('/applied_jobs', 'candidate.applied_jobs');
    Route::view('/edit_profile', 'candidate.edit_profile');
    Route::view('/dashboard', 'candidate.dashboard');
});
