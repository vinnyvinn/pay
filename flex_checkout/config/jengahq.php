<?php
return [
    /*
     * JengaHq Username
     */
    'jenga_username' => env('JENGA_USERNAME'),

    /*
     * JengaHq Password
     */
    'jenga_password' => env('JENGA_PASSWORD'),

    /*
     * JengaHq API Key
     */
    'jenga_api_key' => env('JENGA_API_KEY'),

    /*
     * JengaHq phone
     */
    'jenga_phone' => env('JENGA_PHONE'),

    /*
     * JengaHq base URL
     */
    'jenga_live_endpoint' => env('JENGA_LIVE_ENDPOINT'),
    /*
     * JengaHq Sandbox URL
     */
    'jenga_sandbox_endpoint' => env('JENGA_SANDBOX_ENDPOINT'),
    /*
     * Jenga Environment
     */
    'is_sandbox' => env('IS_SANDBOX', true)
];
