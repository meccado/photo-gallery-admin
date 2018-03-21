# photo-gallery-admin

[![Latest Version on Packagist](https://poser.pugx.org/meccado/photo-gallery-admin/v/stable)](https://packagist.org/packages/meccado/photo-gallery-admin)
[![Latest Unstable Version](https://poser.pugx.org/meccado/photo-gallery-admin/v/unstable)](https://packagist.org/packages/meccado/photo-gallery-admin)
[![Total Downloads](https://poser.pugx.org/meccado/photo-gallery-admin/downloads)](https://packagist.org/packages/meccado/photo-gallery-admin)


## Install

Via Composer

``` bash
$ composer require "meccado/photo-gallery-admin:~1.0.0"
```
To register the Service Provider edit **config/app.php** file and add to providers array:

```php
 /*
  *  Service Provider
  */
  Meccado\PhotoGalleryAdmin\PhotoGalleryAdminServiceProvider::class,
```

Publish files with:

```bash
#In Laravel =>5.3.x or =>5.4.x or hiegher first run:
$ php artisan make:auth
#then
$ php artisan vendor:publish  --force
```

Migrate & Seed database files with:

```bash
$ composer dump-autoload
$ php artisan migrate --seed
```

##### Admin Login Page & Credentials

```php
Admin Login: http://localhost:8000/admin

Super Admin
User: super@domain.com
Password: password

Admin
User: admin@domain.com
Password: password

General User
User: user@gmail.com
Password: password
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email tsw603gp@gmail.com instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/meccado/photo-gallery-admin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/meccado/photo-gallery-admin/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/meccado/photo-gallery-admin.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/meccado/photo-gallery-admin.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/meccado/photo-gallery-admin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/meccado/photo-gallery-admin
[link-travis]: https://travis-ci.org/meccado/photo-gallery-admin
[link-scrutinizer]: https://scrutinizer-ci.com/g/meccado/photo-gallery-admin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/meccado/photo-gallery-admin
[link-downloads]: https://packagist.org/packages/meccado/photo-gallery-admin
[link-author]: https://github.com/meccado
[link-contributors]: ../../contributors
