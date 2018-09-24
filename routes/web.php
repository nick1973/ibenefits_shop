<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');

    Route::get('shop', 'ShopController@index')->name('shopIndex');
    Route::get('insurance', 'ShopController@insuranceIndex')->name('insuranceIndex');
    Route::get('reward-and-recognition', 'ShopController@rewardIndex')->name('rewardIndex');
    Route::get('employee-benefits', 'ShopController@employeeIndex')->name('employeeIndex');
    Route::get('super-treats', 'ShopController@superTreatsIndex')->name('superTreatsIndex');
    Route::get('company-purchases', 'ShopController@companyPurchasesIndex')->name('companyPurchasesIndex');

//    Route::get('shop/product', 'ShopController@product')->name('product');
    Route::get('shop/cart', 'ShopController@cart')->name('cart');
    Route::post('shop/cart', 'ShopController@add_cart')->name('addCart');
    Route::get('shop/cart/remove/{id}', 'ShopController@remove_from_cart')->name('removeFromCart');

    Route::get('shop/product/{id}', 'ShopController@product')->name('product');
    Route::get('shop/insurance/{id}', 'ShopController@insurance')->name('insurance');
    Route::get('shop/product/cart/add', 'ShopController@add_cart')->name('add_cart');
    Route::post('shop/cart/update', 'ShopController@update')->name('updateCart');
    Route::post('shop/cart/checkout', 'ShopController@checkout')->name('checkout');

    //CASH OUT
    Route::post('shop/cash/out', 'ShopController@cashout')->name('cashOut');

    /*
     * Routes for footer links
     */

    Route::get('contact', function () {
        return view('frontend.contact');
    })->name('contact');

    Route::get('FAQs', function () {
        return view('frontend.footer.FAQs');
    })->name('FAQs');

    Route::get('headquarters', function () {
        return view('frontend.footer.headquarters');
    })->name('headquarters');

    Route::get('phone-numbers', function () {
        return view('frontend.footer.phone-numbers');
    })->name('phone-numbers');

    Route::get('rules-policy', function () {
        return view('frontend.footer.rules-policy');
    })->name('rules-policy');

    Route::get('report-an-issue', function () {
        return view('frontend.footer.Report-An-Issue');
    })->name('report-an-issue');

    Route::get('shipping-policy', function () {
        return view('frontend.footer.Shipping-Policy');
    })->name('shipping-policy');

    Route::get('survey', function () {
        return view('frontend.footer.survey');
    })->name('survey');

    Route::get('sitemap', function () {
        return view('frontend.footer.sitemap');
    })->name('sitemap');

    Route::get('privacy', function () {
        return view('frontend.footer.privacy');
    })->name('privacy');

    Route::get('terms-condition', function () {
        return view('frontend.footer.terms-condition');
    })->name('terms-condition');

});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});
