<!-- retrieves data values from previous page's post -->
<?php
    // make sure session starts before everything else
    session_start();

    // language variable
    $language = $_SESSION['language'];

    $dest = $_SESSION['destination'];

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