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
    return view('backend.dashboard.index');
})->middleware('auth');

Auth::routes();

Route::middleware('auth')->get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin'],'prefix' =>'admin','as'=>'admin.'], function () {
    Route::resources([
        'items'=>'ItemsController',
        'departments'=>'DepartmentsController',
        'sub-departments'=>'SubDepartmentsController',
        'roles'=>'RolesController',
        'permissions'=>'PermissionsController',
        'roles-permissions'=>'RolesPermissionsController',
        'users'=>'UsersController',
        'users-roles'=>'UsersRolesController',
        ]);
});

Route::group(['middleware'=>'auth','prefix' =>'user','as'=>'user.'], function () {
    Route::resources([
        'items'=>'ItemsController',
        'departments'=>'DepartmentsController',
        'sub-departments'=>'SubDepartmentsController',
        'roles'=>'RolesController',
        'permissions'=>'PermissionsController',
        'roles-permissions'=>'RolesPermissionsController',
        'users'=>'UsersController',
        'users-roles'=>'UsersRolesController',
        ]);
});