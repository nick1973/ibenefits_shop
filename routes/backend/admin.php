<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// CATEGORY CONTROLLERS
//Route::resource('occupational-health','OccupationalHealthController');
//Route::resource('insurance','InsuranceController');
//Route::resource('music-app','MusicAppController');
//Route::resource('online-training','OnlineTrainingController');
//Route::resource('reward','RewardController');

Route::resource('categories','CategoriesController');
Route::resource('products','ProductsController');


Route::get('all/products', function () {
    return ['data' => \App\Models\Shop\Products::all()];
});
//Route::get('all/insurance', function () {
//    return ['data' => \App\Models\Shop\Insurance::all()];
//});
//Route::get('all/music-app', function () {
//    return ['data' => \App\Models\Shop\MusicApp::all()];
//});
//Route::get('all/online-training', function () {
//    return ['data' => \App\Models\Shop\OnlineTraining::all()];
//});
//Route::get('all/rewards', function () {
//    return ['data' => \App\Models\Shop\Reward::all()];
//});
Route::get('all/categories', function () {
    return ['data' => \App\Models\Shop\Categories::all()];
});