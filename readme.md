# Laravel Standard Scaffolding

[![Build Status](https://travis-ci.org/presethub/laravel-base.svg?branch=master)](https://travis-ci.org/presethub/laravel-base)
[![StyleCI Status](https://github.styleci.io/repos/182516480/shield?branch=master)](https://github.styleci.io/repos/182516480)
[![Total Download](https://poser.pugx.org/presethub/laravel-base/d/total.svg?format=flat-square)](https://packagist.org/packages/presethub/laravel-base)
[![Latest Stable Version](https://poser.pugx.org/presethub/laravel-base/v/stable.svg?format=flat-square)](https://packagist.org/packages/presethub/laravel-base)
[![License](https://img.shields.io/badge/license-mit-green.svg?style=flat-square)](https://choosealicense.com/licenses/mit/)

## What's in the box?

- Standard Laravel 5.8 preset.
- Bootstrap 4.3.1 + jQuery 3.4.1 + Vue 2.6.10.
- UUID primary key for User model.
- Authentication using email or username.

## Quick Start

At least you will need `PHP >= 7.2` and `Nodejs >= 8.15`. You can choose between `PostgreSQL >= 9.6`
or `MySQL >= 5.7` or `MariaDB >= 10.3` for your application database. Also, you maybe want to use
`Redis >= 3.2` for session store and caching.

### Create New Project

```
composer create-project presethub/laravel-base <app_name> <version>
```

Change `<app_name>` with your own and `<version>` with this gram version.
See [release page][releasepage] for the version number.

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
