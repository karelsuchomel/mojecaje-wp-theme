<?php

get_header();

 ?>
<div id="content">
  <div id="first-segment">
    <?php include('main_menu.php') ?>
    <div style="height: 500px;"></div>
  </div>
  <div id="second-segment">
    <div class="segment text padding">
      <?php
      if(have_posts()) :
        while(have_posts()) : the_post();
        ?>
        <h1><?php the_title(); ?></h1>

        <p><?php the_content(); ?></p>
        <?php endwhile; else:
          endif;
      ?>
    </div>
  </div>

</div>
<?php

get_footer();

 ?>
