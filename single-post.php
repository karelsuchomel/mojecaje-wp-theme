<?php

get_header();

 ?>
<div id="content">
  <div id="post-header">
    <?php include('main_menu.php') ?>
  </div>
  <div id="post-content-bg">
      <?php
      if(have_posts()) :
        while(have_posts()) : the_post();
        ?>

        <div id="hero-picture" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/post-bg/<?php $key_1_value = get_post_meta( get_the_ID(), 'picture', true );
          // Check if the custom field has a value.
          if ( ! empty( $key_1_value ) ) { echo $key_1_value; }
          ?>.jpg")'" alt="dekorace záhlaví"></div>

        <div id="post-content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <hr>
        <?php endwhile; else:
          endif;
      ?>
    </div>
  </div>

</div>
<?php

get_footer();

 ?>
