# Laravel Standard Scaffolding

[![Build Status](https://travis-ci.org/presethub/laravel-base.svg?branch=master)](https://travis-ci.org/presethub/laravel-base)
[![StyleCI Status](https://github.styleci.io/repos/184733142/shield?branch=master)](https://github.styleci.io/repos/184733142)
[![Total Download](https://poser.pugx.org/presethub/laravel-base/d/total.svg?format=flat-square)](https://packagist.org/packages/presethub/laravel-base)
[![Latest Stable Version](https://poser.pugx.org/presethub/laravel-base/v/stable.svg?format=flat-square)](https://packagist.org/packages/presethub/laravel-base)
[![License](https://img.shields.io/badge/license-mit-green.svg?style=flat-square)](https://choosealicense.com/licenses/mit/)

## What's in the box?

- Standard Laravel 5.8 preset.
  - UUID primary key for User model.
  - Authentication using email or username.
- Bootstrap 4.3.1 + jQuery 3.4.1 + Vue 2.6.10.
- SweelAlert2 by [Rashid Ali](https://github.com/realrashid/sweet-alert).

## Quick Start

At least you will need `PHP >= 7.2` and `Nodejs >= 8.15`. For database backend, you can choose between
`PostgreSQL >= 9.6` or `MySQL >= 5.7` or `MariaDB >= 10.3` or any other database engine that supported
by Laravel. Also, you maybe want to use `Redis >= 3.2` for session store and or caching storage.

### Create New Project

```
composer create-project presethub/laravel-base <app_name>
```

Or, if you want to use spesific version:

```
composer create-project presethub/laravel-base <app_name> <version>
```

Change `<app_name>` with your own and `<version>` with release version.
See [release page][releasepage] for the version number.


#### Package Version

The versioning number will follow the release of the Laravel version, followed by the package version release number:

```
a.b.c  =>  a.b are Laravel version, c is package version.
5.8.1  =>  Laravel 5.8 and 1 is release number / revision.
```

### Start Developing

Edit or create `.env` file and then execute:

```bash
composer install
npm i --no-optional
npm run development
php artisan migrate:fresh --seed
```

Default user is `admin@mail.com` and `secret` for the password.

## License

Licensed under the terms of [MIT License][choosealicense]. See [license file](./license.txt) for more information.

[choosealicense]:https://choosealicense.com/licenses/mit/
[releasepage]:https://github.com/presethub/laravel-base/releases
