<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'github' => [
	    'client_id' => getenv('GITHUB_CLIENT_ID'),
	    'client_secret' => getenv('GITHUB_CLIENT_SECRET'),
	    'redirect' => 'http://palmflet.co.uk/home'
    ],
    
    'facebook' => [
	    'client_id' => '1107553102709431',
	    'client_secret' => '205f1f37362bae710ece9d13cf3615c3',
	    'redirect' => 'http://www.palmflet.co.uk/login/facebook/callback'
    ],

];
