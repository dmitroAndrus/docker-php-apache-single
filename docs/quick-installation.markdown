Quick instalation guide
-------

In this guide we will install everything in a few minutes without getting deep into it.

For more detailed installation check [full installation guide](installation.markdown).

#### 1. Install and start [Docker](https://www.docker.com/), if it's not yet installed on Your machine

For this to work You should install [Docker](https://www.docker.com/).
You can get to how install and start it [here](https://www.docker.com/get-started/).<br>
It uses [Docker compose](https://docs.docker.com/compose/) [v.2](https://docs.docker.com/compose/compose-file/compose-file-v2/), and You may need to [install](https://docs.docker.com/compose/install/) it too.

Do You have some errors/questions during installation/starting/using Doker? You may find your answers [here](faq.markdown).

#### 2. Install [GIT](https://git-scm.com/), if it's not yet installed on Your machine

To get this project from GIT repository You should [install GIT](https://git-scm.com/) on Your machine.

#### 3. Clone this project repository

Open command line and navigate to the directory You want it to be installed and run:

```shell script
git clone https://github.com/
```

#### 4. Choose Your PHP version

There are a few pre-built **PHP** versions configurations at `build/php-apache` directory.
You should select one of it. We will be doing it for **PHP 8.2** that is located at **build/php-apache/8.2** directory.

#### 5. Copy .env file to the root directory

You should copy `build/php-apache/8.2/.env` to the root directory of this installation and rename it to `.env`, it file contains settings to install this project.

If You are using command line, make sure You are in this installation directory and run:

On **Mac** and **Linux**:

```shell script
cp ./build/php-apache/8.2/.env .env
```

On **Windows**:

```shell script
copy build\php-apache\8.2\.env .env
```

You can make changes to Your copied `.env` file now. Details about `.env` file can be found [here](env.markdown).
The things that You need to change in `.env` file are:

```
# Docker container pref
DOCKER_PREF=single

# Time Zone
WORKSPACE_TIMEZONE=Europe/Kiev

# MYSQL user settings
MYSQL_ROOT_PASSWORD=secretrootpassword
```

- `DOCKER_PREF` - is used to make containers names unique
- `WORKSPACE_TIMEZONE` - is the timezone that will be set
- `MYSQL user settings` will be needed to [connect to MySQL](how-to-connect-to-mysql.markdown).

#### 6. Copy php config files to the `php` directory

Different **PHP** versions may have different configs, so You should copy config files for Your **PHP** version.

We want **PHP 8.2**, so let's copy `build/php-apache/8.2/php`.

If You are using command line, make sure You are in this installation directory and run:

On **Mac** and **Linux**:

```shell script
cp ./build/php-apache/8.2/php ./php
```

On **Windows**:

```shell script
xCopy build\php-apache\8.2\php php
```

#### 6. Create Docker containers and run it

Make sure **Docker** is started.

At command line, make sure You are in this installation directory, run:

```shell script
docker-compose build && docker-compose up -d
```

Every time You want to start containers of this installation You should open command line, navigate to this installation directory and run:

```shell script
docker-compose start
```

To stop containers You should open command line, navigate to this installation directory and run:

```shell script
docker-compose stop
```

#### Done

You can access phpMyAdmin by [http://localhost:8051/](http://localhost:8051/).

Now you can add Your projects/websites:

- [How to add HTTP website](how-to-add-website.markdown)
- [How to add HTTPS/SSL website](how-to-add-ssl-website.markdown)

### Some useful links

- [FAQ](faq.markdown)
- [How to connect to MySQL](how-to-connect-to-mysql.markdown)