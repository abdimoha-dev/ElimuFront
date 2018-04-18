<?php

use App\Mail\ShowInterest;

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
    #vacancies group

    Route::prefix('vacancies')->group(function () {
        #Show Vacancies

        Route::get('schools', 'User\ApplicationController@showSchools');

        Route::get('schoolvacancy', 'User\ApplicationController@vacancybysubjects');

        Route::get('countyvacancy', 'User\ApplicationController@vacancybycounty');

        Route::get('county', 'User\ApplicationController@showvacancybycounty');
        Route::post('county', 'User\ApplicationController@vacancybycounty');
    });


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

        Route::get('getform', 'Admin\SchoolDetailsController@showSchoolDetails');
        Route::post('getform', 'Admin\SchoolDetailsController@addSchoolDetails');

        Route::get('vacancy', 'Admin\VacancyController@showVacancyDetails');
        Route::post('vacancy', 'Admin\VacancyController@AddVacancyDetails');

        Route::get('schoolvacancy', 'Admin\VacancyController@showMyVacancies');

        Route::get('teachersvacancy', 'Admin\VacancyController@allteachersvacancy');
        Route::get('vacancybysubjects', 'Admin\VacancyController@showMarchingVacancies');


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

############Show More Details##############
Route::get('school/{school_id}', 'User\ApplicationController@showVacancies');
Route::get('vacancy/{user_id}', 'Admin\VacancyController@showTeachersDetails');
Route::get('schoolvacancy/{vacancy_id}', 'Admin\VacancyController@vacancyId');
Route::get('schoolbyvacancy/{school_id}', 'User\ApplicationController@vacancybyschool');

###########Emails#####################
Route::get('emails/{email}', 'EmailController@sendMail');#email to school
Route::get('interview/{email}','EmailController@interviewInvitation');

##################Messages###################
Route::get('messageform/{id}','Message\MessageController@showMessageForm');
Route::post('messageform/{id}','Message\MessageController@sendMessage');

Route::get('sentmessages','Message\MessageController@getMessage');