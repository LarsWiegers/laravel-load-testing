# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/larswiegers/laravel-load-testing.svg?style=flat-square)](https://packagist.org/packages/larswiegers/laravel-load-testing)
[![Total Downloads](https://img.shields.io/packagist/dt/larswiegers/laravel-load-testing.svg?style=flat-square)](https://packagist.org/packages/larswiegers/laravel-load-testing)
![GitHub Actions](https://github.com/larswiegers/laravel-load-testing/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require larswiegers/laravel-load-testing
```

## Usage

```php
// Usage description here
$statistics = LoadTesting::get(route('api.route'))->times(10)->perSecond()->for(10)->seconds()->execute();

$statistics->assertMaxDuration('500ms')
$statistics->assertRequestsDidNotFail()
```

### Testing

```bash
composer run test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email larswiegers@live.nl instead of using the issue tracker.

## Credits

-   [Lars Wiegers](https://github.com/larswiegers)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
