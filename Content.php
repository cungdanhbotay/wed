 <?php
include_once("connection.php");
?>
<hr>
     <div class="slider-area">

			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/nike18.jpg" alt="Slide">
						<div class="caption-group">

					</li>
					<li><img src="img/nike19.jpg" alt="Slide">
						<div class="caption-group">

					</li>
					<li><img src="img/nike21.jpg" alt="Slide">
						<div class="caption-group">

        
    </div>
			
    </div> 
    <hr>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><strong>Product</h2></strong>
                        <div class="product-carousel">
                           <?php

		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { 
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            
                            <div class="single-product">
                                <div class="product-f-imagemu">
                                   <img src="img/<?php echo $row['Pro_image']?>" width="550" height="450">
                                    <div class="product-hover">
                                        <a href="?page=1sanpham&&id=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name' ]?></a>
                                </h2>
                                    
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?>,0$</ins> 
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
  