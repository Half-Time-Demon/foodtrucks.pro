<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changeClass(i) {
            var element = document.getElementById(i);
            var list = document.getElementById('myList');
            var listItems = list.getElementsByTagName('li');

            // starcie klasy dla całej listy
            for (var j = 0; j < listItems.length; j++) {
                listItems[j].classList.remove('curent-page');
            }
            
            // Dodawanie klasy
            element.classList.add('curent-page');
        }

        $(document).ready(function() {
            // Nasłuchiwanie kliknięcia na przycisk
            $('#change_password').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'change_password.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(1);
            });
            $('#registration_user').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'registration_user.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(2);
            });
            $('#how_it_made_change_content').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'how_it_made_change_content.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(3);
            });
            $('#how_we_work_change_content').click(function() {
                // Wysyłanie żądania AJAX do skryptu PHP
                $.ajax({
                    url: 'how_we_work_change_content.php',
                    type: 'GET',
                    dataType: 'html',
                    success: function(response) {
                        // Aktualizowanie treści na stronie
                        $('#content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
                changeClass(4);
            });
        });
</script>

<div class="menu" >
    <div class="menu-center">
        <div class="menu-line">
            <ul id="myList">
                <li id="1" class="curent-page">
                    <a id="change_password">Change password</a>
                </li>
                <li id="2">
                    <a id="registration_user">registration user</a>
                </li>
                <li id="3">
                    <a id="how_it_made_change_content">how it made change content</a>
                </li>
                <li id="4">
                    <a id="how_we_work_change_content">how we work change content</a>
                </li id="5">
            </ul>
        </div>
    </div>
</div>

<script>
    if("<?php echo $_SESSION['page']?>"=="registration_user.php"){
            changeClass(2);
    }else if("<?php echo $_SESSION['page']?>"=="how_it_made_change_content.php"){
        changeClass(3);
    }
    else if("<?php echo $_SESSION['page']?>"=="how_we_work_change_content.php"){
        changeClass(4);
    }
</script>