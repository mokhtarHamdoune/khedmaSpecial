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
// The HomeController to give the right home to the righ actor(guest,candidate,employer)
Route::get('/',"HomeController@show");
// Route::get('/', function () {
//     return view('welcome');
// });
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
//sign in and up
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::get('/sign_up', 'Auth\RegisterController@showRegisterForm');
    Route::post('/login','Auth\LoginController@Role')->name('login');
    Route::post('/sign_up','Auth\RegisterController@Role')->name('sign_up');
/*
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/employer', 'employer');
    Route::view('/candidate', 'candidate');*/

Route::get('/home', 'HomeController@index')->name('home');

//restrict access
Route::group(['middleware' => 'employer'], function () {
    Route::get('/recruteur', 'RecruteurController@dashboardApplications');
    Route::get('/edit_profile_recruteur', 'ProfileRecruteurController@index')->name('edit_profile_recruteur.index');
    Route::post('/edit_profile_recruteur/update', 'ProfileRecruteurController@update')->name('edit_profile_recruteur.update');
    Route::view('/company_page', 'recruteur.companyPage');
    Route::view('/company_applications', 'recruteur.companyApp');
    Route::view('/manage_jobs', 'recruteur.manage_jobs');
    Route::view('/post_job', 'recruteur.post_job');
    Route::post('/post_job','RecruteurController@postNewJob')->name('new_job');

    Route::post('/edit_profile_recruteur','RecruteurController@editProfile')->name('edit_profile_recruteur');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});


Route::middleware(['middleware' => 'candidate'])->prefix("candidate")->group(function () {
    Route::get('/dashboard','CandidatController@show')->name("dashboard");
    Route::get("/profile",'CandidatController@edit')->name("profile");
    Route::put("/profile",'CandidatController@update')->name("profile");
    Route::get("/uploadImg/{id}/{role}","imageController@uploadImage")->name("upload");
    Route::get("/resume","CvController@index")->name("resume");
    Route::post("/resume","CvController@store")->name("resume.store");
    Route::delete("/resume/{id_cv}","CvController@destroy")->name("resume.delete");
    Route::get("resume/{id_cv}","CvController@show")->name("resume.show");
    // Route::view('/cv', 'candidat.cv');
    // Route::view('/applied_jobs', 'candidat.applied_jobs');
    // Route::view('/edit_profile', 'candidat.edit_profile');
    // //candidats profil and edit profil
    // //show the profil
    // //take him to edit profile
    // Route::get('/candidat/{id_candidat}/edit',"CandidatController@edit");
    // //update
    // Route::put('/candidat/{id_candidat}',"CandidatController@update");
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::get('/save','RecruteurController@test');
