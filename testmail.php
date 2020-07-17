<!-- tests the mail functionality -->

<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "smtp.hostinger.com";
    $to = "jmferna91@gmail.com, ttlacamila@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>