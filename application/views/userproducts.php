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
<center>  <h1>User Booking Products</h1> </center>

<!-- <h1 style="float:right">Products</h1> -->


<?php 
 $url = $_SERVER["REQUEST_URI"];
// print_r($url);
$arr = explode("=",$url);
// print_r($arr);
 $now = $arr;
 $len = count($now);
// echo $len;
 $val = $len -1;
$valfinal = $arr[$val];
echo $valfinal;
      ?>                                 

<?php
$totalsum= array();

?>
<?php $id = intval($_GET['id']);?>

    <?php $bal = array();?>
     <?php foreach($userwallet as $user){ ?>
                    <?php if($user->userid == $id) {?>
                        <?php array_push($bal,$user->amount);?>
                        <?php } ?>
 <?php } ?>


 <?php foreach($userdata as $user){ ?>
                    <?php if($user->iduf == $id) {?> 
                      <?php $name =  $user->iduf;?>
                        <?php $userid =  $user->a;?>
                        <?php $username =  $user->a;?>
                        <?php $usermail =  $user->c;?>
                    
                     
                        
                        <?php } ?>
 <?php } ?>

 <?php $id = intval($_GET['id']);
 echo $id;

 ?>


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
    <?php $num = 1;?>
            <?php foreach($usercart as $data){ ?>
              <?php if($data->userid == $id ){?>
            <td> <?php echo $num;?> </td>
              <td><?php echo $data->productid; ?> </td>
              <td><?php echo $data->productname; ?> </td>
              <td><?php echo $data->dateone; ?> </td>
             
              <td><?php echo $data->datelast; ?> </td>
              <?php $num = $num+1;?>
                                            </tr>
              <?php } ?>
              <?php } ?>
             
    
            
    
    
            </tbody>  
    </table>
   

  <!-- <form class="form-horizontal" action="<?php echo base_url();?>Managementcontrol/Finalbooking" method="post">
  <input type="hidden" id =""  value="<?php echo $userid; ?>" name="userid"  />
<input type="hidden" id =""   value="<?php echo $username ?>" name="username"  />
<input type="hidden" id =""  value="<?php echo $usermail ?>" name="usermail"  />
<input type="hidden" id =""  value="<?php echo $productid; ?>" name="productid"  />
<input type="hidden" id =""   value="<?php echo $produtname ?>" name="produtname"  />
<input type="hidden" id =""  value="<?php echo $priceval ?>" name="productprice"  />
<input type="hidden" id =""   value="<?php echo $balval ?>" name="balval"  />
<?php
$walletbal = $balval - $priceval;
?>
<input type="hidden" id =""  value="<?php echo $walletbal ?>" name="finalbal"  />

<button type="submit" id="payment" class="btn btn-primary">Final Booking</button>
<button  id="addWallet" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/payment?id=<?php echo $userid;?> '" style="text-align: center;" type="button" class="btn btn-primary">Wallet</button>

<!-- <button type="submit" class="btn btn-primary">Wallet</button> -->
 
  </form>     -->
                  
   
</body>
</html>



