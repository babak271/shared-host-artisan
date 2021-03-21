# Easily run artisan command in php shared host.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/babak271/shared-host-artisan.svg?style=flat-square)](https://packagist.org/packages/babak271/shared-host-artisan)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/babak271/shared-host-artisan/run-tests?label=tests)](https://github.com/babak271/shared-host-artisan/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/babak271/shared-host-artisan.svg?style=flat-square)](https://packagist.org/packages/babak271/shared-host-artisan)


![demo 1](https://github.com/babak271/share-host-artisan/blob/master/examples/share_host_artisan_commands_demo1.png?raw=true)

Shared host artisan package enables you to easily run caching and clearing cache files in
a shared host that restricted `proc_open` functions.

## Installation

You can install the package via composer:

```bash
composer require babak271/shared_host_artisan
```

You can publish the config and view files with:
```bash
php artisan vendor:publish
--provider="Babak271\SharedHostArtisanCommand\SharedHostArtisanCommandServiceProvider"
```

This is the contents of the published config file:

```php
return [
];
```


## Usage
You can set your desired route and middleware for the artisan commands in the config file or go with the defaults.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Babak Ashrafi](https://github.com/babak271)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
