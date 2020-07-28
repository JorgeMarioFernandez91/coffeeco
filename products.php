
<div id="products" class="container">
    <div class="products-text">
        <?php echo $product_title; ?>
    </div>

    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 carousel-img-1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-img-2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 carousel-img-3">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
    </div>
    <div class="carousel-btn">

        <form method="post" action="lang.php">
        
            <input type="hidden" name="lang" value='<?php $language; ?>' >
            <input type="hidden" name="destination" value="order_prod">
            <div class="select-lang-eng">
                <button type="submit" class="btn btn-dark">
                    <?php echo $product_btn; ?>
                </button>
            </div>

        </form>
    </div>

    
    
    
</div>

