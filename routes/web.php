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
Route::get('/',"HomeController@show")->name('home');

Route::get('/jobs',"JobsController@index")->name("jobs");
Route::get('/jobs/filter','JobsController@filter')->name("jobs.pagination");
Route::get("/jobs/details/{id_job}","JobsController@show")->name("jobs.show");

//campanies
Route::get("/companies","RecruteurController@index");
Route::get('/companies/{id}', 'RecruteurController@companySingle');

//contact_us
Route::get("/contact_us",function(){
    return view ('contact_us');
});
//about us
Route::get("/about_us",function(){
    return view ('about_us');
});


Route::get('/candidate_single/{id}', 'CandidatController@candidateSingle');
Route::get('/sendMessage/{id}', 'CandidatController@sendMess')->name('sendMessage');

//sign in and up
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::get('/sign_up', 'Auth\RegisterController@showRegisterForm');
    Route::post('/login','Auth\LoginController@Role')->name('login');
    Route::post('/sign_up','Auth\RegisterController@Role')->name('sign_up');
/*
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/employer', 'employer');
    Route::view('/candidate', 'candidate');*/


    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//restrict access
Route::group(['middleware' => 'employer'], function () {
    Route::get('/recruteur', 'RecruteurController@dashboardApplications');
    Route::get('/edit_profile_recruteur', 'ProfileRecruteurController@index')->name('edit_profile_recruteur.index');
    Route::get('/manage_jobs', 'ProfileRecruteurController@indexOffres');
    Route::post('/edit_profile_recruteur/update', 'ProfileRecruteurController@update')->name('edit_profile_recruteur.update');
    Route::post('/company_page/update', 'ProfileRecruteurController@updateInfos')->name('rec_infos');
    Route::get('/company_page', 'ProfileRecruteurController@companyPage')->name('companyPage');
    Route::get('/company_applications', 'RecruteurController@CompanyApplications');
    Route::get('/messages', 'RecruteurController@messages');
    Route::view('/post_job', 'recruteur.post_job');

    Route::post('/post_job/new','RecruteurController@postNewJob')->name('new_job');

    Route::post('/edit_profile_recruteur','RecruteurController@editProfile')->name('edit_profile_recruteur');


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

    Route::get("resume/{id_cv}/final","CvController@finalCv")->name("resume.final");

    Route::post("/formation","CvController@addFormation");
    Route::put("/formation/{id_form}","CvController@editFormation");
    Route::delete("/formation/{id_form}","CvController@deleteFormation");

    Route::post("/experience","CvController@addExperience");
    Route::put("/experience/{id_exp}","CvController@updateExperience");
    Route::delete("/experience/{id_exp}","CvController@deleteExperience");

    Route::post("/competence","CvController@addCompetence");
    Route::put("/competence/{id_cmp}","CvController@editCompetence");
    Route::delete("/competence/{id_cmp}","CvController@deleteCompetence");

    Route::put("/basics/{id_cmp}","CvController@editBasics");

    Route::post("/document","CvController@addDocument");
    Route::delete("/document/{id_doc}","CvController@dropDocument");

    Route::get('/applied_jobs', 'AppliedJobsController@index')->name("appJobs");
    Route::delete("/applied_jobs/{id_offre}","AppliedJobsController@destroy");
    // Route::view('/cv', 'candidat.cv');
    // Route::view('/edit_profile', 'candidat.edit_profile');
    // //candidats profil and edit profil
    // //show the profil
    // //take him to edit profile
    // Route::get('/candidat/{id_candidat}/edit',"CandidatController@edit");
    // //update
    // Route::put('/candidat/{id_candidat}',"CandidatController@update");
    // Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::get('/save','TestController@show');
