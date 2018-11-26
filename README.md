# eXolnet Laravel Status

[![Latest Stable Version](https://poser.pugx.org/eXolnet/laravel-status/v/stable?format=flat-square)](https://packagist.org/packages/eXolnet/laravel-status)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/eXolnet/laravel-status/master.svg?style=flat-square)](https://travis-ci.org/eXolnet/laravel-status)
[![Total Downloads](https://img.shields.io/packagist/dt/eXolnet/laravel-status.svg?style=flat-square)](https://packagist.org/packages/eXolnet/laravel-status)

The eXolnet Laravel Status package extends the base features available in Laravel.

## Installation

Require this package with composer:

```
$ composer require exolnet/laravel-status
```

If you don't use package auto-discovery, add the service provider to the `providers` array in `config/app.php`:

```
Exolnet\Status\StatusServiceProvider::class
```

And the facade to the `facades` array in `config/app.php`: 

```
'Status' => Exolnet\Status\StatusFacade::class
```

## Usage

### Health page

To see the health status, you have to access `/health` page.

### SHA revision page

To see commit SHA version, you have to access `/sha` page. Be sure you have a revision file at the project root.

## Testing

To run the phpUnit tests, please use:

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@exolnet.com instead of using the issue tracker.

## Credits

- [Alexandre D'Eschambeault](https://github.com/xel1045)
- [Martin Blanchette](https://github.com/martinblanchette)
- [All Contributors](../../contributors)

## License

This code is licensed under the [MIT license](http://choosealicense.com/licenses/mit/). 
Please see the [license file](LICENSE) for more information.
