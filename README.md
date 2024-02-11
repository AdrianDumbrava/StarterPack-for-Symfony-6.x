# StarterPack for Symfony 6.4

## Overview

The goal of this starter pack is to help you build a Symfony 6.4 LTS web application from scratch efficiently.

## Services

It's composed by 6 containers:
* PHP 8.2 (FPM-Alpine)
* MySQL 8.0
* Nginx 1.24
* Redis 7.2
* Redis Commander
* Mailer

## Installation

* Clone the project repository
* If you are working with Docker Desktop for Mac, ensure you have enabled VirtioFS for your sharing implementation.
* Access **`docker`** directory
* Set the Docker environment variables by creating an `.env` file.
  * You can start by copying the template file `.env.dist` to `.env`
* Add the project hostname to your `/etc/hosts` file. You can find and modify the `APP_HOSTNAME` variable in the `.env` file.
* Then, just type `docker-compose up -d` to start containers.
* Open PHP container with `docker-compose exec php ash` or `make` and run `composer install` to install the dependencies.
* Once all the containers has been started and dependencies has been installed, you can start using the stack. The application should be available at `http://${APP_HOSTNAME} (eg: http://project-name.local)`.
    * You can access the application logs in real time using the following command: `docker-compose logs -f php`
* To stop the project containers, just type `docker-compose down`

### Connecting to MySQL

Connecting to MySQL is pretty straightforward:

* Point your MySQL client at `localhost:${MYSQL_PORT}` (eg: `localhost:3306`). 
* Use values from the `.env` file to connect to the database 
  * `${MYSQL_USER}` as the username
  * `${MYSQL_ROOT_PASSWORD}` as the password. 

### Running tests
* If you want to run specific test, use `vendor/bin/phpunit tests/FooTest.php --filter=testMethodName` command in PHP container:


### Local environment

* Symfony application container available at `http://${APP_HOSTNAME}` (eg: `http://myproject.local`)
* [Redis Commander](https://github.com/joeferner/redis-commander) (Redis web explorer)
    * Available at `http://redis.${APP_HOSTNAME}` (eg: `http://redis.myproject.local`)
    * Use `docker exec -it redis redis-cli` to connect to Redis CLI