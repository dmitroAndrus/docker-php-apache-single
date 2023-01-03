How to create self signed certificate
-------

Self signed certificates are used only for development purposes.

##### TODO

- Add description for `.conf` file
- Add certificate to browsers

#### 1. Go to `ssl/keys` directory

Do it in both GUI and command line.

#### 2. Create `.conf` file

Create Your `<your-website.com>.conf` file for **ssl certificate**. You can copy `my-website.test.conf` and customize it.

#### 3. Create `<your-website.com>.key.pem` and `<your-website.com>.cert.pem`

Run in command line command with such pattern:

```shell script
openssl req -config <your-website.com>.conf -new -x509 -sha256 -newkey rsa:2048 -nodes -keyout <your-website.com>.key.pem -days <number of days for certificate> -out <your-website.com>.cert.pem
```

For example, for **my-website.test**, that will be valid for 365 days (max is 5 years - 1825 days), the command will be:

```shell script
openssl req -config my-website.test.conf -new -x509 -sha256 -newkey rsa:2048 -nodes -keyout my-website.test.key.pem -days 365 -out my-website.test.cert.pem
```

#### Done

Now You should have 3 new files at `ssl/keys`: `<your-website.com>.conf`, `<your-website.com>.key.pem` and `<your-website.com>.cert.pem`.

### Some useful links

- [FAQ](faq.markdown)
- [How to add HTTP website](how-to-add-website.markdown)
- [How to add HTTPS/SSL website](how-to-add-ssl-website.markdown)
- [How to connect to MySQL](how-to-connect-to-mysql.markdown)