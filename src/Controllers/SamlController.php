<?php

namespace Bscranda\Saml\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Bscranda\Saml\SamlAuth;

/**
 * Primary controller that handles SAML requests/responses.
 * 
 * @author Brady Crandall <bscranda@svsu.edu>
 * @since 2019/12/07
 */
class SamlController extends Controller
{

    public function metadata(SamlAuth $auth)
    {
        $metadata = $auth->getServiceProviderMetadata();

        return response($metadata, 200, ['Content-type: text/xml']);
    }

    public function acs(SamlAuth $auth)
    {
        // 
    }
    
    public function sls(SamlAuth $auth)
    {
        // 
    }
}
