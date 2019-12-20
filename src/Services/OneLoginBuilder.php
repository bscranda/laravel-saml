<?php

namespace Bscranda\Saml\Services;

use Exception;
use OneLogin\Saml2\Auth;

class OneLoginBuilder
{

    /**
     * Initializes OneLogin Auth object using config values. 
     *
     * @return \OneLogin\Saml2\Auth
     */
    public static function createAuthFromConfig()
    {
        $config = config('saml_settings');
        
        if (is_null($config)) {
            throw new Exception("Config file not found.");
        }

        // Add SP endpoints to settings array
        $config['sp']['entityId'] = route('saml.metadata');
        $config['sp']['assertionConsumerService']['url'] = route('saml.acs');
        $config['sp']['singleLogoutService']['url'] = route('saml.sls');

        return new Auth($config); 
    }
}