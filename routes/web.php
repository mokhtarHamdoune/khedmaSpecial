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
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::get('/sign_up', 'Auth\RegisterController@showRegisterForm');

    // Route::post('/login/employer','Auth\LoginController@employerLogin');
    Route::post('/login','Auth\LoginController@Role')->name('login');
    Route::post('/sign_up','Auth\RegisterController@Role')->name('sign_up');
/*
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/employer', 'employer');
    Route::view('/candidate', 'candidate');*/

Route::get('/home', 'HomeController@index')->name('home');

//restrict access
Route::group(['middleware' => 'employer'], function () {
    Route::view('/recreteur', 'recreteur.dashboard');
    Route::view('/edit_profile', 'recreteur.edit_profile');
    Route::view('/company_page', 'recreteur.companyPage');
    Route::view('/company_applications', 'recreteur.companyApp');
    Route::view('/manage_jobs', 'recreteur.manage_jobs');
    Route::view('/post_jobe', 'recreteur.post_job');
});

Route::group(['middleware' => 'candidate'], function () {
    Route::view('/candidat', 'candidat.dashboard');
    Route::view('/cv', 'candidat.cv');
    Route::view('/applied_jobs', 'candidat.applied_jobs');
    Route::view('/edit_profile', 'candidat.edit_profile');
    Route::view('/dashboard', 'candidat.dashboard');
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
});
