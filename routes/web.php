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
//sign in and up
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::get('/sign_up', 'Auth\RegisterController@showRegisterForm');
    Route::post('/login','Auth\LoginController@Role')->name('login');
    Route::post('/sign_up','Auth\RegisterController@Role')->name('sign_up');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
/*
    Route::view('/home', 'home')->middleware('auth');
    Route::view('/employer', 'employer');
    Route::view('/candidate', 'candidate');*/

Route::get('/home', 'HomeController@index')->name('home');

//restrict access
Route::group(['middleware' => 'employer'], function () {
    Route::get('/recruteur', function(){
        $user= App\Offre::find(2);
        return view('recruteur.dashboard', ['offres'=>$user->candidate]);
    });
    Route::view('/edit_profile_recruteur', 'recruteur.edit_profile');
    Route::view('/company_page', 'recruteur.companyPage');
    Route::view('/company_applications', 'recruteur.companyApp');
    Route::view('/manage_jobs', 'recruteur.manage_jobs');
    Route::view('/post_job', 'recruteur.post_job');

    Route::post('/post_job','RecruteurController@postNewJob');
    Route::post('/edit_profile_recruteur','RecruteurController@editProfile')->name('edit_profile_recruteur');
});

Route::group(['middleware' => 'candidate'], function () {
    Route::view('/candidat', 'candidat.dashboard');
    Route::view('/cv', 'candidat.cv');
    Route::view('/applied_jobs', 'candidat.applied_jobs');
    Route::view('/edit_profile', 'candidat.edit_profile');
    //candidats profil and edit profil
    //show the profil
    Route::get('/candidat/{id_candidat}',"CandidatController@show");
    //take him to edit profile
    Route::get('/candidat/{id_candidat}/edit',"CandidatController@edit");
    //update
    Route::put('/candidat/{id_candidat}',"CandidatController@update");
});

Route::get('/save','RecruteurController@profile');
