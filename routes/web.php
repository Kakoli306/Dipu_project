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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/','WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about/add', 'AboutController@index');
Route::post('/about/new', 'AboutController@saveAbout');
Route::get('/about/manage', 'AboutController@manageAbout');
Route::get('/about/edit/{id}', 'AboutController@editAbout');
Route::get('/about/update', 'AboutController@updateAbout');
Route::post('/about/delete', 'AboutController@deleteAbout');


Route::get('/education/add', 'EducationController@index');
Route::post('/education/new', 'EducationController@saveEducation');
Route::get('/education/manage', 'EducationController@manageEducation');
Route::get('/education/edit/{id}', 'EducationController@editEducation');
Route::post('/education/update', 'EducationController@updateEducation');
Route::post('/education/delete', 'EducationController@deleteEducation');

Route::get('/achievement/add', 'AchievementController@index');
Route::post('/achievement/new', 'AchievementController@saveAchievement');
Route::get('/achievement/manage', 'AchievementController@manageAchievement');
Route::get('/achievement/edit/{id}', 'AchievementController@editAchievement');
Route::post('/achievement/update', 'AchievementController@updateAchievement');
Route::post('/achievement/delete', 'AchievementController@deleteAchievement');

Route::group(['prefix' => 'resume'],function(){
  Route::get('/add', 'ResumeController@index')->name('add-resume');
  Route::post('/new', 'ResumeController@saveResume')->name('new-resume');
    Route::get('/manage', 'ResumeController@manageResume')->name('manage-resume');
    Route::post('/edit/', 'ResumeController@editResume')->name('edit-resume');
    Route::post('/update', 'ResumeController@updateResume')->name('update-resume');
    Route::post('/delete', 'ResumeController@deleteResume')->name('delete-resume');
});




///Frontend
Route::get('/', 'FrontendController@index');
//Route::get('/', 'FrontendController@index1');
