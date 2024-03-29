

 sudo composer global remove laravel/installer            remove old laravel vesion
 sudo composer global require laravel/installer           install latest version

laravel new blog 

*****************************
npm install && npm run dev
**************************************
Via Composer Create-Project

composer create-project --prefer-dist laravel/laravel project
composer create-project laravel/laravel:^8.0 Projectname

sudo composer create-project --prefer-dist laravel/laravel laravel_multi_auth "5.8.*
composer create-project laravel/laravel:^8.0 laravel_admin

php artisan list   
php artisan --version  
php artisan serve       (run laravel application) 
php artisan optimize:clear   (clear cache)

laravel new blog 

**********************************Migrate***************************************************************************

php artisan migrate:fresh         Drop all tables and re-run all migrations
php artisan migrate:install       Create the migration repository
php artisan migrate:refresh       Reset and re-run all migrations
php artisan migrate:reset         Rollback all database migrations
php artisan migrate:rollback      Rollback the last database migration
php artisan migrate:status        Show the status of each migration

************************************Controller ********************************************************************            
php artisan make:controller User                     

php artisan make:controller CategoriesController --resource

php artisan make:controller CarController -r -m Car
php artisan make:migration - Make Migration file
php artisan make:seeder - Make Seeder file
php artisan make:factory - Make Factory file
php artisan make:policy - Make Policy file
php artisan make:command - Make a new artisan command

https://codewithluis.hashnode.dev/how-to-build-basic-api-in-laravel-8-using-insomnia

*****************************************Model*********************************************************
php artisan make:model Product	
php artisan make:model student -c -m -s -f
php artisan make:model Product -crmsf 

php artisan make:model User --all -a()

User.php in the app directory
create_users_table.php in the database/migrations directory
UserController.php in the app/Http/Controllers directory
UserFactory.php in the database/factories directory
UserSeeder.php in the database/seeds directory

Configure model Product with Seeders, Migration, and Factory. 
	                c-controller
			r resource
			m migration
			s seeder
			f factory



*******************************************Seeder*******************************************************
php artisan make:seeder AdminsTableSeeder
php artisan db:seed --class=AdminsTableSeeder
php artisan migrate:fresh --seed
****************************************Stub**********************************************************************
php artisan make: stub publish
php artisan cache:clear
php artisan config:cache
php artisan route:list (display the routing listing)
           
***********************************************************************
 //$affected = DB::table('settings')->where('id', '=', 38)->update(array('value' => 1));
// *****************join the table*****************                    
DB::table('users')
  ->join('order','orders.user_id','users.id')		
  ->join('orderdetails','orderdetails.order_id','orders.id')
  ->select()
  ->get();	
     
******dummy data important ********************
https://www.youtube.com/watch?v=Gb-F0f5-C3U
https://www.youtube.com/watch?v=fzolxF5EzG8&list=PL0yiR-15Ytq8_AepuSXIZthj5PX4xJaah
*******************************************************************************

larvel project starting
https://www.youtube.com/watch?v=fU4cblTivZ4&list=RDCMUCvHX2bCZG2m9ddUhwxudKYA&index=21
https://www.youtube.com/watch?v=fzolxF5EzG8&list=PL0yiR-15Ytq8_AepuSXIZthj5PX4xJaah
*************************************************************************************

Advantages of Laravel
Built-in Libraries.
Built-in CLI.
Built-in Template engine.
Modular.
Migration System.
Error plus Exception Handling.
Test Driven Development (TDD).
Security.
Follows MVC Architecture.
Built-in ORM (object-relational mapping).


1. Seed
2. Factories 
3. Elogent
4. Relationship
5. Image upload : Storage 

Best Video Tutorial php step by step
https://www.youtube.com/channel/UCFySUiNfhvtgdgTdWbXnn6Q/playlists







