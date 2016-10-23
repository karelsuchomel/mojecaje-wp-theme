<?php

get_header();

 ?>
<div id="content">
  <div id="first-segment">
    <?php include('main_menu.php') ?>
  </div>
  <div id="second-segment">
    <div class="segment text padding" style="margin-top: 100px;">
      <!-- Title -->
      <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
        <h2>Naše nabídka</h2>
      <?php endif; ?>

      <?php do_action( 'woocommerce_archive_description' ); ?>

      <!-- main loop -->
      <?php if ( have_posts() ) : ?>
        <?php do_action( 'woocommerce_before_shop_loop' ); ?>
        <?php woocommerce_product_loop_start(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php wc_get_template_part( 'content', 'product' ); ?>
      <?php endwhile;?>
      <?php woocommerce_product_loop_end(); ?>
      <!-- end of a loop -->

      <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

      <?php wc_get_template( 'loop/no-products-found.php' ); ?>

      <?php endif; ?>
      <!-- Sidebar -->
      <?php
        do_action( 'woocommerce_sidebar' );
      ?>
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
