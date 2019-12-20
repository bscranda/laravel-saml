<?php

namespace Bscranda\Saml;

use Exception;
use OneLogin\Saml2\Auth;

/**
 * Saml Auth Class
 *
 * Main class!
 * 
 * @package Laravel-SAML
 * @author Brady Crandall <bscranda@svsu.edu>
 */
class SamlAuth {

    /**
     * Main class from the OneLogin toolkit.
     *
     * @var \OneLogin\Saml2\Auth
     */
    protected $oneLoginAuth;


    /**
     * Initializes authentication class with OneLogin's main auth object. 
     *
     * @param \OneLogin\Saml2\Auth $oneLoginAuth
     */
    public function __construct(Auth $oneLoginAuth)
    {
        $this->oneLoginAuth = $oneLoginAuth;
    }

    /**
     * Retrieves and validates service provider metadata used by the identity provider.
     *
     * @return mixed XML string
     */
    public function getServiceProviderMetadata()
    {
        $settings = $this->getSettings();
        $metadata = $settings->getSPMetadata();
        $errors = $settings->validateMetadata($metadata);

        if (!empty($errors)) {
            throw new Exception("Service provider metadata failed validation: " . implode(',', $errors));
        }

        return $metadata;
    }

    /**
     * Retrieves service provider settings created from config values.
     *
     * @return \OneLogin\Saml2\Settings
     */
    private function getSettings()
    {
        return $this->oneLoginAuth->getSettings();
    }

}