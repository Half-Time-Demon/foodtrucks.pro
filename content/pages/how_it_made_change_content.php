<?php
//connect config
include_once "../../includes/config.php";

//session_start();
$_SESSION['page'] = "how_it_made_change_content.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_GET['id'])) {
        // Update existing record
        $id = $_GET['id'];
        $title = $_POST["title"];
        $text = $_POST["text"];
        $image_name = $_POST["image_name"];
        $_SESSION['succes'] = "";
        $_SESSION['error1'] = "";
    
        // Update data in the database
        $query = "UPDATE how_it_made SET title='$title', text='$text', image_name='$image_name' WHERE id=$id";
    
        if (mysqli_query($connection, $query)) {
            $_SESSION['succes'] = "Dane zostały pomyślnie zaktualizowane.";
        } else {
            $_SESSION['error1'] = "Błąd podczas aktualizacji danych: " . mysqli_error($connection);
        }
    } else {
        // Insert new record
        $title = $_POST["title"];
        $text = $_POST["text"];
        $image_name = $_POST["image_name"];
        $_SESSION['succes'] = "";
        $_SESSION['error1'] = "";
    
        // Insert data into the database
        $query = "INSERT INTO how_it_made (title, text, image_name) VALUES ('$title', '$text', '$image_name')";
    
        if (mysqli_query($connection, $query)) {
            $_SESSION['succes'] = "Dane zostały pomyślnie dodane do bazy danych.";
        } else {
            $_SESSION['error1'] = "Błąd podczas dodawania danych: " . mysqli_error($connection);
        }
    }
}
?>

<main id="panel" class="panel align-center login-wrap">
    <h2 class="how_it_made_change_content">how it made change content</h2>
    <div class="container">
        <div class="table">
            <div class="table-header">
                <div class="header__item"><a id="name" class="filter__link" href="#">Title</a></div>
                <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Text</a></div>
                <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Image name</a></div>
                <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Edit</a></div>
            </div>
            <div class="table-content">
                <?php
                $result = mysqli_query($connection, "SELECT * FROM `how_it_made`");

                while ($line = mysqli_fetch_assoc($result)) {
                    echo '
                        <div class="table-row">
                            <div class="table-data">' . $line['title'] . '</div>
                            <div class="table-data">' . $line['text'] . '</div>
                            <div class="table-data">' . $line['image_name'] . '</div>
                            <div class="table-data">
                                <a href="' . $config['site_url'] . 'includes/how_it_made_change_content_process.php?id=' . $line['id'] . '">
                                    <img src="' . $config['site_url'] . 'content/pictures/icons/redagate.png" alt="">
                                </a>
                                <a href="' . $config['site_url'] . 'includes/delete_how_it_made.php?id=' . $line['id'] . '">
                                    <img src="' . $config['site_url'] . 'content/pictures/icons/delete.png" alt="">
                                </a>
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
            $result = mysqli_query($connection, "SELECT * FROM how_it_made WHERE id = $id");
            $value = $result->fetch_assoc();
        }
        ?>
        <label for="title">Title</label>
        <input type="text" name="title" class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['title']; } ?>" required>
        <br>
        <label for="text">Text</label>
        <textarea name="text" class="rounded-input border-bottom-input border-removed-input border-customized-input" required><?php if (isset($_GET['id'])) { echo $value['text']; } ?></textarea>
        <br>
        <label for="image_name">Image Name</label>
        <input type="text" name="image_name" class="rounded-input border-bottom-input border-removed-input border-customized-input" value="<?php if (isset($_GET['id'])) { echo $value['image_name']; } ?>" required>
        <br><br>

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

        <button type="submit" class="rounded-input black-border">Dodaj dane</button>

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