
## Set Up

```
make up
```

## Start services
To make services available you have to run watchers for the service you need:

```
make start-laravel
make start-symfony
```

## Available services

- Backend API → [http://localhost:8080](http://localhost:8080)
- Laravel Livewire → [http://localhost:8081](http://localhost:8081)
- Symfony UX → [http://localhost:8082](http://localhost:8082)

## Backend routes

- `GET /documents/:documentId`
- `PATCH /documents/:documentId/translations/:translationId`

