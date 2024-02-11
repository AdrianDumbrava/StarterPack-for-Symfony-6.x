# StarterPack for Symfony 6.4

## Overview

The goal of this starter pack is to help you build a Symfony 6.4 LTS web application from scratch efficiently.

## Running the project locally

* Clone the project
* Access **`docker`** directory
* Set the Docker environment variables by creating an `.env` file.
  * You can start by copying the template file `.env.dist` to `.env`
* Then, just type `docker-compose up -d` to start the stack
* Add the project hostnames to the local hosts file
* Once all the containers has been started and dependencies has been installed, you can start using the stack. The application should be available at `http://${APP_HOSTNAME} (eg: http://project-name.local)`.
    * You can access the application logs in real time using the following command: `docker-compose logs -f php`
* To stop the project containers, just type `docker-compose down`

### Connecting to MySQL

Connecting to MySQL is pretty straightforward:

* Point your MySQL client at `localhost:${MYSQL_LOCAL_PORT}` (eg: `localhost:3306`). 
* Use the value of `${MYSQL_USER}` as the username and the value of the `${MYSQL_ROOT_PASSWORD}` as the password. 
* If you're looking for an elegant client to use, give [HeidiSQL](https://www.heidisql.com/) a try.

### Running tests
* If you want to run specific test, use `vendor/bin/phpunit tests/FooTest.php --filter=testMethodName` command in PHP container:
* Use `vendor/bin/rector process --dry-run` to see what changes Rector recommends


### Local environment

* Symfony application container available at `http://${APP_HOSTNAME}` (eg: `http://myproject.local`)
* [Redis Commander](https://github.com/joeferner/redis-commander) (Redis web explorer)
    * Available at `http://redis.${APP_HOSTNAME}` (eg: `http://redis.myproject.local`)
    * Use `docker exec -it redis redis-cli` to connect to the Redis CLI