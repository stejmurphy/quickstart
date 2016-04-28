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
 * Task Dashboard
 */

Route::get('/', function () {
    //TODO
});


/**
 *  Add a new task
 */

Route::post('/task', function(Request $request){
    //TODO
});

/**
 *  Delete a task
 */
Route::delete('/task/{task}', function(Task $task){
    //TODO
});