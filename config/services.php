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

    'google' => [
        'client_id' => '96064214480-f3cpcbgrkbrnblavajlvkscgkuot29k3.apps.googleusercontent.com',
        'client_secret' => 'yKt5P7YHjG2cNNoYzzgbV4Q_',
        'redirect' => 'http://stock-ecommerce.test/callback/google',
    ],

    'github' => [
        'client_id' => '844008d1ad0dd5e29fec',
        'client_secret' => '865f67dc9a72618f1012bf44c350f31044b7eb44',
        'redirect' => 'http://stock-ecommerce.test/callback/github',
    ],

];
