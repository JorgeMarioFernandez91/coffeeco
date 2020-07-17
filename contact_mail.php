<!-- sends contact message to company, then redirects to a success message screen -->

<?php

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $address = $_POST['address']; 
    $city = $_POST['city'];
    $country = $_POST['country'];
    $body = $_POST['body'];



    $message =  "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Address: " . $address . "\n" .
                "City: " . $city . "\n" .
                "Country: " . $country . "\n" .
                "Body: " . $body;
                
    // echo $message;


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "smtp.hostinger.com";
    $to = "jmferna91@gmail.com, ttlacamila@gmail.com";
    $subject = "Contact Message";
    // $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    // echo "The email message was sent.";
    header("Location: ./contact_success.php");

    // exit();
?>