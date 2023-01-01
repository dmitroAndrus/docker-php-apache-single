How to add HTTP website
-------

This is a guide on how to add a **HTTP website** on basic installation of this project. If You need to create HTTPS/SSL website please read [HTTPS/SSL website guide](how-to-add-ssl-website.markdown).

*If You customized Your installation, than some commands, directories and files names may be different, so be sure to change it for Your needs.*

#### 1. Make sure all needed containers are started

At command line, make sure You are in the installation directory, run command:

```shell script
docker-compose start
```

#### 2. Copy Your website/project to `projects` directory

`projects` directory is where all Your projects should be placed.
There is an example project `my-website.test` for reference.

#### 3. Create `.conf` file for Your website

Create `<your-website.com>.conf` file for Your website at `apache/sites-available` directory.

You can take `my-website.test.conf` for reference:

```
<VirtualHost *:80>
    DocumentRoot /var/www/html/my-website.test
    ServerName my-website.test
    ServerAlias www.my-website.test

    ErrorLog ${APACHE_LOG_DIR}/my-website.test-error.log
    CustomLog ${APACHE_LOG_DIR}/my-website.test-access.log combined

    <Directory "/var/www/html/my-website.test">
        DirectoryIndex index.php
        AllowOverride All
        Order Allow,Deny
        Allow from all
    </Directory>
</VirtualHost>
```

You should:

1. copy it to Your `<your-website.com>.conf` file
4. replace `my-website.test` to `<your-website.com>`

#### 9. Add Your website `.conf` file to enabled sites

At command line, make sure You are in this installation directory, run command with such pattern:

```shell script
docker exec -it <php-apache container name> a2ensite <your-website.com>.conf
```

For example, for `my-website.test.conf` it would be:
```shell script
docker exec -it single-php-apache a2ensite my-website.test.conf
```

#### 5. Reload apache

At command line, make sure You are in this installation directory, run command with such pattern:

```shell script
docker exec -it <php-apache container name> /etc/init.d/apache2 reload
```

For example:

```shell script
docker exec -it single-php-apache /etc/init.d/apache2 reload
```

#### 6. Add Your website to `hosts` file

You need to add Your website domain/host name to the `hosts` file on Your computer.

On **Mac** and **Linux** this file is located at `/etc/hosts`.<br/>
On **Windows** - at `C:\Windows\System32\drivers\etc\hosts`.

Your websites lines in it should look like:

```
127.0.0.1 your-website.com
```

For example, lets add **my-website.test** to the `hosts` file:

```
127.0.0.1 my-website.test
```

#### Done

If You followed this guide and added **my-website.test** - You can now visit [http://my-website.test](http://my-website.test) at Your browser, that is located at `projects/my-website.test` directory.

### Some useful links

- [FAQ](faq.markdown)
- [How to add HTTP website](how-to-add-website.markdown)
- [How to add HTTPS/SSL website](how-to-add-ssl-website.markdown)
- [How to connect to MySQL](how-to-connect-to-mysql.markdown)