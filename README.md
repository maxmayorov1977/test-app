Клонируем файлы проекта
В корневой папке проекта выполнить команду: composer install
Копировать .env.example в .env
Создать бд, внести данные для подключения в файл .env
Выполнить php artisan key:generate
Выполнить php artisan migrate
Выполнить php artisan db:seed
