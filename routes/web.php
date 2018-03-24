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
Route::get('/home', 'HomeController@showUserDashboard')->name('home');
