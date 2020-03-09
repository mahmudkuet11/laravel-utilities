# Laravel Utilities

[![Latest Stable Version](https://poser.pugx.org/mahmud/laravel-utilities/v/stable)](https://packagist.org/packages/mahmud/laravel-utilities)
[![License](https://poser.pugx.org/mahmud/laravel-utilities/license)](https://packagist.org/packages/mahmud/laravel-utilities)
[![composer.lock](https://poser.pugx.org/mahmud/laravel-utilities/composerlock)](https://packagist.org/packages/mahmud/laravel-utilities)

## Version compatibility

| Laravel | Laravel Utilities |
|---------|-------------------|
| 5.x     | 1.x               |
| 6.x     | 1.x               |

## Installation

Via Composer

``` bash
$ composer require mahmud/laravel-utilities ^1.2.0
```

## Usage

### ASCII validation rule

```php
use Illuminate\Support\Facades\Validator;

$validator = Validator::make(['foo' => 'বার'], ['foo' => new Ascii()]);
$validator->fails() // true
```

### Hash Check validation rule

```php
use Illuminate\Support\Facades\Validator;

$hashedPassword = bcrypt('123456');

$validator = Validator::make(['password' => '123456'], ['password' => 'hash_check:' . $hashedPassword]);
$validator->passes() // true
```

### `number` function

```php
number($number, $decimal = 2)

echo number(7.236)  // 7.24
echo number(3.14159, 4) // 3.1416
echo (3.14159, 0) // 3.0
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## License

license. Please see the [license file](license.md) for more information.
