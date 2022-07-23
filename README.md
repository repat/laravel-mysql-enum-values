
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# laravel-mysql-enum-values

[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/laravel-mysql-enum-values.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-mysql-enum-values)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/repat/laravel-mysql-enum-values/run-tests?label=tests)](https://github.com/repat/laravel-mysql-enum-values/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/repat/laravel-mysql-enum-values/Check%20&%20fix%20styling?label=code%20style)](https://github.com/repat/laravel-mysql-enum-values/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/laravel-mysql-enum-values.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-mysql-enum-values)

**laravel-mysql-enum-values** is a small Laravel Query Builder [macro](https://tighten.com/blog/the-magic-of-laravel-macros/) that returns the valid values of an [ENUM field for MySQL](https://dev.mysql.com/doc/refman/8.0/en/enum.html). Under the hood it's using this statement:

```sql
SELECT * FROM information_schema.`COLUMNS` WHERE TABLE_NAME = 'table' AND COLUMN_NAME = 'column'
```

## Installation

You can install the package via composer:

```bash
composer require repat/laravel-mysql-enum-values
```

## Usage

The package contains only one macro: `enumValues`. The Service Provider is automatically loaded.

```php
DB::table('users')->enumValues('status'); // ['active', 'inactive']
```

## License

* MIT, see [LICENSE](https://github.com/repat/laravel-mysql-enum-values/blob/master/LICENSE)

## Version

* Version 0.1

## Contact

#### repat

* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/laravel-mysql-enum-values&title=laravel-mysql-enum-values&language=&tags=github&category=software)