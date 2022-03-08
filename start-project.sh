#!/bin/bash

cp env.ejemplo .env

docker-compose down

composer create-project laravel/laravel src

cd src

npm install -g typescript

composer require inertiajs/inertia-laravel

composer require laravel/jetstream

composer require spatie/laravel-permission


php artisan jetstream:install inertia --teams

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

npm install && npm run dev

sed -i.bu 's/DB_HOST=127.0.0.1/DB_HOST=db/' .env
sed -i.bu 's/DB_DATABASE=laravel/DB_DATABASE=dsbbdd2021/' .env
sed -i.bu 's/DB_USERNAME=root/DB_USERNAME=dsUser2021/' .env
sed -i.bu 's/DB_PASSWORD=/DB_PASSWORD=ds2021/' .env

cd ..

chmod -R 777 src/

docker-compose up -d

timeout 2000

docker-compose exec app php /var/www/html/artisan migrate

