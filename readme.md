## SecondExchange
For: assignment of Software Engineering course given by Yinghua Ma, Shanghai Jiaotong University
Description: the website is designed as an O2O-like website.
Contributors: on the member list


## Simple Development or Installation
Generally using laravel framework. Please do as the follow steps, or check for the official document of laravel 5.1.

###Database setting
First create your database.
```Bash
cp .env.example .env
vim .env
``` 
Find the items that you need to edit(basicly database, username, password)

###Local Package Management
```Bash
composer install
php artisan migrate
php artisan db:seed
php artisan key:generate
```