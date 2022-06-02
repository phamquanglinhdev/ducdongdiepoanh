<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '883297533004-l6gibtf0h2vbdgsbv0kbpql0ci25da81.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => env("APP_URL")."api/google-login",
    ],
    'facebook' => [
        'client_id' => '490744612801804',
        'client_secret' => '5e36e19cc0b635dba54160e321ade921',
        'redirect' => env("APP_URL")."api/facebook-login",
    ],

];
