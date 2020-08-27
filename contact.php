<div id="contact">
    <div class="container contact-text">
        <?php echo $contact_title; ?>
    </div>

    <div class="container">

        <form class="checkout" method="post" action="contact_mail.php">

            <div class="form-row align-items-center ">
                <label for="formGroupInput"><?php echo $contact_name ?></label>
                <input type="text" class="form-control" id="" name="name" value="" placeholder="John Doe" required>
                
                
                <label for="formGroupInput"><?php echo $contact_email ?></label>
                <input type="email" class="form-control" id="" name="email" value="" placeholder="123@email.com" required>
                
            </div>
            <div class="form-row align-items-center">
                <div class="col">
                    <label for="formGroupInput"><?php echo $contact_address ?></label>
                    <input type="text" class="form-control" id="" name="address" value="" placeholder="1234 Main St" required>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col-sm-4">

                    <label for="formGroupInput"><?php echo $contact_city ?></label>
                    <input type="text" class="form-control" id="" name="city" value="" placeholder="" required>

                </div>
                <div class="col-sm-4">
                
                    <label for="formGroupInput"><?php echo $contact_country ?></label>
                    <input type="text" class="form-control" id="" name="country" value="" placeholder="" required>
                
                </div>

            </div>

            <div class="form-row align-items-center">
                <div class="col-12">
                
                    <label for="exampleFormControlTextarea1"><?php echo $contact_message ?></label>
                    <textarea class="form-control" id="" name="body" rows="3" value="" required></textarea>
                </div>
            </div>

            <div class="form-row align-items-center contact-btn">
                <input class="checkout-btn btn btn-dark"  type="submit" value='<?php echo $contact_submit ?>'> 
            </div>
       

        </form>
    <br>
    <br>
    <br>
</div>

