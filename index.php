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
      <h2>Něco o nás</h2>
      <p>
        Vítejte na stránkách obchodu s přírodními produkty, který má se nachází v samém historickém centru Brna a naši věrní zákazníci u nás nakupují víc než 25 let. V naší nabídce najdete široký sortiment bylinek, produktů tradiční přírodní medicíny a výběrových čajů z Asie.
      </p>
      <h3>Nabízíme:</h3>
      <ul style="margin: 0px;">
        <li>Bylinky sypané a bylinky v nálevkových sáčcích</li>
        <li>Bylinkové speciality Sonnentor, GREŠÍK, Apotheke</li>
        <li>Pravé čaje zelené, černé, bílé i oolongy</li>
        <li>Ovocné čaje, rooibos, maté, cizokrajné speciality</li>
        <li>Prémiové čaje BASILUR - produkty špičkové kvality ze Sri lanky</li>
        <li>Další výběrové značky čaje JAF TEA, DILMAH, SEBASTEA, Tipson a Tarlton</li>
        <li>Anglické čaje PUKKA, THE ENGLISH TEA SHOP,  Tea of life</li>
        <li>Koutek kávy a čokolády v biokvalitě</li>
        <li>SUŠENÉ PLODY, RAW & SUPERPOTRAVINY</li>
        <li>ČAJOVÝ VELEJEMNÝ PORCELÁN</li>
        <li>Polštáře BYLINKOVÉ & POHANKOVÉ</li>
        <li>Aromaterapie a produkty Saloos</li>
      </ul>
      <img src="<?php bloginfo('template_directory'); ?>/img/maps_placeholder.png" alt="Okaz na mapy google">
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
  <div id="thirdh-segment">
    <div class="segment headline">
      <h2>Poradna <br /><span class="smaller">zeptejte se na cokoliv</span></h2>
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
          <div class="question-preview-avatar">
            <div style="background-image: url('../img/miniture_avatar01.png');" class="question-avatar"></div>
            <div class="person-name">Frenk 195</div>
          </div>
          <div class="question-preview-text">
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
              <?php the_content()?>
            <hr><em>15/5/2016</em><em><div class="comment-icon"></div> 15 comments</em>
          </div>
        </div>

        <?php
        endwhile;

      else :
        echo "<p>No content found</p>";

      endif;
      wp_reset_postdata();
      ?>
      <div class="question-gradient-fadeout"></div>
      <div class="dot-dot-dot">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <p class="consult">A dalším 327 chytrých dotazů</p>
      <button onclick="location.href='consulting.html';" class="consult">poradíme</button>
    </div>
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
