<?php

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

Route::get('complete', 'Admin\AdditionalDetailsController@showAdditinalDetailsForm');
Route::get('complete', 'Admin\AdditionalDetailsController@saveAdditinalDetails');
##################### ADMIN #####################
Route::prefix('admin')->group(function () {
    Route::prefix('details')->group(function () {
        Route::get('complete', 'Admin\AdditionalDetailsController@showAdminDetailsForm');
        Route::post('complete', 'Admin\AdditionalDetailsController@adminAdditinalDetails');
    });
});
#################### ROOT #######################

#################### TESTS ######################
//Route::view('auth', 'layouts.auth');
Route::view('applicationform', 'viewdetails.');


###################RESETTING#####################
Route::view('resetemail', 'auth/passwords/email');

Route::view('resetPassword', 'auth/passwords/reset');
Route::view('details', 'dashboard/user/application/details');

