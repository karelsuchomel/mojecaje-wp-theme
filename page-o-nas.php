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
      <p>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      </p>
      <div class="contact-box left">
        <h2>Opened at</h2>
        <p>
          Po-Pá: 09:00-18:00 <br>
          Sobota: 09:00-12:00
        </p>
      </div>
      <div class="contact-box right">
        <h2>Contact</h2>
        <p>
          Adresa: Radnická 354, Brno<br>
          Telefon: +420 555 333 222<br>
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
