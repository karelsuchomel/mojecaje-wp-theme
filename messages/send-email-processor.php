<?php
//these keys are different for each domain name.
$publickKeyRecaptcha = '6Lc6iBcTAAAAAI_oJjNuHMXmCnx319L9em1D-e8o';
$secretKeyRecaptcha = '6Lc6iBcTAAAAADzPMlwN1s5SjgXYzoBoGU9JD3Yd';

$messageText;
$senderMail;

if (isset($_POST['formSended'])) {
  global $messageText, $senderMail;
  $messageText = $_POST['messageText'];
  $senderMail = $_POST['senderMail'];

  validateInput();
}

function validateInput() {
  global $messageText, $senderMail;

  if (($messageText == "") || ($senderMail == "")) {
    echo "<strong>Some fields are required, plese fill remaining fields.</strong>";
  }
  else{
    // authenticating reCAPTCHA
    if(isset($_POST['g-recaptcha-response'])){
      $captcha=$_POST['g-recaptcha-response'];
    }
    if(!$captcha){
      echo '<strong>Prosím, zaškrtněte "reCAPTCHA" abychom věděli, že nejste robot.</strong>';
      exit;
    }
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKeyRecaptcha."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    if($response.success==false)
    {
      echo '<strong>Please stop...</strong>';
    } else {

      $to = "kalasova@mojecaje.cz";
      $subject = "z webu mojecaje.cz";
      $headers = "From:" . $senderMail;
      wp_mail($to, $subject, $messageText, $headers);

    }
  }

}

?>
