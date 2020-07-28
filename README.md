# Genesis - Slim Framework Starting Point

This is a (very opinionated) starting point for a Slim Framework 4 application that bundles together a few useful packages. Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation. It also uses the Monolog logger.

This application was itself built atop [slim/slim-skeleton](https://github.com/slimphp/slim-skeleton).

## Get Started

Have a copy of this project up and running in seconds.

### Pre-requisites

1. Git
2. PHP 7.2+
3. [Composer](https://getcomposer.org)

### Installation

Clone this project onto your machine.

```bash
git clone https://github.com/eurekahq/genesis.git [my-app-name]
```

Replace `[my-app-name]` with the desired directory name for your new application. 

In a production scenario, you'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

Install dependencies:
```bash
cd [my-app-name]
composer install 
```

To run the application in development, you can either use PHP's command line tool:

```bash
php -S localhost:8000 -t public
```

Or you can use the predefined Composer script to do the the same thing:
```bash
composer app:serve
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
docker-compose up -d
```
After that, open `http://localhost:8000` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

> Some helper scripts are included in composer.json to ease development.

That's it! Now go build something cool.

### Configuration

The application looks for a .env file in the root directory. A .env.example file is available that demonstates the structure of this file.

Additional project configuration lives in the app/settings.php file.

## Documentation

This project contains very little original code, and is more of a "collection" of packages for the sake of convenience.
Consequently, documentation can be obtained and applied directly from the parent projects' websites.

* Framework - [Slim Framework 4](https://slimframework.com)
* Structure - [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton/blob/master/README.md)
* PSR-7 Implementation - [Slim PSR-7](https://github.com/slimphp/Slim-Psr7/blob/master/README.md)
* Logger - [Monolog](https://seldaek.github.io/monolog/)
* ORM - [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html)
* Dependency Injection - [PHP-DI](https://php-di.org/)
* Dependency Management - [Composer](https://www.getcomposer.org)

## Components

These are the main packages bundled into this project:

* [Slim Framework 4](https://slimframework.com) - Framework 
* [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton/blob/master/README.md) - MVC "skeleton"
* [Slim PSR-7](https://github.com/slimphp/Slim-Psr7/blob/master/README.md) - PSR-7 Implementation
* [Monolog](https://seldaek.github.io/monolog/) - Logger
* [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html) - Object Relational Mapping
* [PHP-DI](https://php-di.org/) - Dependecy Injection Container Implementation
* [Composer](https://www.getcomposer.org) - Dependency Management

## PSR Adherence

This application adheres to the following PSR Standards:

* [PSR-1 Basic Coding Standard](https://php-fig.org/psr/psr-1)
* [PSR-3 Logger Interface](https://php-fig.org/psr/psr-3)
* [PSR-4 Autoloading Standard]https://php-fig.org/psr/psr-4)
* [PSR-7 HTTP Message Interface](https://php-fig.org/psr/psr-7)
* [PSR-11 Container Interface](https://php-fig.org/psr/psr-11)
* [PSR-12 Extended Coding Style](https://php-fig.org/psr/psr-12)
* [PSR-15 HTTP Handlers](https://php-fig.org/psr/psr-15)

These PSR standards may be supported in a future release:

* [PSR-6 Caching Interface](https://php-fig.org/psr/psr-6)
* [PSR-13 Hypermedia Links](https://php-fig.org/psr/psr-13)
* [PSR-14 Event Dispatcher]https://php-fig.org/psr/psr-14)
* [PSR-16 Simple Cache](https://php-fig.org/psr/psr-16)
* [PSR-17 HTTP Factories](https://php-fig.org/psr/psr-17)
* [PSR-18 HTTP Client](https://php-fig.org/psr/psr-18)

*This section lists only accepted PSR standards.*

## Known Issues

* Doctrine migrations are planned but not implemented.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for more details.

## Versioning

I use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/sixpeteunder/genesis/tags). 

## Authors

See the list of [contributors](https://github.com/sixpeteunder/genesis/contributors).

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
