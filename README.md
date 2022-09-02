Para arrancar el serivdor ejecutar:

php artisan serve

-----------------------

La siembra de bases de datos es el proceso de llenar nuestra base de datos con datos ficticios

php artisan make:seeder EditorialTableSeeder
php artisan make:seeder LibrosTableSeeder


-------------------------


Envia los datos ramdon que se le solicitaron

php artisan db:seed --class=EditorialTableSeeder
php artisan db:seed --class=LibrosTableSeeder



Para inicar la BD cambiar el .env
