# Boo Clock

A composer package for laravel to show a clock view with mario's boo.

### Usage

Install laravel package.
```
composer require awonwon/booclock
```

regist ClockServiceProvider in your config/app.php
```
'providers' =>[
    ...
    Awonwon\Booclock\ClockServiceProvider::class,
    ...
],
```

Run this artisan command after you composer install.
```
php artisan vendor:publish --tag=public --force
```
It's make a boo image in `public/vendor/booclock` folder




Browse `http://localhost:8000/boo`, and you'll see the boo clock's page.




If you want to custom your boo's page, please run this command instead of the vendor command before
```
php artisan vendor:publish
```

The view file will copy to `resources/views/vendor/booclock` folder

---


### Happy to see Boo in Mario world !
