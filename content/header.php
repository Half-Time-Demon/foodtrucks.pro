<?php $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);?>

<nav id="menu" class="menu <?php if($curPageName=='admin_panel.php'){echo "admin-menu float-left";} ?>">

      <a href="<?php echo $config['site_url']?>">

        <header class="menu-header">

          <span class="menu-header-title">FoodTrucks</span>

        </header>

      </a>



      <section class="menu-section">

        <?php
          session_start();
          if (isset($_SESSION['username'])) {
                    
            $username = $_SESSION['username'];
            $user_id = $_SESSION['id'];
            echo '<h3 class="line-top menu-section-title user">Welcome, '.$username.'!</h3>';
            echo '<ul class="menu-section-list line-bottom">
                    <li class="list-decoration-none">
                      <a href="'.$config['site_url'].'content/pages/admin_panel.php" >
                        <span>Admin panel</span>
                      </a>
                    </li>
                    <li class="list-decoration-none">
                      <a href="'.$config['site_url'].'content/pages/how_we_work.php" >
                        <span>settings</span>
                      </a>
                    </li>
                    <li class="list-decoration-none">
                      <a href="'.$config['site_url'].'includes/logout.php" >
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>';
          }
          session_write_close();
        ?>

        <h3 class="menu-section-title">Menu</h3>

        <ul class="menu-section-list">

          <li>

            <a href="<?php echo $config['site_url']?>">

              <span>Home</span>

            </a>

          </li>

          <li>

            <a href="<?php echo $config['site_url']?>content/pages/how_we_work.php" >

              <span>How we work</span>

            </a>

          </li>

          <li>

            <a href="<?php echo $config['site_url']?>content/pages/how_it_made.php" >

              <span>How it made</span> 

            </a>

          </li>

          <li>

            <a href="<?php echo $config['site_url']?>content/pages/contact_us.php" >

              <span>Contact us</span>

             </a>

          </li>

        </ul>

      </section>
</nav> 