<?php

use App\Http\Controllers\LanguageController;

/*
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LanguageController::class, 'swap']);

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => 'admin'], function () {

    Route::resource('quizzes', 'QuizController');
});
/*
Route::get('backend/quizzes', ['as'=> 'backend.quizzes.index', 'uses' => 'Backend\QuizController@index']);
Route::post('backend/quizzes', ['as'=> 'backend.quizzes.store', 'uses' => 'Backend\QuizController@store']);
Route::get('backend/quizzes/create', ['as'=> 'backend.quizzes.create', 'uses' => 'Backend\QuizController@create']);
Route::put('backend/quizzes/{quizzes}', ['as'=> 'backend.quizzes.update', 'uses' => 'Backend\QuizController@update']);
Route::patch('backend/quizzes/{quizzes}', ['as'=> 'backend.quizzes.update', 'uses' => 'Backend\QuizController@update']);
Route::delete('backend/quizzes/{quizzes}', ['as'=> 'backend.quizzes.destroy', 'uses' => 'Backend\QuizController@destroy']);
Route::get('backend/quizzes/{quizzes}', ['as'=> 'backend.quizzes.show', 'uses' => 'Backend\QuizController@show']);
Route::get('backend/quizzes/{quizzes}/edit', ['as'=> 'backend.quizzes.edit', 'uses' => 'Backend\QuizController@edit']);
*/
