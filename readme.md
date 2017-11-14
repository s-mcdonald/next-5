# Next5 

Simple app that provides a list of the Next 5 races/events.
JQuery and ajax implementation with server time checkbacks.



# Details

* Race 22 only has 3 competitors
* Seed data is available by running the following;

```
php artisan migrate

then

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


## Routes

```
+----------------+-------------------------------------------------------
| /              |  List of the next 5 races
+------------------------------------------------------------------------
| /Race/{x}      |  List all competitors and their position for a race.
+------------------------------------------------------------------------
| /api/timer     |  Gets the server time
+------------------------------------------------------------------------

```

## DEV NOTES

### TODO

* Javascript http.redirect for Race/View
* Rewrite and Refactor some js
* Add some php validation for rules 
* Double check the api
* Add more test data
* Expand Time betweeen races for test-data

#### Monday

01. ~~Database Design~~
02. ~~Framework and Util~~
03. ~~Database Code~~
04. ~~Database Seeding~~
05. ~~Models~~
06. ~~Routes~~
07. ~~Controllers~~

#### Tuesday

08. ~Finalize Page Structure~
09. ~JQuery code~
10. Testing


#### Other Notes

`races.id` to increment or use natural key ?

Should I emulate the races and insert ransom finish positions ?
