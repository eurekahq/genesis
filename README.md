# Genesis - Slim Framework Starting Point

This is a (very opinionated) starting point for a Slim Framework 4 application that bundles together a few useful packages. Use this skeleton application to quickly setup and start working on a new Slim Framework 4 application. This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation. It also uses the Monolog logger.

This application was itself built atop [slimphp/slim-skeleton](https://github.com/slim/slim-skeleton).

## Get Started

Have a copy of this project up and running in seconds.

### Pre-requisites

1. Git
2. PHP 7.2+
3. [Composer](https://getcomposer.org)

### Installation

Clone this project onto your machine.

```bash
git clone https://github.com/sixpeteunder/genesis.git [my-app-name]
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

To run the application in development, you can run any of these commands from the project root:

```bash
php -S localhost:8080 -t public
```

Or you can use the predefined Composer script to do the the same thing:
```bash
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:
```bash
docker-compose up -d
```
After that, open `http://localhost:8080` in your browser.

Run this command in the application directory to run the test suite

```bash
composer test
```

That's it! Now go build something cool.

### Configuration

The database setup lives inside `app/database.php` and is the exact same setup used for a Laravel application.

Phinx maintains its own configuration setup (including database setup) in the `phinx.yml` file.

The rest of the project settings and configuration follow the exact same structure that would be found in a Slim Skeleton application.

## Documentation

This project contains very little original code, and is more of a "collection" of packages for the sake of convenience.
Consequently, documentation can be obtained and applied directly from the parent projects' websites.

* Structure* - [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton/blob/master/README.md)
* PSR-7 Implementation - [Slim PSR-7](https://github.com/slimphp/Slim-Psr7/blob/master/README.md)
* Logger - [Monolog](https://seldaek.github.io/monolog/)
* ORM/Database Layer - [Eloquent ORM](https://laravel.com/docs/7.x/eloquent)
* Database Migrations(Tooling/Setup) - [Phinx](https://phinx.org)
* Database Migrations(Synatax) - [Laravel Schema](https://laravel.com/docs/7.x/migrations)
* Dependency Injection - [PHP-DI](https://php-di.org/)
* Dependency Management - [Composer](https://www.getcomposer.org)

\* The structure differs slightly from the default Slim Skeleton structure with the addition of the `src/Models` directory, which houses Eloquent models. These may be used either directly or via the existing Dependency Injection implementation. Comments exist throughout the project that detail how to go about either approach. Another addition is that of the `db/migrations` directory, where migrations live.

## Components

These are the main packages bundled into this project:

* [Slim Framework 4](https://slimframework.com) - Framework 
* [Slim Skeleton](https://github.com/slimphp/Slim-Skeleton/blob/master/README.md) - MVC "skeleton"
* [Slim PSR-7](https://github.com/slimphp/Slim-Psr7/blob/master/README.md) - PSR-7 Implementation
* [Monolog](https://seldaek.github.io/monolog/) - Logger
* [Eloquent ORM](https://laravel.com/docs/7.x/eloquent) - Object Relational Mapping
* [Phinx](https://phinx.org) - Database Migrations
* [PHP-DI](https://php-di.org/) - Dependecy Injection Container Implementation
* [Composer](https://www.getcomposer.org) - Dependency Management

## Known Issues

* When using the `--dry-run` argument on the ```phinx migrate``` and ```phinx rollback``` commands, the actual migrations will run but the changes to the migrations table are simulated, leaving your database in an unstable state. This is caused by the actual migrations being run via the non-default Laravel Schema package, while changes to the migration table itself are handled by Phinx itself.

* Seeding the database with Phinx alone is supported but untested, while seeding with Eloquent is completely unsupported.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for more details.

## Versioning

I use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/sixpeteunder/genesis/tags). 

## Authors

See the list of [contributors](https://github.com/sixpeteunder/genesis/contributors).

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

This was mostly put together by merging bits of code from each of these articles:

* [Using Eloquent ORM with Slim | Cloudways Blog](https://www.cloudways.com/blog/using-eloquent-orm-with-slim/)
* [Slim 4 - Eloquent Setup | Daniel's Dev Blog](https://odan.github.io/2019/12/03/slim4-eloquent.html)
* [Building a Simple API in PHP using Slim and Eloquent | Brad Cypert](https://www.bradcypert.com/building-a-restful-api-in-php-using-slim-eloquent/)
* [How to use Eloquent ORM migrations outside Laravel | siipo.la dev blog](https://siipo.la/blog/how-to-use-eloquent-orm-migrations-outside-laravel)
* [How to Use Eloquent in Slim Framework | Arjun](https://arjunphp.com/use-eloquent-slim-framework/)
* [Phinx - the Migration Library You Never Knew You Needed | Sitepoint](https://www.sitepoint.com/phinx-the-migration-library-you-never-knew-you-needed/)
* StackOverflow questions on Dependency Injection [here](https://stackoverflow.com/questions/57238368/which-is-the-correct-way-to-use-dependency-container) and [here](https://stackoverflow.com/questions/60223152/slim-4-use-a-container-to-share-db-connection-with-models-and-controllers-witho).
* And of course a whole lot of time spent going into documentation to figure out how to make the components play nicely with each other. 
