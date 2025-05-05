.PHONY: up down laravel symfony backend start-laravel start-symfony tests

up:
	docker compose up

down:
	docker compose down

laravel:
	docker compose exec laravel.test bash

start-laravel:
	docker compose exec laravel.test npm run dev

symfony:
	docker compose exec symfony bash

start-symfony:
	docker compose exec symfony php bin/console tailwind:build --watch

backend:
	docker compose exec backend bash

tests:
	docker compose exec laravel.test php ./vendor/bin/phpunit