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
################################################
##################### SITE #####################
################################################
Route::get('/', 'SiteController@showSiteHomePage');

################################################
################ AUTHENTICATION ################
################################################
# Default authentication routes
Auth::routes();

################################################
################## DASHBOARD ###################
################################################
Route::get('/home', 'HomeController@showUserDashboard')->name('home')->middleware('auth');

#################### USER ######################
Route::prefix('user')->middleware('auth')->group(function () {
    # Application group
    Route::prefix('application')->group(function () {
        # Application Details
        Route::get('details', 'User\ApplicationController@showApplicationDetails');

        # Complete application
        Route::get('complete', 'User\ApplicationController@showCompleteApplicationForm');
        Route::post('complete', 'User\ApplicationController@saveAdditinalApplicationDetails');

        # Edit Application
        Route::get('edit', 'User\ApplicationController@editApplicationDetails');
        Route::post('edit', 'User\ApplicationController@saveEditedApplicationDetails');
    });
});

#################### ADMIN #####################
Route::prefix('admin')->group(function () {
    //
});
#################### ROOT ######################

#################### TESTS ######################
//Route::view('auth', 'layouts.auth');

