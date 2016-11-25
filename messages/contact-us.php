<div id="message-ask-question-form" class="dim-message-envelope">
  <div class="header">
    <h2>Kontaktní formulář</h2>
      <a id="button-close-form" class="close-message-button">
        zavřít
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" enable-background="new 0 0 129 129" class="dim-back-arrow-icon">
          <g>
            <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"></path>
          </g>
      </svg>
      </a>
  </div>

  <!-- for validation, that form was submitted from this page -->
  <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>

  <form method="POST" class="content">
  	<input type="hidden" name="formSended">

    <label for="message-text">Obsah <span class='asterisk'>*</span></label>
    <textarea type="text" name="messageText" id="message-text" rows="5" placeholder="Napsat mi můžete také přímo na: kalasova@mojecaje.cz " required></textarea>

    <label for="sender-mail">E-mail <span class='asterisk'>*</span></label>
    <input type="email" name="senderMail" id="sender-mail" placeholder="Kam vám můžu odpovědět?" required>

    <div style="text-align: center;">
      <div class="g-recaptcha" style="display: inline-block;" data-sitekey="6LfPEhoTAAAAADEKZXY7VVbbn4wg_SASBGsWuLTT"></div>
    </div>

    <?php require_once('send-email-processor.php'); ?>

    <button type="submit" class="ask-anything">Odeslat zprávu</button>
  </form>
</div>
