# Changelog Generator
Easy way to turn yml files into changlogs with laravel artisan commands.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/folumi-dev/changelog-generator.svg?style=flat-square)](https://packagist.org/packages/folumi-dev/changelog-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/folumi-dev/changelog-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/folumi-dev/changelog-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/folumi-dev/changelog-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/folumi-dev/changelog-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/folumi-dev/changelog-generator.svg?style=flat-square)](https://packagist.org/packages/folumi-dev/changelog-generator)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require folumi-dev/changelog-generator
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="changelog-generator-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="changelog-generator-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="changelog-generator-views"
```

## Usage

```php
$changelogGenerator = new Folumi\ChangelogGenerator();
echo $changelogGenerator->echoPhrase('Hello, Folumi!');
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

## Contributors

[![Contributor avatars](https://contrib.rocks/image?repo=Folumi-dev/changelog-generator)](https://github.com/Folumi-dev/changelog-generator/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
