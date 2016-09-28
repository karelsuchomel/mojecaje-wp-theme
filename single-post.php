<?php

get_header();

 ?>
<div id="content">
  <div id="first-segment">
    <?php include('main_menu.php') ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </div>

</div>
<?php

get_footer();

 ?>
