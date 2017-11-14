# Next5 

Simple app that provides a list of the Next 5 races/events.
JQuery with ajax implementation and server time has been used.


## Installation
This is a Laravel app, download the repo to your server and run `composer update`
Ensure that the server has php 7, NGINX, MySQL, Composer etc. Or just use Laravel/Homestead and point the server to the public directory.


### ENV File

You will need to setup your ENV file. Most importantly the db settings within the ENV file.;

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=next5db
    DB_USERNAME=root
    DB_PASSWORD=secret


Once the app is installed, run the following to setup the database tables.

```
php artisan migrate

```

## DB Schema
The file name `/database-model.mwb` is a MySQL Workbench file. Shows the design of the database.




## Test Data

* Race 22 only has 3 competitors to show that a message is displayed that the race is cancelled.
* Seed data is available by running the following;

```

php artisan db:seed

```

Data should be randomized each time you seed.
Just run `fresh`.


```

php artisan migrate:fresh

then

php artisan db:seed

```



## Tested on Platform

* Laravel 5.5
* php >= 7.0-7.1
* MySQL 5
* NGINX/1.11.9


## Frameworks
* Laravel 5.5
* Jquery
* Bootstrap


## Routes/Endpoints

```
+----------------+-------------------------------------------------------
| /              |  List of the next 5 races
+------------------------------------------------------------------------
| /Race/{x}      |  List all competitors and their position for a race.
+------------------------------------------------------------------------
| /api/timer     |  Gets the server time
+------------------------------------------------------------------------
| /api/nextFive  |  Gets the next5 via ajax
+------------------------------------------------------------------------


```


## UI
The UI is minimalistic. The header is a link to the home/index page.
There are no checks for 404 page requests.


## Index View Page
Lists the next 5 races. 

## Race View Page
The Race page shows details of the event as well as a list of the competitors and their position 
on the start line shown in brackets;  `Competitor X (3)`, where 3 is their starting position.

The RaceView page will be blocked or hidden once the server-time lapses the race start-time.


## DEV NOTES

#### TODO another time

* Javascript `http.redirect` for Race/View
* Rewrite and Refactor some js
* Add some extra php validation for rules 
* Rewrite the test data


##### Monday

01. ~~Database Design~~
02. ~~Framework and Util~~
03. ~~Database Code~~
04. ~~Database Seeding~~
05. ~~Models~~
06. ~~Routes~~
07. ~~Controllers~~

##### Tuesday

08. ~~Finalize Page Structure~~
09. ~~JQuery code~~
