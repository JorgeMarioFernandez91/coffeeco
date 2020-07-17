<!-- sends product order to company, then redirects to a success message screen -->

<?php

    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $address = $_POST['address']; 
    $city = $_POST['city'];
    $country = $_POST['country'];

    $result1 = $_POST['data1-price']; 
    $result2 = $_POST['data2-price']; 
    $result3 = $_POST['data3-price']; 
    $result4 = $_POST['data4-price'];

    $count1 = $_POST['data1-count'];
    $count2 = $_POST['data2-count'];
    $count3 = $_POST['data3-count'];

    // echo $name;
    // echo $email;
    // echo $address;
    // echo $city;
    // echo $country;

    $message =  "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Address: " . $address . "\n" .
                "City: " . $city . "\n" .
                "Country: " . $country . "\n" .
                "Product 1 " . $count1 . " " . $result1 . "\n" .
                "Product 2 " . $count2 . " " . $result2 . "\n" .
                "Product 3 " . $count3 . " " . $result3 . "\n" .
                "Total: " . $result4;
                
    //  echo $message;


    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "smtp.hostinger.com";
    $to = "jmferna91@gmail.com, ttlacamila@gmail.com";
    $subject = "Coffee Order";
    // $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    // echo "The email message was sent.";
    header("Location: ./order_success.php");
?>