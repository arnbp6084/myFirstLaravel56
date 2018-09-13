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
9.We are going for CRUD operation
10. Run php artisan make:model Model/Task -a
it created model in model folder in app and migration and controller
11.added some fields in migration and run php artisan migrate
12.Added route resource Route::resource('tasks', 'TaskController');
13.creating views in layouts,partials,tasks
14. using third party plugins like sven --  composer require sven/artisan-view:^3.0 --dev  to create views through artisan command prompt or,

In v5.4 you need to create the command with: php artisan make:command MakeView

and before you can use it, it must be registered in App/Console/Kernel like

protected $commands = [
        Commands\MakeView::class
    ];
then you make a view like: php artisan make:view posts/create
15.Then using the pdf for the CRUD operations we created crud for making tasks --- add/edit/delete
16.for tinker
composer require laravel/tinker
17.To create controller restfull with create/destroy/update/edit/show/index use 
php artisan make:controller --resource SomeResourceController
18. Rollback migration:  php artisan migrate:rollback --step=1 rollback to last made migration
19.use Carbon\Carbon; then Carbon::now()->format('Y-m-d H:i:s'); to seed timestamps
