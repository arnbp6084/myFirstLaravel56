while installing laravel 5.6
1.there required to run composer update --no-scripts  to update the dependencies, coz there was issue of not finding autoload in vendor folder
2.php artisan key:generate
3.run php artisan make:auth
3.1 add Auth::routes(); in routes/web
4.some file created including migration controller routes
5.run php artisan migrate
6. some issue may arise due to old mysql,fixed it by adding '\Illuminate\Support\Facades\Schema::defaultStringLength(191);' in the boot method of appserviceprovider under providers
7.then delete all tables, and run php art
isan migrate.
8.Now run localhost:8000/register or /login it wud register or log u in .. thats it. done!!!
