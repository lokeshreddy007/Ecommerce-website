<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">



<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 24.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #11b3e0;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}


input.MyButton {
width: 250px;
padding: 7px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #2196f3;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}
</style>


</head>
<body>
<center>
<input class="MyButton" type="button" value="Daily Products" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/DailyProducts'" />

<input class="MyButton" type="button" value="Vegatables" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/getvegtables'"/>


<input class="MyButton" type="button" value="Others" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/getvegtables'" />
</center>
<center>  <h1>Products</h1> </center>

<!-- <h1 style="float:right">Products</h1> -->

<?php
                                      foreach($sliderlist as $projItem){ ?>
                
<div class="column">
    <div class="card">
      <img src="<?php echo base_url().$projItem->productimg; ?>" alt="Jane" style="width:100%">
      <div class="container">
      <p>Product Name: <span class="project-name"><?php echo $projItem->productname;?></span></p>
      <p>Product Price: <span class="project-price"><?php echo $projItem->price;?></span></p>
      <p>Product OfferPrice: <span class="project-offer"><?php echo $projItem->offerprice;?></span>
            <button  onclick="location.href='<?php echo base_url();?>Managementcontrol/bookproductone?id=<?php echo $projItem->productid; ?>'" type="button">Booking</button> </p>


      <button class="button" onclick="location.href='<?php echo base_url();?>Managementcontrol/getthisproducts?id=<?php echo $projItem->productid; ?>'" type="button">Subscribe</button> 
       
        <!-- <p><button class="button">Add To Cart</button></p> -->
      </div>
    </div>
  </div>
       
                    
                                      <?php } ?>





</body>
</html>



