<?php

get_header();

 ?>
<div id="content">
  <div id="first-segment">
    <?php include('main_menu.php') ?>
    <div class="segment headline-bg about-us">
    </div>
  </div>
  <div id="second-segment">
    <div class="segment text padding">
      <h2>O nás</h2>

      <?php 
      if(have_posts()) :
        while(have_posts()) : the_post();
        ?>
        <?php the_content() ?>

        <?php endwhile; else:
          endif;
      ?>

      <style>
        img{
          display: inline-block;
          max-width: 282px;
        }

      </style>

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
        </p>
      </div>
      <button  id="contact-us-button" class="contact-us">Napište nám</button>
    </div>
  </div>
  <div id="fourth-segment">

  <?php require_once('newsletter-form.php'); ?>

  </div>
</div>

<!-- Messages -->
<!-- Create a question form -->
<?php require_once('messages/contact-us.php'); ?>

<?php

get_footer();

 ?>
