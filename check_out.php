<?php
    session_start();

    // language variable
    $language = $_SESSION['language'];

    // navbar variables
    $nav_home = $_SESSION['nav_home'];
    $nav_products = $_SESSION['nav_products'];
    $nav_services = $_SESSION['nav_services'];
    $nav_about = $_SESSION['nav_about'];
    $nav_contact = $_SESSION['nav_contact'];

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
   
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>

    <script>
        <?php echo file_get_contents('scripts.js'); ?>
    </script>
    <style>
        <?php include 'style.css'; ?>
    </style>

</head>
<body>

    <?php include "navbar.php"; ?>

    <div class="row justify-content-center checkout-row-frmt">

        <div class="container col-12 col-md-6">
            <?php 

                $result1 = $_POST['data1-price']; 
                $result2 = $_POST['data2-price']; 
                $result3 = $_POST['data3-price']; 
                $result4 = $_POST['data4-price'];

                $count1 = $_POST['data1-count'];
                $count2 = $_POST['data2-count'];
                $count3 = $_POST['data3-count'];

            ?> 

            <div class="checkout-summary">
            <div class="row no-gutters ">
                
                <p>La Camila 
                    <div class="checkout-count-frmt-1"><?php echo $count1 ?></div>
                    <div class="checkout-price-frmt"><?php echo $result1 ?></div> 
                </p>
            
                </div>
                <div class="row no-gutters">
                    
                        <p>La Amarilla
                            <div class="checkout-count-frmt-2"><?php echo $count2 ?></div>
                            <div class="checkout-price-frmt"><?php echo $result2 ?></div> 
                        </p>
                    
                </div>
                <div class="row no-gutters">
                    
                        <p>Don Marco
                        <div class="checkout-count-frmt-3"><?php echo $count3 ?></div>
                            <div class="checkout-price-frmt"><?php echo $result3 ?></div> 
                        </p>
                    
                </div>
                <div class="row no-gutters">
                    
                        <p>Total:
                            <div class="checkout-total-frmt"><?php echo $result4 ?></div> 
                        </p>
                    
                </div>

            </div>

        </div>
        
        <div class="col-12 col-md-6">
            <form class="checkout" method="post" action="checkout_mail.php">

                <div class="form-row align-items-center ">
                    <label for="formGroupInput">Name</label>
                    <input type="text" class="form-control" id="formGroupInput" name="name" value="" placeholder="John Doe" required>
                    
                    
                    <label for="formGroupInput2">Email</label>
                    <input type="email" class="form-control" id="formGroupInput2" name="email" value="" placeholder="123@email.com" required>
                    
                </div>
                <div class="form-row align-items-center">
                    <div class="col">
                        <label for="formGroupInpu3t">Address</label>
                        <input type="text" class="form-control" id="formGroupInput3" name="address" value="" placeholder="1234 Main St" required>
                    </div>
                </div>
                <div class="form-row align-items-center">
                    <div class="col-sm-4">

                        <label for="formGroupInput4">City</label>
                        <input type="text" class="form-control" id="formGroupInput4" name="city" value="" placeholder="" required>

                    </div>
                    <div class="col-sm-4">
                    
                        <label for="formGroupInput5">Country</label>
                        <input type="text" class="form-control" id="formGroupInput5" name="country" value="" placeholder="" required>
                    
                    </div>
                    
                    <?php
                        echo '<input type="hidden" name="data1-price" id="data1-price" value="' . $result1 . '">';
                        echo '<input type="hidden" name="data1-count" id="data1-count" value="' . $count1 . '">';

                        echo '<input type="hidden" name="data2-price" id="data2-price" value="' . $result2 . '">';
                        echo '<input type="hidden" name="data2-count" id="data2-count" value="' . $count2 . '">';

                        echo '<input type="hidden" name="data3-price" id="data3-price" value="' . $result3 . '">';
                        echo '<input type="hidden" name="data3-count" id="data3-count" value="' . $count3 . '">';

                        echo '<input type="hidden" name="data4-price" id="data4-price" value="' . $result4 . '">';
                    ?>

                </div>
                <div class="form-row align-items-center checkout-btn-format">
                    <input class="checkout-btn btn btn-dark" type="submit" value="Submit"> 
                </div>
                
                

            </form>
            
        </div>

    </div>

</body>
</html>
