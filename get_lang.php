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
    $service_title = $_SESSION['service_title'];
    $service_trillado_title = $_SESSION['service_trillado_title'];
    $service_trillado_info = $_SESSION['service_trillado_info'];
    $service_tostion_title = $_SESSION['service_tostion_title'];
    $service_tostion_info = $_SESSION['service_tostion_info'];
    $service_empaque_title = $_SESSION['service_empaque_title'];
    $service_empaque_info = $_SESSION['service_empaque_info'];

    // about variables
    $about_title = $_SESSION['about_title'];
    $about_info_1 = $_SESSION['about_info_1'];
    $about_info_2 = $_SESSION['about_info_2'];

    // contact variables
    $contact_title = $_SESSION['contact_title'];
    $contact_name = $_SESSION['contact_name']; 
    $contact_email = $_SESSION['contact_email']; 
    $contact_address = $_SESSION['contact_address'];
    $contact_city = $_SESSION['contact_city']; 
    $contact_country = $_SESSION['contact_country']; 
    $contact_message = $_SESSION['contact_message']; 
    $contact_submit = $_SESSION['contact_submit'];

?>