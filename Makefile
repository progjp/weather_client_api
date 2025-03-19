start:
	docker compose up -d
stop:
	docker compose down
sh:
	docker compose exec -it weatherapi-app bash
test:
	docker compose exec -it weatherapi-app bin/phpunit
init:
	make start
	docker compose exec -it weatherapi-app composer install
remove-all-data:
	docker compose down -v
