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

/* #mydiv {
    position:absolute;
    top: 100%;
    left: 50%;
    width:30em;
    height:7em;
    margin-top: -9em; /*
    margin-left: -15em; 
    border: 1px solid #ccc;
    background-color: #f3f3f3;
} */

#footer{
    background-color:#fff;
    top: 100%;
    font:bold 14px;
    color:#1E88E5;
    width:100%;
    height:auto;
    padding:1%;
    border-top:1px solid #1E88E5;

}




</style>
</head>
<body>
<center>  <h1>Cart</h1> </center>

<!-- <h1 style="float:right">Products</h1> -->



<?php $id = intval($_GET['id']);

?>

<?php
$idforsame = array();

?>
                <?php foreach($usercart as $user){ ?>
                    <?php if($user->userid == $id ){?>
                      <?php foreach($userproductcheck as $product){ ?>
                    <?php if($product->userid == $id ){?>
                    <?php if($product->productstratdate == $user->dateone && $product->cartid  == $user->id && $product->productenddate == $user->datelast ){?>
                       
                           <?php array_push($idforsame, $user->id) ?>
                           <?php echo $user->id;?>
                             <?php echo "<br/>"?>
                        
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                      
                 
                
                        <?php } ?>

<?php } ?>
 


<?php
$allid = array();

?>

<?php foreach($usercart as $user){ ?>
                    <?php if($user->userid == $id ){?>

                     <?php array_push($allid, $user->id) ?>
 <?php echo $user->id;?>
 <?php } ?>
                    <?php } ?>

<?php // print_r($idforsame);?>
<?php // print_r($allid);?>
<?php
 
 $all = array_merge(array_diff($allid, $idforsame), array_diff($idforsame, $allid));
//print_r($all); 
//echo 'hello';
$len = count($all);
?>
<?php $totalsum = array();?>

    <?php for($i=0;$i <= $len;$i++){?> 
 <?php foreach($usercart as $user){ ?>
    <?php if($user->id == $all[$i] ){?>
 <?php $name =  $user->produtname;?>
<?php $price =  $user->productprice;?>


<?php array_push($totalsum, $user->productprice);?>
                                        
                                                      
                
<div class="column">
    <div class="card">
      <img src=" <?php echo base_url().$user->productimg; ?>" alt="Jane" style="width:100%">
      <div class="container">
      <p>Product Name: <span class="project-name"><?php echo $name;?></span></p>
      <p>Product Price: <span class="project-price"><?php echo $price ;?></span></p>   
      </div>
    </div>
  </div>
  
                    
                                    
       
<?php } ?>
                    <?php } ?>     
 <?php } ?>     
      <?php $priceval =   array_sum($totalsum); ?>
          <div class="column">
    <div class="card">
    
   
    <div id="mydiv">

      <div class="container">
     
     
                                  
                                      <p>Total Products Price: <span class="project-price"><?php echo $priceval ;?></span></p>  



      <button class="button" onclick="location.href='<?php echo base_url();?>Managementcontrol/buyproduct?id=<?php echo $id ; ?>'" type="button">Place Order</button> 
       

      </div>
    </div>
    </div>
  </div>   

 
  <script>

  </script>                      
   
</body>
</html>

