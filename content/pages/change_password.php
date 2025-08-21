<?php

//connect config
include_once "../../includes/config.php";

?>
<script>
    
</script>
<main id="panel" class="panel align-center login-wrap">
    <h2 class="change-password">Change password</h2>
    <form action="<?php echo $config['site_url']?>includes/change_password_process.php" method="post">
        
        <label for="old_password">Old password</label>
        <input type="password" name="old_password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br>
        <label for="new_password">New password</label>
        <input type="password" name="new_password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br>
        <label for="confirm_password">Confirm password</label>
        <input type="password" name="confirm_password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br></br>
        <?php
        if(!empty($_SESSION['error1'])){
            echo '<p class="error">'.$_SESSION['error1'].'</p></br></br>';
            $_SESSION['error1']="";
        }
        if(!empty($_SESSION['succes'])){
            echo '<p class="success">'.$_SESSION['succes'].'</p></br></br>';
            $_SESSION['succes']="";
        }
        ?>

        <button type="submit" value="change" class="rounded-input black-border">Change</button>
    </form>
</main>