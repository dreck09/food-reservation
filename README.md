# Food Reservation
# Getting Started

## Installation

* First clone the repo

```bash
git clone https://github.com/dreck09/food-reservation.git
```

* Change your working directory

```bash
cd food-reservation
```

* Install the laravel dependencies through composer

```bash
composer install
```

* copy the environment file and change the values according to your development environment

```bash
cp .env.example .env
```

* generate laravel key

```bash
php artisan key:generate
```

* migrate and seed the database

> Note! make it sure that you have already created a database before doing this and assign it to your .env file

```bash
php artisan migrate --seed
```
