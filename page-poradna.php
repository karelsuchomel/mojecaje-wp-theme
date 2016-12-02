<?php

get_header();

?>
<div id="content">
<div id="consult-first-segment">
  <?php include('main_menu.php') ?>
  <div class="segment headline-bg">
    <div class="segment headline">
      <h1>Poradna</h1>
    </div>
  </div>
</div>
<div id="questions-segment">
  <div class="segment text">

    <ul class="questions-cathegories">
      <button class="ask-anything" id="askAnything">Nová otázka</button>
      <li><a href="#"> Nejnovější </a></li>
      <li><a href="#"> Nejčtenější </a></li>
      <li><a href="#" class="last"> Doporučené </a></li>
      <img src="<?php bloginfo('template_directory'); ?>/img/poradna-graphic02.png">
      <a id="button-show-moderators">Kdo vám radí?</a>
    </ul>

    <div class="questions">
      <?php
      $posts = new WP_Query('cat=1&posts_per_page=7');

      if ($posts -> have_posts()) :
        while ($posts -> have_posts()) : $posts -> the_post();?>

        <div class="question-preview-wrap clear-both">
          <div class="question-preview-text">
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <p>
              <?php
              the_content( 'více ...' )
              ?>
            </p>
            <hr/>
            <em><?php the_date('d/m/Y');?></em>
            <em><?php comments_number('', '<div class="comment-icon"></div>1 komentář', '<div class="comment-icon"></div>% komentářů');?></em>
            <em>
            <?php $key_1_value = get_post_meta( get_the_ID(), 'nickName', true );
            // Check if the custom field has a value.
              if ( ! empty( $key_1_value ) ) {
                  echo $key_1_value;
              }
            ?>
            </em>
            <?php edit_post_link('<em style="color: red;">Editovat</em>'); ?>
          </div>
        </div>

        <?php
        endwhile;

      else :
        echo "<p>Žádné dotazy nebyly nalezeny :(</p>";

      endif;
      wp_reset_postdata();
      ?>
      <a class="show-more" href="#">
        <div class="dot-dot-dot clear-both">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </a>
    </div>

  </div>

  <?php require_once('newsletter-form.php'); ?>
  
  <!-- <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p> -->
</div>
</div>

<!-- Messages -->
<!-- Create a question form -->
<?php require_once('messages/askAnything.php'); ?>
<?php require_once('messages/answering.php'); ?>

<?php

get_footer();

?>
