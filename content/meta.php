<?php

    //if(file_exists("../includes/config.php")){

    //    include_once "../includes/config.php";

    //}else
    //if(file_exists("/includes/config.php")){

    //    include_once "/includes/config.php";

    //}else
    if(file_exists("includes/config.php")){

        include_once "includes/config.php";

    }

?>

<meta charset="UTF-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta http-equiv="cleartype" content="on" />

<meta name="MobileOptimized" content="320" />

<meta name="HandheldFriendly" content="True" />

<meta name="apple-mobile-web-app-capable" content="yes" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<title><?php echo $config['title'];?></title>

<link rel="shortcut icon" size="648x540" type="image/png" href="/content/pictures/icons/favicon-orange.png" />

<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/1.13.0/mocha.min.css">-->

<link href="<?php echo $config['style_file'] ?>" rel="stylesheet" type="text/css"/>

