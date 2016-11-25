<?php

get_header();

 ?>
<div id="content">
  <div id="first-segment">
    <?php include('main_menu.php') ?>
    <div class="segment headline-bg">
      <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
    </div>
  </div>
  
  <div id="fourth-segment">

    <?php require_once('newsletter-form.php'); ?>
    
  </div>
</div>
<?php

get_footer();

 ?>
