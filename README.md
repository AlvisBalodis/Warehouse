# Warehouse

**Warehouse** is a simple CRUD RESTful web app based on [Laravel](https://laravel.com/).

Application have products warehouse (name, type, price, some basic info).
You can open organization profile and register successfully sold product (registered action have date when service was
provided, type, address, details and price).
You can open product profile, and see – when, and to what customers it was sold,
and open customer profile to see when and what product was sold.
There are Products/Customers summary pages.

### Installation

- Clone and open project in your preferred IDE.
- Then create the necessary database.

```php
php artisan db
```

```php
create database products
```

- And run the initial migrations and seeders.

```php
php artisan migrate --seed
```

- Run this command in project root folder. It will start localhost server.

```php
php artisan serve
```

- Open Chrome (The best UX) web browser, type and enter in address bar.

```php
localhost:8000
```

### Screenshots

<img width="750" alt="Warehouse_1" src="https://user-images.githubusercontent.com/53913245/199246358-1903c59e-683e-481f-a27f-b20050f00c00.png">

<img width="750" alt="Warehouse_2" src="https://user-images.githubusercontent.com/53913245/199246422-54dbf6d6-e880-467a-871f-7edbde5fe1f9.png">

<img width="750" alt="Warehouse_3" src="https://user-images.githubusercontent.com/53913245/199246440-a3d08655-e062-4be7-b289-5ac7d0996a35.png">

<img width="750" alt="Warehouse_4" src="https://user-images.githubusercontent.com/53913245/199246462-ec91bc48-8819-48fd-9e4c-7568b481760f.png">

<img width="750" alt="Warehouse_5" src="https://user-images.githubusercontent.com/53913245/199246481-1383a231-1195-4954-80fb-e3cba1025677.png">

<img width="750" alt="Warehouse_6" src="https://user-images.githubusercontent.com/53913245/199246496-3a1be42d-bd07-4384-bfd4-4de82dec55b6.png">
