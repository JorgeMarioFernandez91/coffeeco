<?php
    // make sure session starts before everything else
    session_start();

    // language variable
    $language = $_SESSION['language'];

    // navbar variables
    $nav_home = $_SESSION['nav_home'];
    $nav_products = $_SESSION['nav_products'];
    $nav_services = $_SESSION['nav_services'];
    $nav_about = $_SESSION['nav_about'];
    $nav_contact = $_SESSION['nav_contact'];

    // welcome banner variables
    $welcome = $_SESSION['welcome_title'];
    $learn_more_btn = $_SESSION['learn_more_btn'];

    // products variables
    $product_title = $_SESSION['products_title'];
    $product_btn= $_SESSION['products_btn'];

    // services variables
    $service_title = $_SESSION[''];

    // about variables

    // contact variables
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TT La Camila.</title>

    <link href="style" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script> <?php echo file_get_contents('scripts.js'); ?> </script>
    <style> <?php include 'style.css'; ?> </style>

</head>
<body>
    
    <?php include "navbar.php"; ?>
    <?php include "welcome_banner.php"; ?>
    <?php include "products.php"; ?>
    <?php include "services.php"; ?>
    <?php include "about.php"; ?>
    <?php include "contact.php"; ?>
   
</body>
</html>
