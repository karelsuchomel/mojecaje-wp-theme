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
      <button class="ask-anything" id="button-show-form">Nová otázka</button>
      <li><a href="#"> Nejnovější </a></li>
      <li><a href="#"> Nejčtenější </a></li>
      <li><a href="#" class="last"> Doporučené </a></li>
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
              <?php the_content()?>
            </p>
            <hr/>
            <em><?php the_date();?></em>
            <em><?php comments_number('', '<div class="comment-icon"></div>1 komentář', '<div class="comment-icon"></div>% komentářů');?></em>
            <em><?php the_author();?></em>
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
  <div class="segment footer clear-both">
    <form id="newsletter-form" method="POST" action="">
      <h3>Máte zájem o náš newsletter?</h3>
      <label id="label-email" for="input-email">Váš e-mail</label>
      <input type="email" name="email" id="input-email" placeholder="" aria-describedby="" required="required" aira-required="true"/><em id="em-email" class="input-note">Zprávy posíláme 2 - 4 ktrát měsíčně.</em>
      <button type="submit">Přihlásit</button>
    </form>
  </div>
  <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</div>
</div>

<!-- Messages -->
<!-- Create a question form -->
<?php require_once('messages/askAnything.php'); ?>

<?php

get_footer();

?>
