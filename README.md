# ![Laravel Dashboard App]

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/11.x/installation)

(Please make sure that your local machine has PHP and Composer installed)

Open the XAMPP Control Panel

Start Apache Server and MySQL 

Extract the project from zip file and place it inside below folder

    C:\xampp\htdocs

Switch to the project folder

    cd laravel-dashboard-app

Install all the dependencies using composer

    composer install

Generate a new application key

    php artisan key:generate


## Environment variables

- `.env` - Environment variables can be set in this file

## Database Configuration

Create a database in phpmyadmin with below name (You can find this name in .env file for key DB_DATABASE)

    laravel-dashboard-app

## Install Laravel Breeze package for Authentication

Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation.

Install Laravel Breeze using Composer

    composer require laravel/breeze --dev

After Composer has installed the Laravel Breeze package, run the below commands

    php artisan breeze:install
 
    php artisan migrate
    npm install
    npm run dev

## Start local server

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


