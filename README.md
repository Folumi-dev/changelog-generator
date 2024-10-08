# Changelog Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/folumi-dev/changelog-generator.svg?style=flat-square)](https://packagist.org/packages/folumi-dev/changelog-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/folumi-dev/changelog-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/folumi-dev/changelog-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/folumi-dev/changelog-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/folumi-dev/changelog-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/folumi-dev/changelog-generator.svg?style=flat-square)](https://packagist.org/packages/folumi-dev/changelog-generator)

Easy way to turn yml files into changelogs with laravel artisan commands.
## Installation

You can install the package via composer:

```bash
composer require folumi-dev/changelog-generator --dev
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="changelog-generator-config"
```

You can publish the translations file with:

```bash
php artisan vendor:publish --tag="changelog-generator-translations"
```

## Usage

You can generate a yml file with the following command:
```bash
php artisan changelog:file
```

Afterwards you can generate a new version with:
```bash
php artisan changelog:generate {version}
```
Example:
```bash
php artisan changelog:generate v1.0.0
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributors

[![Contributor avatars](https://contrib.rocks/image?repo=Folumi-dev/changelog-generator)](https://github.com/Folumi-dev/changelog-generator/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
