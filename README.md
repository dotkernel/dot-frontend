# dot-frontend

Dotkernel web starter package suitable for frontend applications.

## Requirements
* dot-frontend needs PHP >= 7.1
* In order to use the default setup and import the database files, you need MySQL

## Installation

Create a new project directory and change dir to it. Run the following composer command
```bash
$ composer create-project dotkernel/dot-frontend .
```

The setup script will prompt for some custom settings.

```shell
Please select which config file you wish to inject 'Zend\Session\ConfigProvider' into:
  [0] Do not inject
  [1] config/config.php
  Make your selection (default is 0):
```

For this option select `[0] Do not inject` because DotKernel3 already has an injected config provider which already contains the prompted configurations.

`Remember this option for other packages of the same type? (y/N)`
`y`
The `ConfigProvider`'s can be left un-injected as the requested configurations are already loaded.

## Configuration

* import the database schema, if you are using mysql, it can be found in `data/dot-frontend.sql`
* In `config/autoload` rename `local.php.dist` to `local.php` and `development.local.php.dist` to `development.local.php`
* edit `local.php` according to your dev machine. Fill in the `database` configuration and a smtp credentials if you want your application to send mails on registration etc.
* get a recaptcha key pair and configure the `local.php` with them
* if you use the create-project command, after installing, the project will go into development mode automatically
* you can also toggle development mode by using the composer commands
```bash
$ composer development-enable
$ composer development-disable
```
This will enable dev mode by turning the debug flag to true and turning configuration caching off. It will also make sure that any previous config cache is cleared.

**Do not enable dev mode in production**

* Next, run the following command in your project's directory
```bash
$ php -S 0.0.0.0:8080 -t public
```
* visit `http://localhost:8080` in your browser

**NOTE:**
If you are still getting exceptions or errors regarding some missing services, try running the following command
```bash
$ composer clear-config-cache
```

**NOTE**
If you get errors when running composer commands like development-enable or clear-config-cache related to parsing errors and strict types
it is probably because you don't have the PHP CLI version > 7.1 installed

If you cannot use these commands(for example if you cannot upgrade PHP globally) you can setup/clean the project by hand as described below or if you have a locally installed PHP 7.1 version installed you can use that
* enable development mode by renaming the files `config/development.config.php.dist` and `config/autoload/development.local.php.dist` to removed the `.dist` extension
* disable dev mode by reverting the above procedure
* run `bin/clear-config-cache.php` using the proper PHP version if accessible OR
* manually clear cached data from `data/cache` directory and optionally `data/proxies`

