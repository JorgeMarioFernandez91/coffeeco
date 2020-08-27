
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="home.php">TT La Camila</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="home.php"><?php echo $nav_home ?></a>
      <a class="nav-item nav-link" href="home.php#products"><?php echo $nav_products ?></a>
      <a class="nav-item nav-link" href="home.php#services"><?php echo $nav_services ?></a>
      <a class="nav-item nav-link" href="home.php#about"><?php echo $nav_about ?></a>
      <a class="nav-item nav-link" href="home.php#contact"><?php echo $nav_contact ?></a>
    </div>
    
  </div>
  
  <div class="justify-content-end row no-gutters">

    <form method="post" action="lang.php">
        <!-- helps to let the website know where to return to after switching the language -->
        <?php 
          echo '<input type="hidden" name="destination" value=' . $dest . '>'; 
        ?>
        
        <input type="hidden" name="language" value= 'eng'>
        <button type="submit" class="btn btn-dark">
            English
        </button>
    </form>

    <form method="post" action="lang.php">
        <?php 
          echo '<input type="hidden" name="destination" value=' . $dest . '>'; 
        ?>

        <input type="hidden" name="language" value= 'esp'>
        <button type="submit" class="btn btn-dark">
            Español
        </button>
    </form>

  </div>
</nav>