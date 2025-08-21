Database dump is located in the DB folder.

If you have a different host, change the following in ../foodtrucks.pro/includes/config.php:

  'site_url'=>'http://localhost/foodtrucks.pro/',
  'style_file'=>'http://localhost/foodtrucks.pro/css/stylesheet.css',

Also, update the database settings if they are different:

  'db' => array(

            'server' => 'localhost',

            'username' => 'root',

            'password' => '',

            'db_name' => 'foodtrucks'

        ),


