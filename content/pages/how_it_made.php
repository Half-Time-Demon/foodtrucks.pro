<?php
    //connect config
    include_once "../../includes/config.php";
    //db conection
    //include_once "../../includes/db.php";
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

    <div class="how-it-made">
        <h1>How it made</h1>
        <?php
        
             $directory = "../pictures/how_it_made_pictures";
             //echo $directory,"<br/>";
             if (!is_dir($directory)) {
                 exit('Invalid diretory path');
             }
             $files = array();
             foreach (scandir($directory) as $file) {
                 if ($file !== '.' && $file !== '..') {
                     $files[] = $file;
                 }
             }
             //echo $files[1];
                $result= mysqli_query($connection,"SELECT * FROM `how_it_made`");
                while($line=mysqli_fetch_assoc($result)){
                //for ($i = 1; $i <= $config['how_it_made_box_count']; $i++) {
                //if($i%2!=0){
                    echo
                    '<div class="ft-and-txt ',( ($line['id']%2==0) ? 'right':'left' ),'">
                        <h2>'.$line['title'].'</h2>
                        ',(($line['id']%2!=0) ?
                        '<div class="ft">
                                <img class="img" src="'.$config['site_url'].'content/pictures/how_it_made_pictures/'.$line['image_name'].'" >
                        </div>
                        <div class="txt">
                            <p>'.$line['text'].'</p>            
                        </div>
                    </div>':
                        '<div class="txt">
                            <p>'.$line['text'].'</p>            
                        </div>
                        <div class="ft">
                            <img class="img" src="'.$config['site_url'].'content/pictures/how_it_made_pictures/'.$line['image_name'].'" >
                        </div>
                    </div>');
            //    }else{
                   /* echo $i,
                    '<div class="ft-and-txt right">
                        <div class="ft">
                            <img class="img" src="',$config['site_url'],'content/pictures/Food_Truck-3.png" >
                        </div>
                        <div class="txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit adipisci dolor neque? A, quidem? Cumque aliquid eius provident asperiores, mollitia eligendi quo ipsum reiciendis, temporibus dolorum repellat similique excepturi. Explicabo.</p>            
                        </div>
                    </div>';
                }*/
            }
            mysqli_close($connection);
        ?>
    </div>
    
    <?php require_once("../footer.php"); ?>
</main>

<?php require_once "../../includes/scripts_execute.php";?>