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
  <div id="second-segment">
    <div class="segment text padding">
      <?php
      wp_reset_postdata();
      $mainPage = new WP_Query('pagename=hlavni-strana');

      if($mainPage -> have_posts()) :
        while($mainPage -> have_posts()) : $mainPage -> the_post();
        ?>

        <?php the_content() ?>

        <?php endwhile; else:
          endif;
          wp_reset_postdata();
      ?>
      <a href="https://www.google.cz/maps/place/Radnick%C3%A1+383%2F5,+602+00+Brno-st%C5%99ed-Brno-m%C4%9Bsto/@49.1934579,16.6083293,19z/data=!3m1!4b1!4m5!3m4!1s0x47129456d6318b37:0xbef6da1e5504b776!8m2!3d49.193457!4d16.6088765?hl=en" target="_blank" id="map-link">
      <img src="<?php bloginfo('template_directory'); ?>/img/maps_placeholder.png" alt="Okaz na mapy google">
      <div class="message-show-map">
        <h2>zobrazit na mapě</h2>
      </div>
      </a>
      <div class="contact-box left">
        <h2>Otevřeno</h2>
        <p>
          Po-Pá: 09:00-18:00 <br>
          Sobota: 09:00-12:00
        </p>
      </div>
      <div class="contact-box right">
        <h2>Najdete nás</h2>
        <p>
          Adresa: Radnická 5 , 60200 Brno<br>
          Telefon: +420 542 215 706<br>
          GPS: 49°11'36.646"N 16°36'32.037"E<br>
          <a href="https://www.facebook.com/U-Zlat%C3%A9-koruny-1419636828282850/",
          target="_blank">Náš <img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.png">acebook</a>
        </p>
      </div>
      <button id="contact-us-button" class="contact-us">Napište nám</button>
    </div>
  </div>
  <div id="thirdh-segment">
    <div class="segment headline">
      <h2>Poradna</h2><br />
      <span class="smaller">zeptejte se na cokoliv</span>
      <div class="separator"></div>
    </div>
  </div>
  <div id="fourth-segment">
    <div class="segment text">
      <?php
      $posts = new WP_Query('cat=1&posts_per_page=3');

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
        echo "<p>No content found</p>";

      endif;
      wp_reset_postdata();
      ?>
      <p class="consult">A dalším 327 chytrých dotazů</p>
      <button onclick="location.href='/index.php?page_id=6';" class="consult">Poradíme</button>
    </div>

    <?php require_once('newsletter-form.php'); ?>
    
  </div>
</div>

<!-- Messages -->
<!-- Create a question form -->
<?php require_once('messages/contact-us.php'); ?>

<?php

get_footer();

?>
