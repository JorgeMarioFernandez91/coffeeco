<?php

    session_start();

    $dest = $_POST['destination'];
    
    $_SESSION['destination'] = $dest;
    
    $lang = $_POST['language'];
    $_SESSION['language'] = $lang;

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
        $_SESSION['service_title'] = "Services";
        
        $_SESSION['service_trillado_title'] = "Peeling";
        $_SESSION['service_trillado_info'] = " We offer peeling services and a selection of mesh nets to fit the specification of our clients.";

        $_SESSION['service_tostion_title'] = "Toasting";
        $_SESSION['service_tostion_info'] = "We believe that a toasting is crucial to bring forth the best attributes and notes of your coffee. In this regard, we
                                             consider ourselves experts in this part of the production chain. We also toast using industry-established best practices 
                                             which guarantee the needs of our clients and the quality of the product.";
        
        $_SESSION['service_empaque_title'] = "Packing";
        $_SESSION['service_empaque_info'] = "We count on different sizes, denominations, characteristics, and quality of packing to guarantee the aroma and freshness of your coffee";


        // about variables
        $_SESSION['about_title'] = "About";
        $_SESSION['about_info_1'] = "Trilladora Y Tostadora La Camila with it's products Granos Y Aroma and Senderos del Cafe, has it's 
                                     origins in the childhood years of it's founders. With roots as coffee farmers and originating from 
                                     El Valle del Cauca, they have dreamt of having a business that offers Colombians the oportunity to enjoy a cup 
                                     of coffee at an affordable price as well as providing employment to local coffee cultivators.";

        $_SESSION['about_info_2'] = "Today we are in the process of making our presence known in the competitive coffee market with the 
                                     certainty and coviction that our business, services, and products are of the highest quality to satisfy 
                                     the needs of our cients. We've come a long way, but we believe the best is yet to come."; 

        // contact variables
        $_SESSION['contact_title'] = "Contact";
        $_SESSION['contact_name'] = "Name";
        $_SESSION['contact_email'] = "Email";
        $_SESSION['contact_address'] = "Address";
        $_SESSION['contact_city'] = "City";
        $_SESSION['contact_country'] = "Country";
        $_SESSION['contact_message'] = "Message";
        $_SESSION['contact_submit'] = "Submit";


    }
    else if ($lang == "esp"){

        $_SESSION['nav_lang'] = "eng";

        // navbar variables
        $_SESSION['nav_home'] = "Inicio";
        $_SESSION['nav_products'] = "Productos";
        $_SESSION['nav_services'] = "Servicios";
        $_SESSION['nav_about'] = "Nosotros";
        $_SESSION['nav_contact'] = "Contacto";

        // welcome banner variables
        $_SESSION['welcome_title'] = "Trilladora Y Tostadora La Camila";
        $_SESSION['learn_more_btn'] = "Aprenda Más";

        // products variables
        $_SESSION['products_title'] = "Productos";
        $_SESSION['products_btn'] = "Ordene Ahora!";

        // services variables
        $_SESSION['service_title'] = "Servicios";

        $_SESSION['service_trillado_title'] = "Trillado";
        $_SESSION['service_trillado_info'] = "Ofrecemos servicio de trilla y seleccion por mallas con especificaciones requeridos por nuestro clientel.";

        $_SESSION['service_tostion_title'] = "Tostion";
        $_SESSION['service_tostion_info'] = "Consideramos que una buena tostion es crucial para resaltar los mejores atributos y notas de tu cafe. 
                                             Nosotros somos especialistas en esta fase de la cadena productivo. Tambien tostamos con base a curvas de tostion que 
                                             garanticen las exigencias de nuestros cliente y la calidad del producto.";
        
        $_SESSION['service_empaque_title'] = "Empaque";
        $_SESSION['service_empaque_info'] = "Contamos con diferentes tamaños, denominaciones, caracteristicas y calidad de empaque para garantizar el 
                                             aroma y frescura de tu cafe.";

        // about variables
        $_SESSION['about_title'] = "Historia";
        $_SESSION['about_info_1'] =  "Trilladora Y Tostadora La Camila con sus productos Granos Y Aroma 
                                    y Senderos del Cafe, tienen su origen en la niñez
                                    de sus creadores quienes siendo caficulatores en el Valle
                                    del Cauca soñaron con tener una empresa que oficiera la opportunidad
                                    a los Colombianos de saborear una taza de cafe a bajo cost y que
                                    proporcionara empleo a los caficultores y estimulando su nivel 
                                    economico.";
        
        $_SESSION['about_info_2'] = "Hoy estamos en el proceso de tener presencia en el 
                                     mercado competido del cafe con la certeza y conviccion que nuestra
                                     empresa, nuestro servicios, y nuestros productos son de alta calidad 
                                     para satisfacer las necesidades de nuestro clientes. Finalmente, 
                                     pensamos que lo mejor esta por llegar.";                            

        // contact variables
        $_SESSION['contact_title'] = "Contacto";
        $_SESSION['contact_name'] = "Nombre";
        $_SESSION['contact_email'] = "Correo Electronico";
        $_SESSION['contact_address'] = "Vivienda";
        $_SESSION['contact_city'] = "Ciudad";
        $_SESSION['contact_country'] = "Pais";
        $_SESSION['contact_message'] = "Mensaje";
        $_SESSION['contact_submit'] = "Envíe";

    }

    // redirect to home.php with these new values 
    // header("Location: ./" . $dest . ".php");
    header("Location: ./home.php");

?>