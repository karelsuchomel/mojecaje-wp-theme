<nav>
  <div id="mainMenu" class="clear-both">

    <?php

    $args = array('theme_location' => 'primary');

    wp_nav_menu( $args );
    ?>

    <button onclick="location.href='index.php/shop';" class="menuButton">E-shop</button>
  </div>
</nav>
