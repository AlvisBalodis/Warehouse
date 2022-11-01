# Warehouse

**Warehouse** is simple CRUD web app based on [Laravel](https://laravel.com/).

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

![](../../../Desktop/Warehouse_1.png)

![](../../../Desktop/Warehouse_2.png)

![](../../../Desktop/Warehouse_3.png)

![](../../../Desktop/Warehouse_4.png)

![](../../../Desktop/Warehouse_5.png)

![](../../../Desktop/Warehouse_6.png)



