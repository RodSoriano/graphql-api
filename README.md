## First Things First

This is a project for climbing including all its different disciplines, it allows you to show different places where you can go, and have on hand all its relevant information.  

The project holds three main models:
- Crags
- Areas
- Routes  

You can query each one of those models bringing whole collections or specified models by id or in the case of the route model it comes with a couple more filters.  

Every one of them can be commented by a guest user that can be approved manually afterwards.  

The comment feature also has a filter integration so no profanity can be sent to the API.  

It also includes a playground for you to test your queries or mutations on.
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
$ composer update
````

Create a database of your choice and then match that information with the environment variables in charge of the database connection.  

Then set up the env. file copying the content of the <strong>env.example</strong> file.  

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
