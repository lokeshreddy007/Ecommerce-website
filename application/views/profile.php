<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>profile</title>
<style>
    .details li {
      list-style: none;
    }
    li {
        margin-bottom:10px;
    }
   .tital{
       text-align:right;
   }
   .contant_i{
        color: #631e1e;
        border-bottom: 1px solid #cea7a7;
   }

</style>

</head>
<body>
    
 <?php $id = intval($_GET['id']);?>


<?php foreach($cal as $user){ ?>
 <?php if($user->userid == $id) {?> 
    
 <?php array_push($array, $id)  ;?> 
                            
 <?php } ?>
 <?php } ?>
    
    <?php foreach($booked as $user){ ?>
 <?php if($user->iduf == $id) {?> 
    
 <?php } ?>
 <?php } ?>
<?php foreach($usercart as $user){ ?>
                    <?php if($user->iduf == $id) {?> 
                      <?php $userid =  $user->iduf;?>
                        <?php $username =  $user->a;?>
                        <?php $usersname =  $user->b;?>
                        <?php $email =  $user->c;?>
                        <?php $flatno =  $user->d;?>
                        <?php $phone =  $user->g;?>

                    
                     
                        
                        <?php } ?>
 <?php } ?>




<!------ Include the above in your HEAD tag ---------->

            <div class="container">    
                <div class="jumbotron">
                    
                    
                    
                  <div class="row">
                      <div class="col-md-3 col-xs-12 col-sm-6 col-lg-3">
                        <div class="thumbnail text-center photo_view_postion_b" >
                          <img src="http://dkextras.com/DK/images/profile/dfe29f0b7f57ca5cb982ac9b323ac975.jpg" alt="stack photo" class="img">
                        </div>
                      </div>
                      <div class="col-md-9 col-xs-12 col-sm-6 col-lg-9">
                          <div class="" style="border-bottom:1px solid black">
                            <h2><?php echo $username;?><?php echo $usersname;?></h2>
                          </div>
                            <hr>
                          <div class="col-md-8">  
                          <ul class=" details">
                           <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><?php echo $phone;?></h2></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $email;?></h2></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>FlotNo:<?php echo $flatno;?></h2></p></li>
                            <li><p><span class="glyphicon glyphicon-credit-card one" style="width:50px;"></span>WalletBalance:<?php echo $usersname;?></h2></p></li>                            <a href="<?php echo base_url();?>Managementcontrol/userproduct?id=<?php echo $userid; ?>">Order History</a>  

                          </ul>
                          </div>
                          <div class="col-md-4">  
                            <!-- <div class="col-sm-5 col-xs-6 tital " >Birthday:</div><div class="col-sm-7 col-xs-6 ">2018/2/15</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7 col-xs-6 ">male</div>
                            <div class="clearfix"></div><div class="bot-border"></div>
                            <div class="col-sm-5 col-xs-6 tital " >:</div><div class="col-sm-7 col-xs-6 ">sdfsdfsdfsdfsdf</div>
                            <div class="clearfix"></div><div class="bot-border"></div> -->
                          </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                        <div class="form-group" style="border-bottom:1px solid black">
                            <h2>CONTACT INFO</h2>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">  -->
                     <!-- <div class="col-md-4">
                        <div class="col-sm-6 col-xs-6 tital " >Height(feet):</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Weight(lbs):</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Hair Color:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Hair Length:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Suit/Dress:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                     </div>
                     <div class="col-md-4">
                        <div class="col-sm-6 col-xs-6 tital " >Shirt Size:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Shoe Size:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Bust:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Waist:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Inseam:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                     </div>
                     <div class="col-md-4">
                        <div class="col-sm-6 col-xs-6 tital " >Hips:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Glove:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                        <div class="col-sm-6 col-xs-6 tital " >Hat:</div><div class="col-sm-6 col-xs-6 contant_i">Prasad</div>
                        <div class="clearfix"></div><div class="bot-border"></div>
                     </div>
                    </div> -->
                    
                    <!-- <div class="row">
                      <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-group" style="border-bottom:1px solid black">
                                <h2>CAR INFO</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="col-sm-4 col-xs-6 tital " >Brand:</div><div class="col-sm-8 col-xs-6 contant_i">Prasad</div>
                                <div class="clearfix"></div><div class="bot-border"></div>
                                <div class="col-sm-4 col-xs-6 tital " >Year:</div><div class="col-sm-8 col-xs-6 contant_i">Prasad</div>
                                <div class="clearfix"></div><div class="bot-border"></div>
                             </div>    
                           <div class="col-md-6">
                                <div class="col-sm-4 col-xs-6 tital " >Model:</div><div class="col-sm-8 col-xs-6 contant_i">Prasad</div>
                                <div class="clearfix"></div><div class="bot-border"></div>
                                <div class="col-sm-4 col-xs-6 tital " >Color:</div><div class="col-sm-8 col-xs-6 contant_i">Prasad</div>
                                <div class="clearfix"></div><div class="bot-border"></div>
                             </div>     -->
                            
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>



</body>
</html>
