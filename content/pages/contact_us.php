<?php

    //start sesion for sesion variables

    //session_start();

    //connect config

    include_once "../../includes/config.php";

    include_once "../../includes/functions.php";

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



    <div class="contact-us">

        <h1>Contact us</h1>

        <div class="contact-box">

            <div class="form-block">

                <h2>Mail Us:</h2>
                
                <form action="/content/pages/contact_us.php#mail_us" method="POST" >

    

                    <?php
                        
                        foreach($_POST as $key => $value){

                            trim($value);

                        }



                        if(isset($_POST['do_post'])){

                            $errors = array();

                        

                            if($_POST['name'] == '' ){

                                $errors[] = 'Insert Name!';

                            }

                            

                            if($_POST['email'] == '' ){

                                $errors[] = 'Insert Email!';

                            }elseif(!strpos($_POST['email'],'@') !==false){

                                $errors[] = 'Not valid Email!';

                            }

                        

                            if($_POST['text'] == '' ){

                                $errors[] = 'Insert Text Message!';

                            }

                            if(!check_captcha($_POST['captcha'])){

                                $errors[] = 'Wrong captcha!';

                            }

                            

                            $c = true;

                            $message="";

                            if(empty($errors) and !empty($_POST)){

                                //--tut jesli wsio ok co robic--------------------

                                foreach ( $_POST as $key => $value ) {   

                                    $value=trim($value);

                                    $message = $message . "

                                        " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "

                                            <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>

                                            <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>

                                        </tr>

                                        ";

                                }

                                

                                $message = "<table style='width: 100%;'>$message</table>";

                                

                                function adopt($text) {

                                    return '=?UTF-8?B?'.Base64_encode($text).'?=';

                                }

                            

                                $headers = "MIME-Version: 1.0" . PHP_EOL .

                                "Content-Type: text/html; charset=utf-8" . PHP_EOL .

                                'From: '.$admin_email . PHP_EOL .

                                'Reply-To: '.$admin_email.'' . PHP_EOL;



                                mail($admin_email, adopt($form_subject), $message, $headers );

                                //auto send message for user

                                $message_for_user = "<span style=''>Dear {$_POST['name']} {$_POST['surename']},</span>

                                                    <br>

                                                    <p style='text-indent: 20px;'>We have recive your massage. we try to respond

                                                    as soon as posible</p>

                                                    ";

                            

                                $headers_for_user = "MIME-Version: 1.0" . PHP_EOL .

                                "Content-Type: text/html; charset=utf-8" . PHP_EOL .

                                'From: '.$admin_email . PHP_EOL .

                                'Reply-To: '.$_POST['email'].'' . PHP_EOL;

                            

                                mail($_POST['email'], adopt($form_subject), $message_for_user, $headers_for_user );

                                /////

                                echo '<span id="success" class="success succ-err">Message sucsesfuly sended!</span>';

                                $_POST = array();

                                

                            }else{ 

                                echo '<span class="error succ-err">'.$errors['0'].'</span>';

                            }

                        }

                    ?>

    

                    <div id="mail_us" class="form-blocks">

                        <div class="input-box">

                            <p>Name<span class="required">*</span>:</p>

                            <input tabindex="1" type="text" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>">

                        </div>

                        <div class="input-box">

                            <p>SureName:</p>

                            <input tabindex="2" type="text" name="surename" value="<?php if(!empty($_POST['surename'])){echo $_POST['surename'];}?>">

                        </div>

                    </div>

                    <div class="form-blocks">

                        <div class="input-box">

                            <p>Company:</p>

                            <input tabindex="3" type="text" name="company" value="<?php if(!empty($_POST['company'])){echo $_POST['company'];}?>">

                        </div>

                        <div class="input-box">

                            <p>Phone:</p>

                            <input tabindex="4" type="tel" name="phone" value="<?php if(!empty($_POST['phone'])){echo $_POST['phone'];}?>">  

                        </div>

                    </div>

                    <div class="form-blocks">

                        <div class="input-box">

                            <p>Email<span class="required">*</span>:</p>

                            <input tabindex="5" type="text" name="email" value="<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>">

                        </div>

                        <div class="input-box">

                            <p><?php echo set_captcha(); ?><span class="required">*</span>:</p>

                            <input tabindex="6" type="text" name="captcha" value="">

                        </div>

                    </div>

                    <div class="flex-message-box">

                        <div class="message-box">

                            <p>Message<span class="required">*</span>:</p>

                            <textarea tabindex="6" name="text" id="textbox"><?php if(!empty($_POST['text'])){echo $_POST['text'];}?></textarea>

                        </div>

                    </div>

                    <div class="button-box">

                        <button tabindex="7" type="submit" name="do_post">send</button>

                    </div>

                </form>

            </div>  

                    

            <div class="contact-info">

                <div class="contact-info-box">

                    <h3><span>Working hours</span></h3>

                    <p>

                        <?php echo $config['info']['Working_hours']['time1']; ?>

                        <br />

                        <?php echo $config['info']['Working_hours']['time2']; ?>

                        <br />

                        <?php echo $config['info']['Working_hours']['time3']; ?>

                        <br />

                        <?php echo $config['info']['Working_hours']['time4']; ?>

                    </p>

                </div>

                    

                <div class="contact-info-box">

                    <h3><span>We are here</span></h3>

                    <p>

                        Addres: <?php echo $config['info']['addres']; ?>

                        <br />

                        Phone: <?php echo $config['info']['phone']; ?>

                        <br />

                        Email: <?php echo $config['info']['email']; ?>

                    </p>

                </div>                                     

            </div>

        </div>

        <div class="map-box">

            <div class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.1788125621446!2d25.05986793624625!3d54.64798176999556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dded563ebe7e57%3A0x8e1a894ab0f48d9e!2sTopolio%20g.%208%2C%20Lentvaris%2025111!5e0!3m2!1sru!2slt!4v1623905347282!5m2!1sru!2slt" width="600" height="450" style="/* border:0; */" allowfullscreen="" loading="lazy"></iframe>

            </div>

        </div>

    </div>

    

    <?php require_once("../footer.php"); ?>

</main>

<?php require_once "../../includes/scripts_execute.php";?>

