##### Build With Laravel 7

##### How to use it:
- Download mongo db
- install mongodb extension for php
- create database
- Clone this repository
- open cmd, go to directory of repository and type composer install
- create .env by copy .env.example and add to .env 

``````
MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=mileapptest
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=
``````
- open cmd, go to directory of repository and type php artisan migrate and type php artisan serve

- api can access in
````````
Get
127.0.0.1:8000/api/package/

GET 
127.0.0.1:8000/api/package/{id}
POST 
127.0.0.1:8000/api/package 
PUT 
127.0.0.1:8000/api/package/{id}
PATCH
127.0.0.1:8000/api/package/{id}
DELETE
127.0.0.1:8000/api/package/{id}
````````
- postman 
https://documenter.getpostman.com/view/276896/TVReeqs9

- for test type phpunit in console

different put and patch
put digunakan untuk mengubah semua field kecuali id
pacth digunakan untuk mengubah sebagian field 
