<?php

Route::view('/', 'welcome');

Route::post('/household', 'FamilyController@store')->name('household.store');