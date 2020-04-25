> ### Log requests coming into your laravel app

Helps you know exactly what comes in and when. The package will log all query and body parameters attached to a request.

----------

# Getting started

## Installation

Install this package via composer

```$ composer require sdkcodes/logpress```


## Middleware Usage

** The package comes with a middleware that you can apply either to only the routes you want to log, or all routes.

The middleware lives in the namespace:

`use Sdkcodes\Logpress\Middleware\LogRequests;`

Open your `App\Http\Kernel.php`

To log request to all routes, add the LogRequests api to the `$middleware` array:
```
protected $middleware = [
    \App\Http\Middleware\TrustProxies::class,
    \Fruitcake\Cors\HandleCors::class,
    \App\Http\Middleware\CheckForMaintenanceMode::class,
    \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
    \App\Http\Middleware\TrimStrings::class,
    \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    LogRequests::class
];
```

Or you can add to specific middleware groups `$middlewareGroups` array e.g 'web' or 'api'.

Or add to the `$routeMiddleware` array to apply on a route by route basis.


## Configuration

By default, the package 'avoids' logging fields with the name 'password' or 'pin', however, you can overwrite these values by publishing the config file and updating the 'avoids'

`λ php artisan vendor:publish --provider="Sdkcodes\Logpress\LogpressServiceProvider" --tag=config`

This command publishes a new config file 'logpress.php' to your config directory and you can modify to include all the fields you want to avoid logging.

## Output

The output generated looks like: 

`[2020-04-25 16:42:17] local.INFO: GET / - Body: {"q":"artisan","person":"goodluck"} Query: {"q":"artisan","person":"goodluck"} Full path: http://laravelpackagedev.sdk Scheme: http`

## LICENSE
The MIT License (MIT). Please see [License File](LICENSE) for more information.