<!-- 

    This is the main page for the website. This website is an e-commerce site where customers can place orders for coffee products
    and/or services.

    We make use of PHP, Bootstrap, jQuery, and JS aside from the obvious HTML/CSS

    Author: Jorge Mario Fernandez

 -->

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
<body class="select_language">

    <div class="container-fluid ">

        <div class="select-lang-text">
            Please choose a language
            <br>
            <br>
            Por favor seleccione un idioma
            <?php echo "testing php!"; ?>
        </div>

        <div class="form-row select-lang-form">

            <form method="post" action="lang.php">
                <!-- move to lang.php which determines language values for the page after, in this case it's home.php -->
                <input type="hidden" name="lang" value="eng">
                <input type="hidden" name="destination" value="home">
                <div class="select-lang-eng">
                    <button type="submit" class="btn btn-warning welcome-banner-button">
                        English
                    </button>
                </div>
            </form>

            <form method="post" action="lang.php">
                <input type="hidden" name="language" value="esp">
                <input type="hidden" name="destination" value="home">
                <div class="select-lang-esp">
                    <button type="submit" class="btn btn-warning welcome-banner-button">
                        Español
                    </button>
                </div>
            </form>

        </div>

        

    </div>

    

    
   
</body>
</html>






