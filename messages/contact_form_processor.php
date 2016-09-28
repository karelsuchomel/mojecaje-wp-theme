<?php
//these keys are different for each domain name.
$publickKeyRecaptcha = '6Lc6iBcTAAAAAI_oJjNuHMXmCnx319L9em1D-e8o';
$secretKeyRecaptcha = '6Lc6iBcTAAAAADzPMlwN1s5SjgXYzoBoGU9JD3Yd';

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

if (isset($_POST['formSended'])) {
  validateInput();
}

function validateInput() {

  if (($name=="")||($email=="")||($message=="")) {
    echo "Some fields are required, plese fill remaining fields.";
  }
  else{
    // authenticating reCAPTCHA
    if(isset($_POST['g-recaptcha-response'])){
      $captcha=$_POST['g-recaptcha-response'];
    }
    if(!$captcha){
      echo '<h2>Please check the the captcha form.</h2>';
      exit;
    }
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKeyRecaptcha."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
    if($response.success==false)
    {
      echo '<h2>You are spammer</h2>';
    }else
    {


      //wp_insert_post( array $postarr, bool $wp_error = false )
      
    }
  }

}

?>
