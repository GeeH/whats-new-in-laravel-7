# My 3 Favourite Laravel 7 Features

Sample code for the blog post you can find at [https://www.twilio.com/blog/my-3-favourite-things-from-laravel-7](https://www.twilio.com/blog/my-3-favourite-things-from-laravel-7)

## Running

 - Clone this repository
 - Install dependencies using `composer install`
 - Make sure you have your database credentials and an empty database [configured](https://laravel.com/docs/5.4/database#configuration) in `database.php`
  if you're not using [Homestead](https://laravel.com/docs/7.x/homestead)
 - Run the database migrations using `php artisan migrate`
 - Serve the website using `php artisan serve`
 
All the routes are defined in `routes\web.php`

`/casts` - example of Custom Casts in Eloquent ORM

`/blade-components` - example of blade components

`/http-client-get` - example of a GET request using the new Guzzle wrapper

There is also a sample test you can find under `tests\Feature\HttpTest.php` which can be run with `php artisan test`
