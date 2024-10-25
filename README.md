Нужен mysql php и composer

composer install

npm install

скопировать .env.example  в .env
В .env указать DB_DATABASE, DB_USERNAME, и DB_PASSWORD DB_CONNECTION DB_HOST DB_PORT

php artisan key:generate

php artisan migrate

npm run dev

php artisan serve - это запуск встроеннго сервера(если проект находиться уже на серваке то не надо это исполнять)

если сделали запустили artisan проект должен быть доступен по адресу http://localhost:8000

в open servere надо домен сделать в настройках