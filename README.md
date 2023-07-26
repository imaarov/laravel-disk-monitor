# This is my package laravel-disk-monitor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/imaarov/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/imaarov/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/imaarov/laravel-disk-monitor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/imaarov/laravel-disk-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/imaarov/laravel-disk-monitor/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/imaarov/laravel-disk-monitor/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/imaarov/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/imaarov/laravel-disk-monitor)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us


## Installation

You can install the package via composer:

```bash
composer require imaarov/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Imaarov\DiskMonitor\DiskMonitorServiceProvider"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-disk-monitor-views"
```

## Usage

```php
$DiskMonitor = new Imaarov\DiskMonitor();
echo $DiskMonitor->echoPhrase('Hello, Imaarov!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Iman Atarof](https://github.com/imaarov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
