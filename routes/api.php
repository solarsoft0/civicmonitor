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
    Route::get('candidates/{candidate}/issue-positions', 'CandidateController@candidateIssuePositions');
    Route::get('candidates/{candidate}/candidate-political-parties', 'CandidateController@candidatePoliticalParties');
    Route::post('details', 'API\UsersController@details');
    Route::resource('candidates', 'CandidateController');
    Route::resource('elections', 'ElectionController');
    Route::resource('election-types', 'ElectionTypeController');
    Route::resource('educations', 'EducationController');
    Route::resource('issues', 'IssueController');
    Route::resource('issuePositions', 'IssuePositionController');
    Route::resource('memberships', 'MembershipController');
    Route::resource('offices', 'OfficeController');
    Route::resource('office-types', 'OfficeTypeController');
    Route::resource('politicians', 'PoliticianController');
    Route::resource('positions', 'PositionController');

});

Route::group(['prefix' => 'v2'], function () {
    Route::get('candidates/{candidate}/issue-positions', 'CandidateController@candidateIssuePositions');
    Route::get('candidates/{candidate}/political-parties', 'CandidateController@candidatePoliticalParties');
    // Route::post('details', 'API\UsersController@details')
    Route::resource('candidates', 'CandidateController')->only([
    'index', 'show'
]);
    Route::resource('elections', 'ElectionController')->only([
    'index', 'show'
]);
    Route::resource('election-types', 'ElectionTypeController')->only([
    'index', 'show'
]);
    Route::resource('educations', 'EducationController')->only([
    'index', 'show'
]);
    Route::resource('issues', 'IssueController')->only([
    'index', 'show'
]);
    Route::resource('issuePositions', 'IssuePositionController')->only([
    'index', 'show'
]);
    Route::resource('memberships', 'MembershipController')->only([
    'index', 'show'
]);
    Route::resource('offices', 'OfficeController')->only([
    'index', 'show'
]);
    Route::resource('office-types', 'OfficeTypeController')->only([
    'index', 'show'
]);
    Route::resource('politicians', 'PoliticianController')->only([
    'index', 'show'
]);
    Route::resource('positions', 'PositionController')->only([
    'index', 'show'
]);


    Route::get('/search', 'PoliticianController@search')->name('api.search');

});