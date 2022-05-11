# Laravel Custom Helper

Make custom helper just with one command!

## Installation

#### requires Laravel 8+

Via composer:

```bash
$ composer require RanjbarAli/Laravel-Custom-Helper
```
If you do not run Laravel 5.5 (or higher), then add the service provider in `config/app.php`:

```php
RanjbarAli\LaravelCustomHelper\LaravelCustomHelperServiceProvider::class,
```


You can publish configuration with:
```bash
php artisan vendor:publish --provider="RanjbarAli\LaravelCustomHelper\LaravelCustomHelperServiceProvider"
```

## Usage
Make helper with:
```bash
php artisan make:helper {function_name}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
