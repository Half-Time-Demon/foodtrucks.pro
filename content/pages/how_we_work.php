<?php
    //connect config
    include_once "../../includes/config.php";
    //connect html structure and header
    require_once "../struct.php";
    require_once "../header.php";
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

    <div class="how-we-work">
        <h1>How we work</h1>
        <div class="blocks">
            <div class="block top-block left-block">
                <img src="<?php echo $config['site_url']?>content/pictures/lampka.webp" class="small-icons">
                <div class="text-block">
                    <li>Idea</li>
                    <p>By assessing your dreams we come to a shared understanding of which functionalities, volumes and capacity you consider? What are your ideas about positioning and brand identity? Your food truck vision.</p>
                </div>  
            </div>
            <div class="block top-block right-block">
                <img src="<?php echo $config['site_url']?>content/pictures/oluwek.webp" class="small-icons">
                <div class="text-block">
                    <li>Design</li>
                    <p>Based on concept sketches, we review the materials, form, lay out, implementation and equipment. We refine the concept and provide you with a detailed design that meets your needs.</p>
                </div>  
            </div>
            <div class="block bottom-block left-block">
                <img src="<?php echo $config['site_url']?>content/pictures/dok.webp" class="small-icons">
                <div class="text-block">
                    <li>Service</li>
                    <p>After the delivery we stay involved. We offer several service contracts and we can take care of periodic inspections. In case of a major total-loss event such as a crash or fire we can often work with insurance to fully reconstruct your food truck or provide an equal alternative.</p>
                </div>  
            </div>
            <div class="block bottom-block right-block">
                <img src="<?php echo $config['site_url']?>content/pictures/pudelko_z_dok.webp" class="small-icons">
                <div class="text-block">
                    <li>Build</li>
                    <p>Our designers product managers and engineers begin work on your project. We use only the finest materials and best methods to ensure your project components will withstand the tests of street life.</p>
                </div>  
            </div>
        </div>
    </div>
    
    <?php require_once("../footer.php"); ?>
</main>

<?php require_once "../../includes/scripts_execute.php";?>
