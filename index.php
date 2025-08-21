<?php 

    //connect config

    include_once "includes/config.php";

    //connect html structure and header

    require_once "content/struct.php";

    require_once "content/header.php";

?>



<main id="panel" class="panel">

    

    <header class="panel-header">

        <button class="btn-hamburger js-slideout-toggle">

            <div class="burgerline1"></div>

            <div class="burgerline2"></div>

            <div class="burgerline3"></div>

        </button>

        <!--<h1 class="logo"><a href="<?php //echo $config['site_url']?>">FoodTrucks</a></h1>-->

        <div class="logo">

            <a href="<?php echo $config['site_url']?>">

                <img class="logo-img" src="<?php echo $config['site_url']?>content/pictures/foodtrucks_logo(white).png" >

            </a>

        </div>

    

        <div class="social-icons-block">

            <a href="<?php echo $social['facebook']?>" target="_blank">

                <img class="social-icon" src="<?php echo $config['site_url']?>content/pictures/icons/facebook_icon.png" >

            </a>

            <a href="<?php echo $social['instagram']?>" target="_blank">

                <img class="social-icon" src="<?php echo $config['site_url']?>content/pictures/icons/instagram_icon.png" >

            </a>

            <a href="<?php echo $social['youtube']?>" target="_blank">

                <img class="social-icon" src="<?php echo $config['site_url']?>content/pictures/icons/youtube_icon.png" >

            </a>

        </div>

    </header>



    <div class="main-photo-box">    

        <img class="main-photo" src="<?php echo $config['site_url']?>content/pictures/Main_photo.png" >

    </div>



    <div class="home">

        <h1>Home</h1>

        <div class="text-box">

            <p>East European Trade provides food trucks, food trailers, portable shops and bar containers for use as market place or like a ghost kitchen, for every type of business and budget.</p>

            <p>We take great pride in building food trucks and trailers that are beautiful to the eye, exquisite on the inside and durable for years to come. .This is why we work only with high quality materials and our experienced team follows strict protocols to ensure your mobile kitchen will meet every code and regulation no matter where you are. </p>

        </div>

        

        

    </div>

        

    <?php require_once("content/footer.php"); ?>

</main>



<?php require_once "includes/scripts_execute.php";?>



