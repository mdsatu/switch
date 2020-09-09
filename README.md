# Switcher

Switcher is used to switch database status of specific table to your application. 


[GitHub license](https://github.com/mdsatu/switcher/blob/master/LICENSE), [GitHub issues](https://github.com/mdsatu/switcher/laravel-meta-manager/issues)

## Requirements

- PHP 5.4 and above
- jQuery

## Steps:

* [Install](#install)
* [Configuration](#configuration)
* [Usage](#usage)
* [Example](#example)
* [Maintainers](#maintainers)
* [License](#license)


### Install

**Composer**

Run the following to include this package via Composer

```shell
composer require mdsatu/switcher
```

#### Laravel 5.5+ uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

Once download is complete, the next thing you have to do is include the service provider within `config/app.php`.

```php
'providers' => [
        DWK\Switcher\SwitcherServiceProvider::class,
];
```
Then run `php artisan vendor:publish --provider="DWK\Switcher\SwitcherServiceProvider"` to get the config of Switcher.


### Configuration

Setup default application switcher in `switcher.php` config. (Optional but recommended)

#### Available options:

Option | Description
--------- | -------
`default_column` | Here you may specify the default column name.
`loader` | Here you may specify loader animation (Optional).



### Usage

Once configuration is complete you can then add the above at body end tag to activate the "Switcher". Note that jQuery has installed in your project.

```php
@include('switcher::code')
```

Now put this code where you want to preview the "Switch"


```php
@include('switcher::switch', [
    'table' => 'users',
    'data' => $query_data,
    'column' => 'status', // Optional
    'id' => 1 // Optional
])
```



### Example

```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    
        @include('switcher::switch', [
            'table' => 'users',
            'data' => $query_data
        ])
    </body>
    </html>
```


### Maintainers

This package is maintained by [MD Satu](http://github.com/mdsatu) and you!



### License

This package is licensed under the [MIT license](https://github.com/mdsatu/switcher/blob/master/LICENSE).
