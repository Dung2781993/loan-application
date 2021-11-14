# Loan Application

## Description
This is a demo of Loan repayment system built with Laravel framework. 
The APIs will allows to handle user loans. 
The following features/functions will be includes.

## Users

### Use case 1:
User can register via API to make loan or payment

### Use case 2:
User can login via API

### Use case 3:
User can request a loan via API
 

### Use case 3:
User can view his/her loans via API

### Use case 4:
User can accept the loan via API


### Use case 5:
User can make payment via API

## Admin

### Use case 1:
Admin can register

### Use case 2:
Admin can login via API

### Use case 3:
Admin can offer loans to users via API

### Use case 4:
Admin can view loan details via API

### Use case 5:
Admin can view overdued loans

## Database schema

![enity tables](https://user-images.githubusercontent.com/10462068/141443188-bfcff395-9619-48ae-87e2-99ead0468b72.PNG)

## Entity Diagram

![image](https://user-images.githubusercontent.com/10462068/141445227-815d49f3-ea51-40c8-a0e6-e21a46b4721c.png)

## Setup Env

- Update Env file with database name 

![image](https://user-images.githubusercontent.com/10462068/141446626-f03bcfa0-db20-42b4-a929-42f814d82f50.png)


## Installation process

- Step 1: Clone the application via github
- Step 2: Setup localhost. In this case, we use Wamp or xampp (https://www.wampserver.com/en/) - (https://www.apachefriends.org/index.html)
- Step 3: Install laravel and composer (https://laravel.com/docs/8.x/installation)
- Step 4: Create database like env file 
- Step 5: Running: composer install and setup config/database.php
- Step 6: Running: php artisan migrate to create database schema
- Step 7: Running: composer require laravel/passport
- Step 8: Setting up OAuth2  by running: php artisan passport:client --personal  
- Step 9: Try api on postman accoding to endpoint in api.php file (

![image](https://user-images.githubusercontent.com/10462068/141688871-8837177e-cceb-43c5-88ec-db74db409794.png)




