Single Docker Apache + PHP + MySQL + phpMyAdmin
-------

Simple [Docker](https://www.docker.com/) project that will allow You to start Your sites/projects on PHP Apache in a few minutes.

#### Requirements

- [GIT](https://git-scm.com/)
- [Docker engine](https://www.docker.com/) > v.19.x
- [Docker compose](https://docs.docker.com/compose/install/) v.2

#### Available PHP versions

You can customize it for many **PHP versions**.
This project contains next combinations pre-configured:

- **Apache + PHP 5.6 + MySQL 5.6 + phpMyAdmin 5.2.0**
- **Apache + PHP 8.2 + MySQL 8.0 + phpMyAdmin 5.2.0**

#### When to use it and what it has

- Multiple websites/projects
- Single **PHP** version
- Single **MySQL** version
- **phpMyAdmin**
- **xDebug**
- **PHP/MySQL** version, etc. configurable at [`.env`](docs/env.markdown) file
- All major directories and files are already mounted

## Structure

Default file structure. Most of it can be changed in [`.env`](docs/env.markdown) file.

| Directory/File | Description |
| --- | --- |
| `apache` | **Apache** related stuff. |
| `apache/sites-available` | Available sites configurations. |
| `apache/sites-enabled` | Enabled sites configurations. |
| `build` | Available **Dockerfile** files and project builds. |
| `build/php-apache` | Configurations to build project for different **PHP versions**. |
| `docs` | Documentation. |
| `log` | Apache logs. |
| `mysql` | **MySQL** related stuff. |
| `mysql/data` | Stores all **MySQL** data, databases, etc. |
| `mysql/dump` | Folder fot databases dumps. |
| `mysql/log` | **MySQL** logs. |
| `php` | PHP config `.ini` files, including `php.ini`. |
| `projects` | Folder for Your websites/projects. |
| `.env-example` | Example of [`.env`](docs/env.markdown) file with environment variables to setup this project. |
| `docker-compose.yml` | [Docker Compose](https://docs.docker.com/compose/) file. |

## Installation guides

- [Quick installation guide](docs/quick-installation.markdown)
- [Installation guide](docs/installation.markdown)
- [Multiple installations in single directory guide](docs/multiple-in-single-directory.markdown)

#### Some useful links

- [FAQ](docs/faq.markdown)
- [How to add HTTP website](docs/how-to-add-website.markdown)
- [How to add HTTPS/SSL website](docs/how-to-add-ssl-website.markdown)
- [How to connect to MySQL](docs/how-to-connect-to-mysql.markdown)

## License

[MIT](LICENSE)