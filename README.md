# laravel-vue-favorite
Create a favorite/like feature with Vuejs in Laravel application.

### Getting Started

Clone the project repository by running the command below if you use SSH

```
git clone git@github.com:ammezie/laravel-vue-favorite.git
```

If you use https, use this instead

```
git clone https://github.com/ammezie/laravel-vue-favorite.git
```

After cloning,run:

```
composer install
```

Duplicate `.env.example` and rename it `.env`

Then run:

```
php artisan key:generate
```

Next install `NPM` dependencies:

```
npm install
```

### Migrations And Database Seeder

Be sure to fill in your database details in your `.env` file before running the migrations:

```
php artisan migration
```

You can also use the dummy data by running:

```
php artisan db:seed
```

And finally, start the application:

```
php artisan serve
```

and visit [http://localhost:8000/](http://localhost:8000/) to see the application in action.

