## Installation

Via Composer

``` bash
$ composer require mahmud/laravel-utilities
```

## Usage

```php
use Illuminate\Support\Facades\Validator;

$validator = Validator::make(['foo' => 'বার'], ['foo' => new Ascii()]);
$validator->fails() // true
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
