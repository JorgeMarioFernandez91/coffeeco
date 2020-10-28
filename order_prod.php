<?php include 'get_lang.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT La Camila.</title>
    <link href="style" type="text/css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
   
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

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
<body >
    <?php include "navbar.php"; ?>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coffee";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // SELECT... LIMIT (skip, show);         
        $sql = "SELECT * FROM products LIMIT 1";
        $result = $conn->query($sql);
        $prod_1 = $result->fetch_assoc();

        $sql = "SELECT * FROM products LIMIT 1,1";
        $result = $conn->query($sql);
        $prod_2 = $result->fetch_assoc();

        $sql = "SELECT * FROM products LIMIT 2,1";
        $result = $conn->query($sql);
        $prod_3 = $result->fetch_assoc();

        $conn->close();
    ?> 

    <div class="row no-gutters checkout-row-frmt">
        <div class="col-md-8 container">
            
            <div class="card mb-3 product-card-spacing" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="product-1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod_1["name"]; ?></h5>
                            <p class="card-text">100% Colombian premium quality coffee</p>
                            <p>Peeled and roasted</p>
                            <p>Net weight: <?php echo $prod_1["weight"]; ?> g</p>
                            <div class="row no-gutters ">
                                <p>$</p>
                                <p id="cost_prod1"><?php echo $prod_1["price"]; ?></p>
                            </div>
                            
                        </div>

                        <div class="text-center prod-bttn-spacing">

                            <?php
                                echo '<button type="button" class="btn btn-secondary" id="minus1" onclick="buttonClick(this.id, \'' . $prod_1["name"] . '\', \'count1\', \'prod1\')">-</button>';

                                echo '<input type="text" id="count1" value="0"></input>';

                                echo '<button type="button" class="btn btn-secondary" id="plus1" 
                                    onclick="buttonClick(this.id, \'' . $prod_1["name"] . '\', \'count1\', \'prod1\')">+</button>';
                            ?>
                                
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card mb-3 product-card-spacing" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="product-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod_2["name"]; ?></h5>
                            <p class="card-text">100% Colombian premium quality coffee</p>
                            <p>Peeled and roasted</p>
                            <p>Net weight: <?php echo $prod_2["weight"]; ?> g</p>
                            <div class="row no-gutters ">
                                <p>$</p>
                                <p id="cost_prod2"><?php echo $prod_2["price"]; ?></p>
                            </div>
                        </div>

                        <div class="text-center prod-bttn-spacing">

                            <?php
                                echo '<button type="button" class="btn btn-secondary" id="minus2"
                                    onclick="buttonClick(this.id, \'' . $prod_2["name"] . '\', \'count2\', \'prod2\')">-</button>';

                                echo '<input type="text" id="count2" value="0"></input>';

                                echo '<button type="button" class="btn btn-secondary" id="plus2" 
                                    onclick="buttonClick(this.id, \'' . $prod_2["name"] . '\', \'count2\', \'prod2\')">+</button>';
                            ?>

                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="card mb-3 product-card-spacing" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="product-3">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod_3["name"]; ?></h5>
                            <p class="card-text">100% Colombian premium quality coffee</p>
                            <p>Peeled and roasted</p>
                            <p>Net weight: <?php echo $prod_3["weight"]; ?> g</p>
                            <div class="row no-gutters ">
                                <p>$</p>
                                <p id="cost_prod3"><?php echo $prod_3["price"]; ?></p>
                            </div>
                        </div>

                        <div class="text-center prod-bttn-spacing">

                            <?php
                                echo '<button type="button" class="btn btn-secondary" id="minus3"
                                    onclick="buttonClick(this.id, \'' . $prod_3["name"] . '\', \'count3\', \'prod3\')">-</button>';

                                echo '<input type="text" id="count3" value="0"></input>';

                                echo '<button type="button" class="btn btn-secondary" id="plus3" 
                                    onclick="buttonClick(this.id, \'' . $prod_3["name"] . '\', \'count3\', \'prod3\')">+</button>';
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 container">
            <div id="cart">
                <ul class="list-group product-card-spacing" >
                    
                    <li class="list-group-item" >
                        Items: 
                        
                        <div class="row no-gutters">
                            <div class="col-sm-4">
                                <p id="item_prod1"></p> 
                            </div>
                            <div class="col-sm-4">
                                <p id="total_prod1"></p>
                            </div>
                            <div class="col-sm-4">
                                <p id="price_prod1"></p>
                            </div>
                            
                        </div>       

                        <div class="row no-gutters">
                            <div class="col-sm-4">
                                <p id="item_prod2"></p> 
                            </div>
                            <div class="col-sm-4">
                                <p id="total_prod2"></p>
                            </div>
                            <div class="col-sm-4">
                                <p id="price_prod2"></p>
                            </div>
                        </div> 

                        <div class="row no-gutters">
                            <div class="col-sm-4">
                                <p id="item_prod3"></p> 
                            </div>
                            <div class="col-sm-4">
                                <p id="total_prod3"></p>
                            </div>
                            <div class="col-sm-4">
                                <p id="price_prod3"></p>
                            </div>
                        </div>    
                        
                    </li>
                    
                    <li class="list-group-item">

                        <div class="row no-gutters">
                            <div class="col-sm-8">
                                <p>Total:</p> 
                            </div>
                            <div class="col-sm-4">
                                <p id="total_cost"></p>
                            </div>
                        </div> 
                    </li>
                </ul>
            
                <div class="contianer text-center">
                    
                    <form type="hidden" method="post" name="form" action="check_out.php"> 

                        <input type="hidden" name="data1-price" id="data1-price" value="0"> 
                        <input type="hidden" name="data1-count" id="data1-count" value="0">

                        <input type="hidden" name="data2-price" id="data2-price" value="0"> 
                        <input type="hidden" name="data2-count" id="data2-count" value="0">

                        <input type="hidden" name="data3-price" id="data3-price" value="0"> 
                        <input type="hidden" name="data3-count" id="data3-count" value="0">

                        <input type="hidden" name="data4-price" id="data4-price" value="0"> 

                        <input type="hidden" name="destination" value="check_out">

                        <input class="checkout-btn btn btn-dark" onclick="passIt()" type="submit" value="Submit"> 

                    </form>  
                    
                </div>

                </div>
            </div>
        </div>

</body>
</html>


    
