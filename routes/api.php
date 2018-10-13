<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'API\UsersController@login');
    Route::post('register', 'API\UsersController@register');
});

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
    Route::post('details', 'API\UsersController@details');
    Route::resource('candidates', 'CandidateController');
    Route::resource('elections', 'ElectionController');
    Route::resource('election-types', 'ElectionTypeController');
    Route::resource('educations', 'EducationTypeController');
    Route::resource('issues', 'IssueController');
    Route::resource('issuePositions', 'IssuePositionController');
    Route::resource('memberships', 'MembershipController');
    Route::resource('offices', 'OfficeController');
    Route::resource('office-types', 'OfficeTypeController');
    Route::resource('politicians', 'PoliticainController');
    Route::resource('positions', 'PositionController');

});
