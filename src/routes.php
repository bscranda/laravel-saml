<?php
/**
 * Endpoints required to handle SAML requests.
 */

Route::prefix('saml')->group(function () {
    Route::get('metadata', 'Bscranda\Saml\Controllers\SamlController@metadata')->name('saml.metadata');
    Route::get('acs', 'Bscranda\Saml\Controllers\SamlController@acs')->name('saml.acs');
    Route::get('sls', 'Bscranda\Saml\Controllers\SamlController@sls')->name('saml.sls');
});