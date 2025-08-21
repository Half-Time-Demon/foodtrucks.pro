<?php



    $config = array(

        'title' => 'FoodTrucks',

        'On_Maintenance' => false,

        'allow_ip' => array(    // for On_Maintenance only

            'localhost',

            '127.0.0.1'     

        ),

        'site_url'=>'http://localhost/foodtrucks.pro/',

        'style_file'=>'http://localhost/foodtrucks.pro/css/stylesheet.css',

        'db' => array(

            'server' => 'localhost',

            'username' => 'root',

            'password' => '',

            'db_name' => 'foodtrucks'

        ),

        'info' => array(

            'addres' => 'Kaunas, Rugiu g. 8',

            'phone' => '+370 674 86875',

            'email' => 'info@foodtrucks.pro',

            'Working_hours' => array(

                'time1' => 'Monday - Friday: 8:00-17:00 Hrs',

                'time2' => '(Phone until 16:30 Hrs)',

                'time3' => 'Saturday - 9:00-14:00 Hrs',

                'time4' => '(Phone until 13:30 Hrs)'

            )

        ),

        'copyright' => 'East European Trade, UAB',

        'how_it_made_box_count' =>'5'

    );

    

    $social = array(

        "facebook"=>"https://fb.com",

        "instagram"=>"https://www.instagram.com",

        "youtube"=>"https://youtube.com"

    );

    //email data

    $admin_email  = "info@foodtrucks.pro";

	$form_subject = "foodtrucks.pro";

    $no_reply_email = "no-reply@foodtrucks.pro";



    $variables = array(

        'is_sended' => '',

    );



    require_once "db.php";

    require_once "On_Maintenance.php";



?>

