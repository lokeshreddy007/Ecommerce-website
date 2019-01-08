<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
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
<center>  <h1>Booking</h1> </center>

<!-- <h1 style="float:right">Products</h1> -->

                            
<?php $id = intval($_GET['id']);?>

<?php
$idforsame = array();

?>
                <?php foreach($sliderlist as $user){ ?>
                    <?php if($user->userid == $id ){?>
                      <?php foreach($userproduct as $product){ ?>
                    <?php if($product->userid == $id ){?>
                    <?php if($product->productstratdate == $user->dateone && $product->cartid == $user->id && $product->productenddate == $user->datelast ){?>
                       
                           <?php array_push($idforsame, $user->id) ?>
                        
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                      
                 
                
                        <?php } ?>

<?php } ?>
 


<?php
$allid = array();

?>

<?php foreach($sliderlist as $user){ ?>
                    <?php if($user->userid == $id ){?>

                     <?php array_push($allid, $user->id) ?>
 <?php } ?>
                    <?php } ?>


<?php
 
 $all = array_merge(array_diff($allid, $idforsame), array_diff($idforsame, $allid));
//echo 'hello';
$len = count($all);
?>
<?php $bal=array();?>
<?php foreach($userproduct as $product){ ?>
                    <?php if($product->userid == $id ){?>
                           <?php array_push($bal, $product->finalbal) ?>
                        
                    <?php } ?>
                    <?php } ?>
<?php foreach($getbalance as $user){ ?>
<?php $now = $user->so  ;?>
<?php } ?>
<?php foreach($getspend as $user){ ?>
<?php $nowval = $user->val  ;?>
<?php } ?>

<?php $finalbal = $now - $nowval;?>


 <table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
            <tr>
                 <th>S.NO</th>
                <th>productid</th>
                 <th>produtname</th>
                  <th>productstratdate</th>
                   <th>productenddate</th>
               
                
               
                
                 </tr>
                  <tbody >							
        
        
    <tr>
        <?php $totalsum = array();?>
        <?php 
  $productname = array();
  $productid = array();
  $days= array();
  $price= array();
  $productstart = array();
  $productlast = array();
  $productimg = array();
   $usercartid = array();
   $cartid = array();
  ?>
    <?php $num = 1;?>
            <?php for($i=0;$i <= $len;$i++){?> 
 <?php foreach($sliderlist as $data){ ?>
    <?php if($data->id == $all[$i] ){?>
            <td> <?php echo $num;?> </td>
              <td><?php echo $data->productid; ?> </td>
              <td><?php echo $data->produtname; ?> </td>
              <td><?php echo $data->productstratdate; ?> </td>
               <td><?php echo $data->productenddate; ?> </td>
               <?php $pincode = $data->pincode;?>
             <?php array_push($totalsum, $data->totalprice);?>
                <?php array_push($price, $data->productprice);?>
                <?php array_push($days, $data->days);?>
                 <?php array_push($productname, $data->produtname);?>
               
                 <?php array_push($productid, $data->productid);?>
                <?php array_push($usercartid, $data->id);?>
              
                 <?php array_push($productimg, $data->productimg);?>
               <?php array_push($cartid, $data->id);?>
              
                 <?php array_push($productstart, $data->productstratdate);?>
              
                 <?php array_push($productlast, $data->productenddate);?>
               
               

           
              <?php $num = $num+1;?>
                                            </tr>
              <?php } ?>
              <?php } ?>
                                              <?php } ?>
             
    
            
    
    
            </tbody> 

            <?php      print_r($productname)?>
    </table>

<?php
  $productnameall = join(',', $productname);
echo $productnameall;
$productidall = join(',', $productid);
echo $productidall;
$productstartall = join(',', $productstart);
echo $productstartall;
$productlastall = join(',', $productlast);
echo $productlastall;
$productimgall = join(',', $productimg);
echo $productimgall;
$daysall = join(',', $days);
echo $daysall;
$priceall = join(',', $price);
echo $priceall;
$cartidall = join(',', $cartid);
echo $cartidall;

?>

<?php

echo "<br/>";
echo $pincode;
//echo $productidall;
//echo $productnameall;
$lencart = count($usercartid);

?>
<?php
$vendorid = array();
$vendorname= array();
?>

<?php for($i=0;$i <= $lencart;$i++){?> 
<?php foreach($sliderlist as $data){ ?>
    <?php if($data->id == $usercartid[$i] ){?>
<?php foreach ($vendordetails as $value) {?>  
     <?php if($data->pincode == $value->pincode && $value->product ==$data->produtname ){?>
     <?php array_push($vendorid,$value->vendorid )?>
<?php array_push($vendorname,$value->vendorname )?>
<?php array_push($vendorid,$value->vendorid )?>
     <?php echo $value->vendorid;?>
  
<?php  } ?>
<?php  } ?>
<?php  } ?>
<?php  } ?>
<?php  } ?>
 <?php print_r($vendorid);?>
     
    
 <?php
 $vendoridall = join(',', $vendorid);
echo $vendoridall;
 $vendornameall = join(',', $vendorname);
echo $vendornameall;

?>
 

  <?php $priceval =   array_sum($totalsum); ?>
  <?php $balval =   $finalbal;?>
                                    

             <p>Total Products Price of the Product: <span class="project-price"><?php echo $priceval ;?></span></p>
              <p>Total Price in Wallet : <span class="project-price"><?php echo $balval ;?></span></p>
                                        
             <?php if ($balval < $priceval) { ?>
           <?php  echo "" ; ?>
               <a href="<?php echo base_url();?>Managementcontrol/payment?id=<?php echo $id;?>"><span>pls add moeny to wallet </span></a>
             <?php  } ?>
              <?php if ($balval >= $priceval) { ?>
                <?php  echo "good pay amount" ; ?>
               <span>Conform Book </span>
 <?php  } ?>
                                   
                                          
      </div>
    </div>
    </div>
  </div>   
  
  <?php foreach($sliderlist as $user){ ?>
                    <?php if($user->userid == $id) {?> 
                     
                        <?php $userid =  $user->userid;?>
                        <?php $username =  $user->username;?>
                        <?php $usermail =  $user->usermail;?>
                       <?php $phonenum =  $user->phonenum;?>
                        <?php $productprice =  $user->usermail;?>
                      
                        
                        
                        <?php } ?>
 <?php } ?>
  <?php
date_default_timezone_set('Asia/Kolkata');
$idval = date('dmYHis');
$rest = substr("$phonenum",6);
echo $rest;
echo "<br/>";
$idall = $rest.$idval;
echo $idall;
   
?>

  <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/Finalbooking" method="post">
  <input type="hidden" id =""  value="<?php echo $userid; ?>" name="userid"  />
<input type="hidden" id =""   value="<?php echo $username ?>" name="username"  />
<input type="hidden" id =""   value="<?php echo $usermail ?>" name="usermail"  />

<input type="hidden" id =""  value="<?php echo $productidall; ?>" name="$productidall"  />
<input type="hidden" id =""   value="<?php echo $productnameall ?>" name="$productnameall"  />
<input type="hidden" id =""  value="<?php echo $priceval ?>" name="productprice"  />
<input type="hidden" id =""   value="<?php echo $balval ?>" name="balval"  />
<input type="hidden" id =""   value="<?php echo $productstartall ?>" name="$productstartall"  />
<input type="hidden" id =""   value="<?php echo $productlastall ?>" name="$productlastall"  />
<input type="hidden" id =""   value="<?php echo $productimgall ?>" name="productimgall"  />
<input type="hidden" id =""   value="<?php echo $idall ?>" name="transidall"  />

<!--need to change price and total price-->
<input type="hidden" id =""   value="<?php echo $priceall ?>" name="priceall"  />
<input type="hidden" id =""   value="<?php echo $cartidall ?>" name="$cartidall"  />

<input type="hidden" id =""   value="<?php echo $daysall ?>" name="days"  />
<input type="hidden" id =""   value="<?php echo $vendoridall ?>" name="vendoridall"  />
<input type="hidden" id =""   value="<?php echo $vendornameall ?>" name="vendornameall"  />
<input type="hidden" id =""   value="<?php echo $pincode ?>" name="pincode"  />
<input type="hidden" id =""   value="<?php echo $phonenum ?>" name="phonenum"  />




<!--need parameter vendorid,name,pincode,-->

<?php
$walletbal = $balval - $priceval;
?>
<input type="hidden" id =""  value="<?php echo $walletbal ?>" name="finalbal"  />

<button type="submit" id="payment" class="btn btn-primary">Final Booking</button>
<button  id="addWallet" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/payment?id=<?php echo $id;?> '" style="text-align: center;" type="button" class="btn btn-primary">Wallet</button>

 
  </form>    
  <script>
  $(document).ready(function() {
    document.getElementById("addWallet").disabled = true;
    document.getElementById("payment").disabled = true;
    var productprice = <?php echo $priceval;?>;
    var balval = <?php echo $balval;?>;
    console.log(productprice);
    console.log(balval);
    if(balval < productprice){
      document.getElementById("addWallet").disabled = false;
      console.log(productprice)
    }else{
      document.getElementById("payment").disabled = false;
      console.log(balval);
    }


});
/*sadfs
1. make the technology used part font same in all palce
2.number in certificate is worng
3.in skills in spacing is more in php and mysql ,html&css
python part
f*/
  </script>                      
   
</body>
</html>



