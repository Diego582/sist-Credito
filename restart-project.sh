#!/bin/bash

docker-compose down

chmod -R 777 src/

docker-compose up -d

timeout 2000

docker-compose exec app php /var/www/html/artisan migrate

cd src 

npm run dev
