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
      <button onclick="dimMessage('contactUs')" class="contact-us">Napište nám</button>
    </div>
  </div>
  <div id="fourth-segment">
    <div class="segment footer clear-both">
      <form id="newsletter-form" method="POST" action="">
        <h3>Máte zájem o náš newsletter?</h3>
        <label id="label-email" for="input-email">Váš e-mail</label>
        <input type="email" name="email" id="input-email" placeholder="" aria-describedby="" required aira-required="true"><em id="em-email" class="input-note">Zprávy posíláme 2 - 4 ktrát měsíčně.</em>
        <button type="submit">Přihlásit</button>
      </form>
    </div>
  </div>
</div>
<?php

get_footer();

 ?>
