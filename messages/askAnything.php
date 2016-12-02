<div id="message-ask-question-form" class="dim-message-envelope">
  <div class="header">
    <h2>Tvorba otázky</h2>
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
    <div class="individual-step-wrap"><em><strong>1/3</strong> - Jméno, obrázek</em>
      <div class="step-box">
        <label for="nickName">Jméno <span class='asterisk'>*</span></label>
        <input type="text" name="nickName" id="nickName" placeholder="Jak vás můžeme v odpovědi oslovit?" required/>
      </div>
    </div>
    <div class="individual-step-wrap"><em><strong>2/3</strong> - Nadpis, obsah</em>
      <div class="step-box">
        <label for="headline">Nadpis <span class='asterisk'>*</span></label>
        <input type="text" name="headline" id="headline" placeholder='např. "Velké čajové dilema"' required/>
        <label for="question-text">Obsah <span class='asterisk'>*</span></label>
        <textarea type="text" name="question-text" id="question-text" rows="5" placeholder="např. Jak velký hřích je louhovat stejný sáček vícekrát?" required></textarea>
      </div>
    </div>
    <div class="individual-step-wrap"><em><strong>3/3</strong> - Verifikace, e-mail</em>
      <div class="step-box">
        <label for="mail">E-mail</label>
        <input type="e-mail" name="mail" id="mail" placeholder="e-mail na který vás můžeme kontaktovat"/>
        <div style="text-align: center;">
          <div class="g-recaptcha" style="display: inline-block;" data-sitekey="6LfPEhoTAAAAADEKZXY7VVbbn4wg_SASBGsWuLTT"></div>
        </div>
      </div>
    </div>

    <?php require_once('ask_question_form_processor.php'); ?>

    <button type="submit" class="ask-anything">Zveřejnit dotaz</button>
  </form>
</div>
