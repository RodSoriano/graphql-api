## First Things First

This is a project for outdoor climbing, includes all its different disciplines, it shows different places where you can go and have on hand, all its relevant information about each place.  

The project holds three main models:
- Crags
- Areas
- Routes  

You can query each one of those models bringing whole collections or filter them by id. In the case of the "Route" model it comes with a couple more searching options, you can filter routes by:

- Type
- Grade
- Quick draws

Every one of them can be commented by a guest user these comments by default have the attribute "is_visible" off so the admin of the app can check them manually before showing it to the end user.  

The comment feature also has a filter integration so no profanity can be sent to the API.

The app also includes a playground for you to test your queries or mutations.
````
localhost:8000/graphql-playground
````

## How to Set Up

First you need to clone the repository to a directory of your choice.  
````
$ git clone https://github.com/RodSoriano/graphql-api.git
````

Now run the command
````
$ composer install
````

## Database

Set up the env. file copying the content of the <strong>env.example</strong> file.

Create a database of your choice and then match that information with the "environment variables" in charge of the database connection, the database variables are the following.
````
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT= your.db.port
DB_DATABASE=your_db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password
````

Now you can use the "migrate" and "seed" command to have dummy data on your database for testing or showing purposes.
````
$ php artisan migrate
$ php artisan db:seed
````

If you find any problems or bugs please feel free to send me your feedback, it will be highly appreciate it.  

## Powered By

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
