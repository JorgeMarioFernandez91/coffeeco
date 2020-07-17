<?php

    session_start();

    $lang = $_POST['lang'];

    if ($lang == "eng"){

        // navbar variables
        $_SESSION['nav_home'] = "Home";
        $_SESSION['nav_products'] = "Products";
        $_SESSION['nav_services'] = "Services";
        $_SESSION['nav_about'] = "About";
        $_SESSION['nav_contact'] = "Contact";

        // welcome banner variables
        $_SESSION['welcome_title'] = "Thresher and Toaster La Camila";
        $_SESSION['learn_more_btn'] = "Learn More";

        // products variables
        $_SESSION['products_title'] = "Products";
        $_SESSION['products_btn'] = "Order Now!";

        // services variables

        // about variables

        // contact variables

    }
    else if ($lang == "esp"){

        // navbar variables
        $_SESSION['nav_home'] = "Inicio";
        $_SESSION['nav_products'] = "Productos";
        $_SESSION['nav_services'] = "Servicios";
        $_SESSION['nav_about'] = "Nosotros";
        $_SESSION['nav_contact'] = "Contacto";

        // welcome banner variables
        $_SESSION['welcome_title'] = "Trilladora Y Tostadora La Camila";
        $_SESSION['learn_more_btn'] = "Aprende Más";

        // products variables
        $_SESSION['products_title'] = "Productos";
        $_SESSION['products_btn'] = "Ordene Ahora!";

        // services variables

        // about variables

        // contact variables
    }

    // redirect to home.php with these new values 
    header("Location: ./order_prod.php");

?>