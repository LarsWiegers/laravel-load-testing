# WIP Laravel load testing package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/larswiegers/laravel-load-testing.svg?style=flat-square)](https://packagist.org/packages/larswiegers/laravel-load-testing)
[![Total Downloads](https://img.shields.io/packagist/dt/larswiegers/laravel-load-testing.svg?style=flat-square)](https://packagist.org/packages/larswiegers/laravel-load-testing)
![GitHub Actions](https://github.com/larswiegers/laravel-load-testing/actions/workflows/main.yml/badge.svg)

![Laravel maps](https://banners.beyondco.de/Laravel%20Load%20Testing.png?theme=light&packageManager=composer+require&packageName=larswiegers%2Flaravel-load-testing&pattern=architect&style=style_1&description=The+easiest+way+to+use+load+test+your+application+or+api.+&md=1&showWatermark=0&fontSize=100px&images=terminal&widths=500&heights=500)

WIP package, that can help you write load testing scripts for your application or api. 
Write your tests like your used to in the Laravel way. 

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
