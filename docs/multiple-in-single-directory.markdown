Multiple installations in single directory guide
-------

In this guide we will install multiple 'sets' of this project in single directory.
This type of installation is needed for development purposes only.
We will not describe basic things in it, if You are not sure - You should try [quick installation](quick-installation.markdown) first.

- Why? - because we can
- Why? - because it's not recomended, but we want to
- Why? - because we need multiple **PHP** versions, and we want it in a single directory
- Can we run multiple **PHP** versions at the same time if we do it like this? - by default no, but if You change **ports** for **PHP**, **MySQL** and **phpMyAdmin**, so they will be different for different **PHP** versions containers 'sets' - yes
- How to run different **PHP** versions? - Stop containers for one **PHP** version before starting for another
- Is there a better solution? - Yes, **Nginx + (Apache + PHP + MySQL + phpMyAdmin) \* (number of PHP versions You want)**
- And again why to do it? - You are asking to many questions

Still, it's recomended to have multiple installations for each **PHP** version.

#### 1. Clone this project repository

Open command line and navigate to the directory You want it to be installed and run:

```shell script
git clone https://github.com/
```

#### 2. Choose Your PHP versions

There are a few pre-built **PHP** configurations at `build/php-apache` directory.
We will be doing it for **PHP 5.6** and **PHP 8.2**.
We will install it for **PHP 5.6** first.

#### 3. Copy .env file to the root directory

You should copy `build/php-apache/5.6/.env` to the **root directory** of this installation and rename it to `.env-5.6`.

Details about `.env` file can be found [here](env.markdown).

For `.env-5.6`, You should change:

```
# Docker container pref
DOCKER_PREF=5.6

### Apache (httpd) settings
SITES_ENABLED_PATH=./apache/sites-enabled/5.6
APACHE_LOG_PATH=./log/5.6

### PHP settings
PHP_INI_PATH=./php/5.6/php.ini

### Xdebug settings
XDEBUG_INI_PATH=./php/5.6/xdebug.ini
XDEBUG_ERROR_REPORTING_PATH=./php/5.6/error_reporting.ini

### MySQL settings
MYSQL_DATA_DIR=./mysql/data/5.6
MYSQL_LOG_DIR=./mysql/log/5.6
```

These changes are done to separate different **PHP** versions installations:

- `DOCKER_PREF` - is used to make containers names unique
- others are path changes to separate different installations files

Also You may want to change these variables in it:

```
# Time Zone
WORKSPACE_TIMEZONE=Europe/Kiev

# MYSQL user settings
MYSQL_ROOT_PASSWORD=secretrootpassword
```

- `WORKSPACE_TIMEZONE` - is the timezone that will be set
- `MYSQL user settings` will be needed to [connect to MySQL](how-to-connect-to-mysql.markdown).

#### 4. Copy php config files to php directory

Different **PHP** versions may have different configs, so You should copy config files for Your **PHP** version.

Copy `build/php-apache/5.6/php` to `php/5.6` directory.

#### 5. Create Docker containers and run it

Make sure **Docker** engine is started.

At command line, make sure You are in this installation directory, run:

```shell script
docker-compose --env-file .env-5.6 build && docker-compose --env-file .env-5.6 up -d
```

Every time You want to start containers of this installation You should open command line, navigate to this installation directory and run:

```shell script
docker-compose --env-file .env-5.6 start
```

To stop containers You should open command line, navigate to this installation directory and run:

```shell script
docker-compose --env-file .env-5.6 stop
```

#### 6. Stop Docker containers for PHP 5.6

You can't run both **PHP** versions at the same time, so You should stop **PHP 5.6** before adding another **PHP** version.

```shell script
docker-compose --env-file .env-5.6 stop
```

#### 7. Repeat steps 3-5 for PHP 8.2

Copy `build/php-apache/8.2/.env` to the root directory of this installation and rename it to `.env-8.2`.

Change in `.env-8.2` file:

```
# Docker container pref
DOCKER_PREF=8.2

### Apache (httpd) settings
SITES_ENABLED_PATH=./apache/sites-enabled/8.2
APACHE_LOG_PATH=./log/8.2

### PHP settings
PHP_INI_PATH=./php/8.2/php.ini

### Xdebug settings
XDEBUG_INI_PATH=./php/8.2/xdebug.ini
XDEBUG_ERROR_REPORTING_PATH=./php/8.2/error_reporting.ini

### MySQL settings
MYSQL_DATA_DIR=./mysql/data/8.2
MYSQL_LOG_DIR=./mysql/log/8.2
```

Don't forget to change these variables in it, if needed:

```
# Time Zone
WORKSPACE_TIMEZONE=Europe/Kiev

# MYSQL user settings
MYSQL_ROOT_PASSWORD=secretrootpassword
```

Copy `build/php-apache/8.2/php` to `php/8.2`.

At command line, make sure You are in this installation directory, run:

```shell script
docker-compose --env-file .env-8.2 build && docker-compose --env-file .env-8.2 up -d
```

Same as for **PHP 5.6**, so start it use:

```shell script
docker-compose --env-file .env-8.2 start
```

To stop:

```shell script
docker-compose --env-file .env-8.2 stop
```

#### Done

If You followed this guide you should have 2 sets of containers **56-php-apache** and **82-php-apache**.

The pros are:

- single directory for multiple **PHP** versions
- single `projects` directory for all project, for all **PHP** versions
- single `apache/sites-available` directory
- single `mysql/dump` directory
- single `ssl/keys` directory
- same **ports** for the services in all versions
- don't need to write **ports** for websites at browser, that is a challenge for some CMS

Cons are:

- multiple **PHP** versions can't be running at the same time
- complicated structure
- complicated project start/stop from command line, at [Docker Desktop](https://www.docker.com/products/docker-desktop/) it's bearable.
- \<write Your here\>

You can access currently running **phpMyAdmin** by [http://localhost:8051/](http://localhost:8051/).

### Some useful links

- [FAQ](faq.markdown)
- [How to add HTTP website](how-to-add-website.markdown)
- [How to add HTTPS/SSL website](how-to-add-ssl-website.markdown)
- [How to connect to MySQL](how-to-connect-to-mysql.markdown)