<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | Here you may specify which origins are allowed to access the application.
    | The default value allows all origins.
    |
    */

    'allowed_origins' => ['http://127.0.0.1:5173'], // Здесь указываем адрес вашего фронтенда

    /*
    |--------------------------------------------------------------------------
    | Allowed HTTP Methods
    |--------------------------------------------------------------------------
    |
    | Here you can specify which HTTP methods are allowed for CORS requests.
    | This may be useful for restricting the methods that can be used for
    | accessing your application.
    |
    */

    'allowed_methods' => ['*'], // Разрешаем все HTTP методы

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | The allowed headers should be specified here.
    | The default value allows all headers.
    |
    */

    'allowed_headers' => ['*'], // Разрешаем все заголовки

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | This option will allow the specified headers to be exposed to the client.
    | Leave empty for no exposed headers.
    |
    */

    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Supports Credentials
    |--------------------------------------------------------------------------
    |
    | This option controls whether credentials (cookies, HTTP authentication)
    | can be included in CORS requests. Set this to `true` to allow credentials.
    |
    */

    'supports_credentials' => true,

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | The `max_age` option specifies the maximum amount of time (in seconds) that
    | the results of a preflight request can be cached.
    |
    */

    'max_age' => 0,
];
