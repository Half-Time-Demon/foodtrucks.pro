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

    <div class="about-us">
        <h1>About Us</h1>
        <div class="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci dolor neque? A, quidem? Cumque aliquid eius provident asperiores, mollitia eligendi quo ipsum reiciendis, temporibus dolorum repellat similique excepturi. Explicabo.</p>

        </div>
        
        
    </div>
    
    <?php require_once("../footer.php"); ?>
</main>