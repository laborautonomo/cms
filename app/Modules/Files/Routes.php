<?php
/**
 * Routes - all Module's specific Routes are defined here.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */


/** Define static routes. */

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Modules\Files\Controllers\Admin'), function() {
    Route::get('files',           array( 'uses' => 'Files@index'));
    Route::get('files/plain',    array('before' => 'auth', 'uses' => 'Files@plain'));
    Route::any('files/connector', array('before' => 'auth','uses' => 'Files@connector'));

    // Thumbnails Files serving.
    Route::get('files/thumbnails/{file}', array( 'uses' => 'Files@thumbnails'));

    // Preview Files serving.
    Route::get('files/preview/{path}', array( 'uses' => 'Files@preview'))->where('path', '(.*)');
});
