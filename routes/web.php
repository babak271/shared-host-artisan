<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Babak271\SharedHostArtisan', 'as' => 'share_host_artisan.'], function () {
    Route::get('clear_cache', 'SharedHostArtisanCommand@clearCache')->name('clear_cache');

    Route::get('clear_route', 'SharedHostArtisanCommand@clearRoute')->name('clear_route');
    Route::get('cache_route', 'SharedHostArtisanCommand@cacheRoute')->name('cache_route');

    Route::get('clear_view', 'SharedHostArtisanCommand@clearView')->name('clear_view');
    Route::get('cache_view', 'SharedHostArtisanCommand@cacheView')->name('cache_view');

    Route::get('clear_config', 'SharedHostArtisanCommand@clearConfig')->name('clear_config');
    Route::get('cache_config', 'SharedHostArtisanCommand@cacheConfig')->name('cache_config');
});
