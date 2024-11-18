# Laravel Custom Helper

Make custom helper just with one command!
Very light!!!

## Installation

***requires Laravel 8+***

Via composer:

```bash
$ composer require RanjbarAli/Laravel-Custom-Helper
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
Now your helper php file is in `App/Helpers` folder!

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.


## License
[MIT](https://choosealicense.com/licenses/mit/)
