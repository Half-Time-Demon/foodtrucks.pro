<?php
//connect config
include_once "../../includes/config.php";

//session_start();
$_SESSION['page'] = "registration_user.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_GET['id'])) {
        // Update existing record
        $id = $_GET['id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $_SESSION['error1']="";
        $_SESSION['succes']="";
        // Update data in the database
        $query = "UPDATE users SET name='$name', surname='$surname', username='$username', role='$role' WHERE id=$id";
    
        if (mysqli_query($connection, $query)) {
            $_SESSION['succes'] = "Dane zostały pomyślnie zaktualizowane.";
        } else {
            $_SESSION['error1'] = "Błąd podczas aktualizacji danych: " . mysqli_error($connection);
        }
    } else {
        // Insert new record
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $_SESSION['error1']="";
        $_SESSION['succes']="";

        // Funkcja do szyfrowania hasła za pomocą SHA256
        function encryptPassword($password){
            $encryptedPassword = hash('sha256', $password);
            return $encryptedPassword;
        }

        $encryptedPassword = encryptPassword($password);

        // Sprawdź, czy hasła są identyczne
        if ($password !== $confirmPassword) {
            $_SESSION['error1']="Password and confirm password not the same";
            header('Location: '.$config['site_url'].'includes/registration_process.php');
        }

        if($_SESSION['user_role']!=="admin"){
            $_SESSION['error1']="You dont have permision to registrate new user";
            header('Location: '.$config['site_url'].'includes/registration_process.php');
        }

        // Sprawdź, czy użytkownik o podanej nazwie już istnieje w bazie danych
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['error1']="User with this Username Existed";
            header('Location: '.$config['site_url'].'includes/registration_process.php');
        
        }
    
        // Insert data into the database
        $query = "INSERT INTO users (name, surname, username, password, role) VALUES ('$name', '$surname', '$username', '$encryptedPassword', '$role')";
    
        if (mysqli_query($connection, $query)) {
            $_SESSION['succes'] = "Dane zostały pomyślnie dodane do bazy danych.";
        } else {
            $_SESSION['error1'] = "Błąd podczas dodawania danych: " . mysqli_error($connection);
        }
    }
}
?>

<main id="panel" class="panel align-center login-wrap">
    <h2 class="Registration">User Registration</h2>
    <div class="container">
	
    	<div class="table">
    		<div class="table-header">
    			<div class="header__item"><a id="name" class="filter__link" href="#">Name</a></div>
    			<div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Surname</a></div>
    			<div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Username</a></div>
    			<div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Role</a></div>
                <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Edit</a></div>
    		</div>
    		<div class="table-content">	
                <?php
                    $result= mysqli_query($connection,"SELECT * FROM `users`");

                    while($line=mysqli_fetch_assoc($result)){
                        echo '
                            <div class="table-row">		
                                <div class="table-data">'.$line['name'].'</div>
                                <div class="table-data">'.$line['surname'].'</div>
                                <div class="table-data">'.$line['username'].'</div>
                                <div class="table-data">'.$line['role'].'</div>
                                <div class="table-data">
                                    <a href="'.$config['site_url'].'includes/registration_process.php?id='.$line['id'].'"><img src="'.$config['site_url'].'content/pictures/icons/redagate.png" alt=""></a>
                                    <a href="'.$config['site_url'].'includes/delete_user_process.php?id='.$line['id'].'"><img src="'.$config['site_url'].'content/pictures/icons/delete.png" alt=""></a>
                                </div>
                            </div>
                        ';
                    }
                ?>
    		</div>	
    	</div>
    </div>

    <form action="<?php echo $config['site_url'] ?>content/pages/admin_panel.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id']; } ?>" method="post">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = mysqli_query($connection, "SELECT * FROM users WHERE id = $id");
            $value = $result->fetch_assoc();
        }
        ?>
        <label for="username">Username</label>
        <input type="text" name="username" required class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['username']; } ?>">
        </br>
        <label for="name">Name</label>
        <input type="text" name="name" required class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['name']; } ?>">
        </br>
        <label for="surname">Surname</label>
        <input type="text" name="surname" required class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['surname']; } ?>">
        </br>
        <label for="role">Role</label>
        <input type="text" name="role" required class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['role']; } ?>">
        
        <?php if (!isset($_GET['id'])) : ?>
        </br>
        <label for="password">Password</label>
        <input type="password" name="password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        </br>
        <label for="confirm_password">Confirm password</label>
        <input type="password" name="confirm_password" required class="rounded-input border-bottom-input border-removed-input border-customized-input">
        <?php endif; ?>
    
        </br></br>
        <?php
        if(!empty($_SESSION['error1'])){
            echo '<p class="error">'.$_SESSION['error1'].'</p></br></br>';
            $_SESSION['error1'] = "";
        }
        if(!empty($_SESSION['succes'])){
            echo '<p class="success">'.$_SESSION['succes'].'</p></br></br>';
            $_SESSION['succes'] = "";
        }
        ?>

        <button type="submit" value="Registration" class="rounded-input black-border">Registration</button>

        <?php if (isset($_GET['id'])) : ?>
            <button type="button" class="rounded-input black-border" onclick="resetFormAndId()">Anuluj</button>
        <?php endif; ?>
    </form>
    <script>
        function resetFormAndId() {
            // Reset form data
            document.querySelector("form").reset();
            // Reset id parameter
            window.location.href = "<?php echo $config['site_url'] ?>content/pages/admin_panel.php";
        }
    </script>
</main>