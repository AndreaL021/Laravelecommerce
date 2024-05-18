Open Terminal

git clone https://github.com/AndreaL021/Laravelecommerce.git

cd Laravelecommerce

cp .env.example .env

code .

// .env

Set .env file   DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE= dbname (the database must already be created)
                DB_USERNAME= yourusername
                DB_PASSWORD= yourpassword

//terminal

composer i

php artisan key:generate

php artisan migrate --seed

php artisan storage:link

php artisan serve

open browser to http://127.0.0.1:8000/