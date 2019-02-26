laravel workbench for Laravel 5
====

Help you to fast overivew, easily test or integrate some using feature into your existing Laravel project.

![laravel workbench](https://github.com/PercyCheung/laravel-workbench/)

# Installation

```bash
composer require percychueng/laravel-workbench
```

If your using autodiscovery in Laravel, it should just work.

Otherwise - add to your `config/app.php` providers array to where all your package providers are (before your app's providers):

```php
WorkBench\ServiceProvider::class,
```

By default the package exposes a `/routes` url. If you wish to configure this, publish the config.

```bash
php artisan vendor:publish --provider="WorkBench\ServiceProvider"
```

If accessing `/routes` isn't working, ensure that you've included the provider within the same area as all your package providers (before all your app's providers) to ensure it takes priority.

By default laravel workbench only enables itself when `APP_DEBUG` env is true. You can configure this on the published config as above, or add any custom middlewares.


Thanks to "PrettyRoute" which inspire me to start this project
(https://github.com/garygreen/workbench)
