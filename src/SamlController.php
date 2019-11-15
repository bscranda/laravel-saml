<?php

namespace Bscranda\Saml;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class SamlController extends Controller
{
    public function print(string $name)
    {
        echo "Hello there $name!";
    } 
}
