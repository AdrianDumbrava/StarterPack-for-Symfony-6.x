.PHONY: composer yarn doctrine all

PHP_EXEC = docker-compose exec php

ash:
	$(PHP_EXEC) ash

all: composer yarn doctrine

composer:
	$(PHP_EXEC) composer install --no-interaction

yarn: composer
	$(PHP_EXEC) yarn install
	$(PHP_EXEC) yarn encore dev

doctrine: yarn
	$(PHP_EXEC) bin/console d:d:c --if-not-exists
	$(PHP_EXEC) bin/console d:m:m --no-interaction
