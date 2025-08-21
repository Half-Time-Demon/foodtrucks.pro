<?php
    include_once "config.php";
    $c = true;
    $message="";
    if(empty($errors) and !empty($_POST)){
        //--tut jesli wsio ok co robic--------------------
        foreach ( $_POST as $key => $value ) {   
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
        $message_for_user = "test no reply";

        $headers_for_user = "MIME-Version: 1.0" . PHP_EOL .
        "Content-Type: text/html; charset=utf-8" . PHP_EOL .
        'From: '.$no_reply_email . PHP_EOL .
        'Reply-To: '.$_POST['email'].'' . PHP_EOL;

        mail($_POST['email'], adopt($form_subject), $message_for_user, $headers_for_user );
        //                  
        foreach ($_POST as $i => $value) {
            unset($_POST[$i]);
        }
    }
    header("Location: /content/pages/contact_us.php#mail_us");
    exit();
?>
    