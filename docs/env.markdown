`.env` file
-------

#### Why `.env` file

`.env` file is used to simplify developer life.

Here You can:

- set docker project variables without having to look for it in `docker-compose.yml`
- set some variables so You shouldn't write it every time in command line

#### Variables (TODO)

Here is the list and description of used in `.env` file variables, but You can also check the generic variables used by Docker [here](https://docs.docker.com/compose/reference/envvars/)

| Variable | Default value | Description |
| --- | --- | --- |
| **DOCKER_PREF** | multiple | Defines preffix for Docker project and containers |
| **COMPOSE_PROJECT_NAME** | ${DOCKER_PREF}-php-apache | Defines Docker project name |
| **COMPOSE_PROFILES** | all | Specifies one or more profiles to be used for project. [Here is the list of all profiles](profiles.markdown) |
