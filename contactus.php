<?php
  $error = "";
  $successMessage = "";

if ($_POST) {  

    if(!$_POST["email"]) {

        $error .= "Email addess is missing <br/>";
    }
    if(!$_POST["subject"]) {

        $error .= "Subject field is missing <br/>";
    }

    if(!$_POST["content"]) {

        $error .= "Content field is missing <br/>";
    }

    if ($_POST["email"] !== "") {

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "Email Address is not valid";
          } 
    }
 
      if ($error != "" ) {
        $error .=  '<div class="alert alert-danger" role="alert"><strong> There are some error(s)</strong><br/>'. $error . '</div>';
    } else {
        $emailTo = "booking@nexttransfer.co.uk";
        $subject = $_POST["subject"];
        $content = $_POST["content"];
        $headers = "From:" .$_POST["email"];

    }

    if (mail($emailTo, $subject, $content, $headers)) {

        $successMessage = '<div class="alert alert-success" role="alert"><strong> Thank you for contacting us. Our customer service team will get in touch shortly </strong></div>';
    }  else {

        $error .=  '<div class="alert alert-danger" role="alert"><strong> There are some error(s)</strong><br/>'. $error . '</div>';
    }
}

?>    
    
    
    
    