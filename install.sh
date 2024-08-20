cp .env.example .env &&\
docker-compose up -d &&\
docker-compose exec app bash &&\
composer install &&\
php artisan key:generate