<?php

Route::view('/', 'welcome');

Route::post('/household', 'FamilyController@store')->name('household.store');
Route::post('/soloparent', 'SoloParentFamilyController@store')->name('soloparent.store');
