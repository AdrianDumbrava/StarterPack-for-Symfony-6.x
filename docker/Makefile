sh:
	docker-compose exec php ash

yarn:
	docker-compose exec php yarn install --force
	docker-compose exec php yarn encore dev

doctrine:
	docker-compose exec php ./bin/console d:d:d --force
	docker-compose exec php ./bin/console d:d:c
	docker-compose exec php ./bin/console d:m:m --no-interaction
	#docker-compose exec php ./bin/console d:f:l