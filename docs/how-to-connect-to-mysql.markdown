How to connect to MySQL
-------

This is a guide on how connect to **MySQL** on basic installation of this project.

*If You customized Your installation, than some commands, directories and files names may be different, so be sure to change it for Your needs.*

#### 1. Make sure all needed containers are started

At command line, make sure You are in the installation directory, run command:

```shell script
docker-compose start
```

#### 2. Check for MySQL user password

At [`.env`](env.markdown) file You have `MYSQL_ROOT_PASSWORD` variables which corresponds to root user password. You should use it for **MySQL** connection.

#### 4. Add MySQL connection to Your PHP files

After getting root user password, now You can make **MySQL** connection:

```php
// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database user name
$user = 'root';

// Database user password
$pass = 'root user password';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
```

For example:

```php
// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'root';

//database user password
$pass = 'secretrootpassword';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
```

### Some useful links

- [FAQ](faq.markdown)
- [How to add HTTP website](how-to-add-website.markdown)
- [How to add HTTPS/SSL website](how-to-add-ssl-website.markdown)
- [How to connect to MySQL](how-to-connect-to-mysql.markdown)