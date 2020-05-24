## About Todolist Package

Todolist package will allows you to create,read,update and delete lists.

## Installing pacakge
Through composer :- composer require gunaraj/todolist

## After Installing Provide App ServiceProvider in Config/App.php
This Way :- Gunaraj\Todolist\TodolistServiceProvider::class

## Publish Vendor 
php artisan publish:vendor && enter corresponding number of TodolistServiceProvider for publish & you will get views of todolist inside views/vendor/todolist

## And Run php artisan:migrate 
It creates todolist table in your database 

## Finally Check the package 
By going url :- Base URL{http://127.0.0.1:8000}/todolist

# And you are good to go further 

##Thanks 