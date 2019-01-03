<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


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
</style>






</head>
<body>

  <div id="w">
    <header id="title">
    <center>  <h1>Shopping Cart</h1> </center>
    <?php foreach($sliderlist as $projItem){ ?>
                    <?php if($projItem->productid == $id ){?>
                <?php echo $projItem->price; ?> 
                  <input type="hidden" value="<?php echo $projItem->productid; ?>" name="productid" />
                <input type="hidden" value="<?php echo $projItem->productname; ?>" name="productname" />
                <input type="hidden" value="<?php echo $projItem->price; ?>" name="price;" />
                <input type="hidden" value="<?php echo $projItem->productimg; ?>" name="productimg" />
                <input type="hidden" value="<?php echo $projItem->description; ?>" name="description" />
                
                
               
 <?php } ?>
 <?php } ?>




    <?php
                                      foreach($sliderlist as $projItem){ ?>
                
<div class="column">
    <div class="card">
      
      <img src="<?php echo base_url().$projItem->productimg; ?>" alt="Jane" style="width:100%">
      <div class="container">
      <p>Product Name: <span class="project-name"><?php echo $projItem->productid;?></span></p>
      <p>Product Name: <span class="project-name"><?php echo $projItem->productname;?></span></p>
      <p>Product Price: <span class="project-price"><?php echo $projItem->price;?></span></p>
      <p>Product OfferPrice: <span class="project-offer"><?php echo $projItem->offerprice;?></span></p>
       
        <p><button class="button">Place Order</button></p>
      </div>
    </div>
  </div>
       
                    
                                      <?php } ?>




    </header>
    
</body>


<script>



</script>


</body>
</html>