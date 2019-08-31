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
     return view('pages.index');
 });
Route::get('/employee', function () {
    return view('pages.Employee');
});

Route::get('/employee/postyourself', function () {
    return view('pages.employeePostHimself');
});

Route::get('/employer', function () {
    return view('pages.Employer');
});

Route::get('/employer/search', function () {
    return view('pages.searchemployee');
});

Route::post('/employee', 'JobsController@showJobs');
Route::post('/employee/search', 'JobsController@searchEmployee');
Route::post('/employer', 'JobsController@postJobs');
Route::post('/employee/postyourself', 'JobsController@postYourself');
