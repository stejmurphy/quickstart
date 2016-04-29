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


use App\Task;
use Illuminate\Http\Request;

/**
 * Authentication Routes...
 */

Route::auth();


/**
 * Show tasks
 */
Route::get('/tasks', 'TaskController@index');

/**
 *  Add task
 */
Route::post('/task', 'TaskController@store');

/**
 * Delete task
 */
Route::delete('/task/{task}', 'TaskController@destroy');
