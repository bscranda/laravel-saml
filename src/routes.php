<?php

/**
 * Routes!
 */

Route::get('saml', function() {
    echo 'Hello from the laravel-saml package!';
});

Route::get('print/{name}', 'Bscranda\Saml\SamlController@print');