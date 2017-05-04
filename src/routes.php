<?php

Route::group([ 'middleware' => [ 'web', 'guest'] ], function() {

    // Login Routes ...
    Route::get('login', 'PeterColes\LaravelMinimalisticLogin\Controllers\LoginController@showLoginForm')->name('login');
    Route::post('login', 'PeterColes\LaravelMinimalisticLogin\Controllers\LoginController@login');

    // Password Reset Routes ...
    Route::get('password/reset', 'PeterColes\LaravelMinimalisticLogin\Controllers\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'PeterColes\LaravelMinimalisticLogin\Controllers\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'PeterColes\LaravelMinimalisticLogin\Controllers\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'PeterColes\LaravelMinimalisticLogin\Controllers\ResetPasswordController@reset');    
});

Route::group([ 'middleware' => 'web' ], function() {
    
    // Logout Route ...
    Route::post('logout', 'PeterColes\LaravelMinimalisticLogin\Controllers\LoginController@logout')->name('logout');   
});
