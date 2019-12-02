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
//candidats
Route::get('/candidat',function(){
    return view ('candidat.dashboard');
});
Route::get('/edit_profile',function(){
    return view ('candidat.edit_profile');
});
Route::get('/cv',function(){
    return view ('candidat.cv');
});
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

//login 
Route::get("/login",function(){
    return view ("login");
});
//
Route::get("/sign_up",function(){
    return view ("sign_up");
});