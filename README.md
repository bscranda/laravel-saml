# SAML2 Authentication for Laravel 6
Implement single sign-on (SSO) via SAML2 authentication in your Laravel 6 applications by utilzing the OneLogin PHP toolkit.
<br> <br>
Make sure you have installed the necessary PHP version & extensions listed in the <a href="https://github.com/onelogin/php-saml#dependencies">OneLogin Dependencies</a> section.

## Installation
Start by requiring this package with Composer.
```console
composer require bscranda/laravel-saml
```

Then publish the config file:
```
php artisan vendor:publish --provider="Bscranda\Saml\SamlServiceProvider"
```

This creates the file `config/saml_settings.php` which is handled directly by <a href="https://github.com/onelogin/php-saml/#how-it-works">OneLogin</a> so you can review the complete configuration details there, but we'll go through a summary of the key pieces next.

## Configuration

## Usage