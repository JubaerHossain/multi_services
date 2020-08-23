<?php


Auth::routes();
Route::any('logout','Auth\LoginController@logout');

