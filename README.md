<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Project

Una vez clonado el repositorio debemos:

1. Instalar dependencias

`composer install`

`npm install`

2. Crear una base de datos en PostgresSQL llamada health_blog

3. Crear el archivo .env con los datos de la base de datos y el nombre del proyecto(Health-Blog)

DB_CONNECTION=pgsql

DB_HOST=127.0.0.1

DB_PORT=5432

DB_DATABASE=health_blog

DB_USERNAME=postgres

DB_PASSWORD=

4. Generar una clave

Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:

`php artisan key:generate`


5. Ejecutar migraciones

`php artisan migrate`


6. Llenar algunos valores por defecto en la base de datos

`php artisan db:seed --class=UserSeeder`

`php artisan db:seed --class=PostSeeder`


- **[Documentación](https://resisted-rainforest-8d9.notion.site/Health-blog-2213715f257f4c238f8c5434542d476b)**
