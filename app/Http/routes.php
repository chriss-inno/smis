<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['middleware' => 'auth', 'uses' => 'UserController@login']);

//Process users
Route::get('login','UserController@login');
Route::post('login','UserController@processLogin');
Route::get('home',['middleware' => 'auth', 'uses' =>'UserController@home']);
Route::get('logout',['middleware' => 'auth', 'uses' =>'UserController@logout']);
Route::get('lockscreen',['middleware' => 'auth', 'uses' =>'UserController@lockscreen']);
Route::post('lockscreen','UserController@unlockscreen');
Route::get('users',['middleware' => 'auth', 'uses' =>'UserController@index']);
Route::get('users/create',['middleware' => 'auth', 'uses' =>'UserController@create']);
Route::post('users/create',['middleware' => 'auth', 'uses' =>'UserController@store']);
Route::get('users/edit/{id}',['middleware' => 'auth', 'uses' =>'UserController@edit']);
Route::post('users/edit',['middleware' => 'auth', 'uses' =>'UserController@update']);
Route::get('users/reports',['middleware' => 'auth', 'uses' =>'UserController@report']);

//Academic Main menu
Route::get('academic/current-year',['middleware' => 'auth', 'uses' =>'AcademicSetupController@currentYear']);
Route::get('academic/examination-types',['middleware' => 'auth', 'uses' =>'AcademicSetupController@examinationTypes']);
Route::get('academic/examination-period',['middleware' => 'auth', 'uses' =>'AcademicSetupController@examinationPeriod']);
Route::get('academic/academic-calendar',['middleware' => 'auth', 'uses' =>'AcademicSetupController@academicCalendar']);
Route::get('academic/subject-allocation',['middleware' => 'auth', 'uses' =>'AcademicSetupController@subjectAllocation']);
Route::get('academic/class-allocation',['middleware' => 'auth', 'uses' =>'AcademicSetupController@classAllocation']);


//Current Year
Route::post('academic/current-year',['middleware' => 'auth', 'uses' =>'AcademicSetupController@store']);
Route::get('getYear/{id}',['middleware' => 'auth', 'uses' =>'AcademicSetupController@getYear']);

//Education Levels
Route::get('academic/edu-levels',['middleware' => 'auth', 'uses' =>'EducationLevelController@index']);
Route::get('academic/edu-levels/create',['middleware' => 'auth', 'uses' =>'EducationLevelController@create']);
Route::get('academic/classes/createm',['middleware' => 'auth', 'uses' =>'EducationLevelController@createm']);
Route::post('academic/edu-levels/create',['middleware' => 'auth', 'uses' =>'EducationLevelController@store']);
Route::get('academic/edu-levels/manage',['middleware' => 'auth', 'uses' =>'EducationLevelController@manage']);
Route::get('academic/edu-levels/reports',['middleware' => 'auth', 'uses' =>'EducationLevelController@reports']);
Route::get('academic/edu-levels/edit',['middleware' => 'auth', 'uses' =>'EducationLevelController@edit']);
Route::post('academic/edu-levels/edit',['middleware' => 'auth', 'uses' =>'EducationLevelController@update']);
Route::get('academic/edu-levels/remove',['middleware' => 'auth', 'uses' =>'EducationLevelController@destroy']);
Route::get('academic/edu-levels/list',['middleware' => 'auth', 'uses' =>'EducationLevelController@listLevels']);
Route::get('academic/edu-levels/listm',['middleware' => 'auth', 'uses' =>'EducationLevelController@listLevelsm']);
Route::get('academic/edu-levels/createClasses/{id}',['middleware' => 'auth', 'uses' =>'EducationLevelController@createClasses']);
Route::get('getElevelClasses/{id}',['middleware' => 'auth', 'uses' =>'EducationLevelController@getElevelClasses']);

//Grades setup
Route::get('academic/grade',['middleware' => 'auth', 'uses' =>'GradeController@index']);
Route::get('academic/grade/getLevelGrades/{id}',['middleware' => 'auth', 'uses' =>'GradeController@getGrades']);





//Classes sections
Route::get('academic/classes',['middleware' => 'auth', 'uses' =>'ClassLevelController@index']);
Route::get('academic/manage',['middleware' => 'auth', 'uses' =>'ClassLevelController@manage']);
Route::get('academic/classes/create',['middleware' => 'auth', 'uses' =>'ClassLevelController@create']);
Route::post('academic/classes/create',['middleware' => 'auth', 'uses' =>'ClassLevelController@store']);
Route::get('academic/classes/edit/{id}',['middleware' => 'auth', 'uses' =>'ClassLevelController@edit']);
Route::post('academic/classes/update',['middleware' => 'auth', 'uses' =>'ClassLevelController@update']);
Route::get('academic/classes/remove/{id}',['middleware' => 'auth', 'uses' =>'ClassLevelController@destroy']);
Route::get('academic/classes/list',['middleware' => 'auth', 'uses' =>'ClassLevelController@listClasses']);
Route::get('academic/classes/listm',['middleware' => 'auth', 'uses' =>'ClassLevelController@listClassesm']);



//School routes

Route::get('schools',['middleware' => 'auth', 'uses' =>'SchoolController@index']);
Route::get('schools/add',['middleware' => 'auth', 'uses' =>'SchoolController@create']);
Route::post('schools/add',['middleware' => 'auth', 'uses' =>'SchoolController@store']);
Route::get('schools/edit/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@edit']);
Route::post('schools/edit/update',['middleware' => 'auth', 'uses' =>'SchoolController@update']);
Route::get('schools/delete/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@destroy']);
Route::get('schools-manage',['middleware' => 'auth', 'uses' =>'SchoolController@manage']);
Route::get('schools-reports',['middleware' => 'auth', 'uses' =>'SchoolController@schoolReports']);
Route::post('schools-search',['middleware' => 'auth', 'uses' =>'SchoolController@search']);
Route::get('schools/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@show']);
Route::get('school/user/add/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@addUser']);
Route::post('school/user/add',['middleware' => 'auth', 'uses' =>'SchoolController@saveUser']);
Route::post('school/user/edit',['middleware' => 'auth', 'uses' =>'SchoolController@updateUser']);
Route::get('school/user/edit/{id}',['middleware' => 'auth', 'uses' =>'SchoolController@showUserEdit']);

//Region and districts controller
Route::get('getDistricts/{id}',['middleware' => 'auth', 'uses' =>'RegionController@getDistricts']);

