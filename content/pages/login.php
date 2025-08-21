<?php

    //connect config

    include_once "../../includes/config.php";

    //connect html structure and header

    require_once "../struct.php";

    //require_once "../header.php";
    session_start();
?>

<main id="panel" class="panel align-center login-wrap">
    <h1 class="login">Login</h1>
    <form action="<?php echo $config['site_url']?>includes/login_process.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br>

        <label for="password">Password</label>
        <input type="password" name="password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br></br>
        <?php
        if(empty($_SESSION['error'])){
            echo '<p class="error">Username or Password incorect</p></br></br>';
        }
        ?>

        <button type="submit" value="Zaloguj" class="rounded-input black-border">Login</button>
    </form>
</main>

