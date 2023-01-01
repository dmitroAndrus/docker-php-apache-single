FAQ
-------

#### I got error "Hardware assisted virtualization and data execution protection must be enabled in the BIOS" {#error-virtualization}

- Check [Your BIOS settings](https://www.youtube.com/results?search_query=How+to+enable+virtualization+in+bios), maybe virtualization is disabled in it.
- If it still throws this error - [here is the link with some solutions for Windows](https://stackoverflow.com/questions/39684974/docker-for-windows-error-hardware-assisted-virtualization-and-data-execution-p). 

#### How to reload Apache {#how-to-reload-apache}

At command line, make sure You are in the installation directory, run command with such pattern:

```shell script
docker exec -it <php-apache container name> /etc/init.d/apache2 reload
```

For example:

```shell script
docker exec -it single-php-apache /etc/init.d/apache2 reload
```

#### How to reload PHP, i.e. refresh `php.ini` {#how-to-reload-php}

You should [reload Apache](#how-to-reload-apache).

#### How to add new website {#how-to-add-website}

Follow [this guide](how-to-add-website.markdown).

#### How to add new HTTPS/SSL website {#how-to-add-ssl-website}

Follow [this guide](how-to-add-ssl-website.markdown).

#### I've copied my new project, but my website is not available in browser

Make sure You followed all steps in [this guide](how-to-add-website.markdown).

#### I've made changes to `php.ini`, or other `.ini` files in `php` folder, but there are no changes {#tip-php-ini}

Make sure to [reload Apache](#how-to-reload-apache).

#### I've got "Fatal error: Call to undefined function xdebug_info()"

- Make sure You've enabled Xdebug during installation.
- `xdebug_info()` is available only for **Xdebug v.3**, if You are doing it on **PHP 5.6** you have **Xdebug v.2.5.5**, so `xdebug_info()` is not available, but the **Xdebug** itself should still work.

#### I've got "Connection failed: php_network_getaddresses: getaddrinfo failed: Temporary failure in name resolution" or "Fatal error: Uncaught mysqli_sql_exception: php_network_getaddresses: getaddrinfo for XXX failed: Temporary failure in name resolution ..."

You've set wrong **host** for MySQL connection in Your PHP file.
Please check [this guide](how-to-connect-to-mysql.markdown).

#### I've got "Connection failed: Access denied for user ..." or "Fatal error: Uncaught mysqli_sql_exception: Access denied for user ..."

You've set wrong **user**/**password** combination for **MySQL** connection in Your **PHP** file.
Please check [this guide](how-to-connect-to-mysql.markdown).