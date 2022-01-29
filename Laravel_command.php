

sudo composer global require laravel/installer

laravel new blog 

Via Composer Create-Project

composer create-project --prefer-dist laravel/laravel project

sudo composer create-project --prefer-dist laravel/laravel laravel_multi_auth "5.8.*

php artisan list   
php artisan --version  
php artisan serve       (run laravel application) 


php artisan make:migration create_admins_table

php artisan optimize:clear   (clear cache)


php artisan migrate 

php artisan migrate:refresh  (drop all table and run the migrate command)   

php artisan migrate:rollback

php artisan migrate:reset

php artisan make:controller <controller-name> --plain

php artisan make:controller User

php artisan make:controller CategoriesController --resource

php artisan make:controller AdminController

php artisan make:model News

php artisan make:model Admin

php artisan make:model Category --migration


php artisan -help make:controller

controller and model create one time

php artisan make:controller CarController -r -m Car

php artisan db:seed

php artisan route:list (display the routing listing)



php artisan make:seeder AdminsTableSeeder

composer create-project --prefer-dist cakephp/app:^3.8 cakephp_project

composer dump-autoload
php artisan db:seed --class=AdminsTableSeeder


php artisan cache:clear
php artisan config:cache


DB::enableQueryLog();
            
  
  dd(DB::getQueryLog());
           // die('die');

 //$affected = DB::table('settings')->where('id', '=', 38)->update(array('value' => 1));
         

                    
DB::table('users')
  ->join('order','orders.user_id','users.id')		
  ->join('orderdetails','orderdetails.order_id','orders.id')
  ->select()
  ->get();	


*************************Top Prority***************************
https://www.youtube.com/channel/UC3myEubdLGDXgB-HxI5G1GA
https://www.youtube.com/watch?v=wpNuSJKc4jc
https://www.youtube.com/watch?v=1mxUTIAKqNo&list=PLCakfctNSHkEN7pw08IBtrbYEQAJFLlVE&index=1
https://www.youtube.com/channel/UCpnhvVlLh8LmGbW2lRaRwJg/playlists
https://www.youtube.com/watch?v=YHFUnI0Xcic&list=PLCakfctNSHkEN7pw08IBtrbYEQAJFLlVE&index=2

Laravel:
https://www.youtube.com/watch?v=22tWU125nro&list=PL8p2I9GklV46cKn5ZLc-AaRwUfKYHmhNa
***************************************************************************
Laravel Api
https://www.youtube.com/watch?v=5411bR2jtM4&list=PL8p2I9GklV44w0QHfw1xyfO3NnuccntTC&index=1
***********Start project ***********************************************
https://www.youtube.com/watch?v=KBnwW2anQvo&list=PLz95nVlZ38uLNgkD-pPo2HzIDvwWkYTR0&index=1
https://www.youtube.com/watch?v=o_KhH2dZCKQ&list=PLxFwlLOncxFK4H8kZoCEumH2N7It0-7bm
https://www.youtube.com/watch?v=bE8Err1twRw

https://www.youtube.com/watch?v=0dRoqvzh804&list=PLeS3J3RlFi_a3bywyxG2Q91lM03Pxis7h&index=1
https://www.youtube.com/watch?v=xMC4d52ZBSk&list=PLN3HQU0omsXikyPlqENX4eIqUmj_tN3yU&index=1
https://www.youtube.com/channel/UC_hG9fglfmShkwex1KVydHA/playlists
Admin with blog
https://www.youtube.com/watch?v=1PUpC_slCWU&list=PLe30vg_FG4OTELVqQgHaMaq2oELjpSWy_&index=1
https://www.youtube.com/watch?v=NuyouEHghac&list=PLe30vg_FG4OTO7KbQ6TByyY99AiSw1MDS&index=1
https://www.youtube.com/channel/UC_hG9fglfmShkwex1KVydHA/playlists
***********************************************************************

********************Advanced tutorail laravel and php
https://www.youtube.com/channel/UCIlPGCkXqjTDlmFPS6oMU9g/playlists
https://www.youtube.com/watch?v=RX66grV31Ks&list=PL0yiR-15Ytq--EhSUPyEzRiDZBpI70lyK
*********************best video*********************************************
https://www.youtube.com/watch?v=Oza7QFNTs18&list=PLHFGzOr0F8DKXHU3JWSrrbDzNbyA5ClPj&index=1

Laravel Join
https://www.youtube.com/watch?v=4wJkDwKtZXw&list=RDCMUCvHX2bCZG2m9ddUhwxudKYA&index=12

******dummy data important 
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
npm install && npm run dev






