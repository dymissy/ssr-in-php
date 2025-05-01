.PHONY: up down laravel symfony backend start-laravel

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

backend:
	docker compose exec backend bash
