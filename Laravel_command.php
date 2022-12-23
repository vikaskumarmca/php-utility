

 sudo composer global remove laravel/installer            remove old laravel vesion
 sudo composer global require laravel/installer           install latest version

laravel new blog 

*****************************
npm install && npm run dev
**************************************
Via Composer Create-Project

composer create-project --prefer-dist laravel/laravel project
sudo composer create-project --prefer-dist laravel/laravel laravel_multi_auth "5.8.*
composer create-project laravel/laravel:^8.0 laravel_admin

php artisan list   
php artisan --version  
php artisan serve       (run laravel application) 
php artisan optimize:clear   (clear cache)

laravel new blog 

**********************************Migrate***************************************************************************

migrate:fresh         Drop all tables and re-run all migrations
migrate:install       Create the migration repository
migrate:refresh       Reset and re-run all migrations
migrate:reset         Rollback all database migrations
migrate:rollback      Rollback the last database migration
migrate:status        Show the status of each migration

php artisan make:migration create_admins_table
php artisan migrate 
php artisan migrate:refresh  (drop all table and run the migrate command)   
php artisan migrate:rollback
php artisan migrate:reset
************************************Controller ********************************************************************            
php artisan make:controller User          
php artisan make:controller AdminController            
php artisan make:controller <controller-name> --plain
            
 
php artisan make:controller CategoriesController --resource

php artisan make:controller CarController -r -m Car
 
php artisan make :model Test -cm
php artisan make:model Test2 -crm
	
php artisan make:model Product -msf 
	Configure model Product with Seeders, Migration, and Factory. 
	                c-controller
			r resource
			m migration

			php artisan make:model Test2 --all


			php artisan make:model Test2 --seed --factory --controller --migration
	
https://codewithluis.hashnode.dev/how-to-build-basic-api-in-laravel-8-using-insomnia

*****************************************Model*********************************************************
php artisan make:model Admin            
php artisan make:model Category --migration

*******************************************Seeder*******************************************************
php artisan make:seeder AdminsTableSeeder
php artisan db:seed --class=AdminsTableSeeder

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







