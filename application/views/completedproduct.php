<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/redmond/jquery-ui.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
  .feed1 {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton1 {
  position: fixed;
  bottom: -4px;
  left: 10px;
}
     
      .feed {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: -4px;
  right: 10px;
}
</style>
  <script>
function myFunction() {
    var x = document.getElementById("myInput").value;   
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(pattern.test(x)){
    	document.getElementById("demo").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("demo").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Email</i></p>";
    }
}

function phoneValidation(){
    var x = document.getElementById("id-phone").value;   
    if(x.length == 10){
    	document.getElementById("phone").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("phone").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Phone number</i></p>";
    }
}


function AphoneValidation(){
    var x = document.getElementById("id-Aphone").value;   
    if(x.length == 10){
    	document.getElementById("Aphone").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("Aphone").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Phone number</i></p>";
    }
}
function myconpass(){
var pass = document.getElementById("pass").value;
var conpass = document.getElementById("conpass").value; 
if(pass == conpass){
     document.getElementById("conpassdemo").innerHTML =  "<p style='color:green'></p>";    
}else{
     document.getElementById("conpassdemo").innerHTML =  "<p style='color:red'><i>Please Enter same password</i></p>";
   
}

}
</script>

  <style>
      .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
      body{
          
      background-image: url("<?php echo base_url();?>images/background/enqfrm.jpg");    
      background-size: cover;
      background-repeat: no-repeat;
      }
      h2{
          border-bottom:solid Gray;
          border-width: 2px;
      
      }
      .color{
          background-color:#5bc0de;
          
          }
      </style>

</head>

<body>
    

    <?php $id = intval($_GET['id']); ?>
    <?php foreach ($order as $user) { ?>
        <?php if ($user->idbookedproducts == $id) { ?>
            <?php $userid = $user->userid; ?>
             <?php $idbookedproducts = $user->idbookedproducts; ?>
            <?php $username = $user->username; ?>
            <?php $usermail = $user->usermail; ?>
            <?php $phonenum = $user->phonenum; ?>
            <?php $productprice = $user->price; ?>
            <?php $productname = $user->productname; ?>
            <?php $pincode = $user->pincode; ?>
            <?php $vendorid = $user->vendorid; ?>


        <?php } ?>
    <?php } ?>

    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/creatematerial'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
         <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Product Details</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/submitproductdata" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-6"><br>
         <div class="form-group">
        <label class="control-label col-sm-4" for="email">Customer ID*:</label>
        <div class="col-sm-8">
            
            <input disabled type="text"  value="<?php echo $userid ;?>" class="form-control" id="cname" placeholder="Enter name" name="name" required  ">
      </div>
    </div>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Customer Name*:</label>
        <div class="col-sm-8">
            
            <input disabled type="text"  value="<?php echo $username ;?>"  class="form-control" id="cname" placeholder="Enter name" name="name" required  ">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input disabled type="email"  value="<?php echo $usermail ;?>" class="form-control" id="myInput" oninput="myFunction()"  placeholder="Enter e-mail" name="mail"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="demo"></p>
      </div>
    </div>
        <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Phone Number*</label>
      <div class="col-sm-8">          
          <input disabled   value="<?php echo $phonenum ;?>" class="form-control" id="pass"  placeholder="Enter Password" name="pass"  data-validate="required,email">  
                           <p id="passdemo"></p>
      </div>
    </div>
       
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Product Submitted*</label>
      <div class="col-sm-8">          
          <select class="form-control" name="check" >
    
  <option >YES</option>
  
 
</select>       </div>
    </div>     
        
        
    

        
        
       
    
    </div>
      
       
      
      <div class="col-sm-6"><br>
       
     <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Price</label>
      <div class="col-sm-8">          
        <input disabled type="data"  value="<?php echo $productprice ;?>"  id="datepicker" class="form-control" placeholder="Enter date" name="dat" >
         <!-- <input id="txtstartdate"  class="form-control"  placeholder="Enter Date" name="dat"  />  -->
      </div>
    </div>
          
          
     <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Product*</label>
      <div class="col-sm-8">          
          <input disabled   value="<?php echo $productname ;?>" class="form-control" id="conpass" oninput="myconpass()"  placeholder="Enter Password Again" name="conpass"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="conpassdemo"></p>
      </div>
    </div>
         
          
         
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Pin Code</label>
      <div class="col-sm-8">          
      <input disabled  class="form-control"  value="<?php echo $pincode ;?>" id="pwd" placeholder="Enter pin code" name="mat"  >
      </div>
    </div>
         
   
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Address*</label>
      <div class="col-sm-8">          
          <textarea  disabled class="form-control"  value="<?php echo $userid ;?>" id="pwd" placeholder="Enter Address" name="address" ></textarea>
      </div>
    </div> 
          <input type="hidden" id =""  value="<?php echo $userid; ?>" name="userid"  />
          <input type="hidden" id =""   value="<?php echo $username ?>" name="username"  />
          <input type="hidden" id =""   value="<?php echo $usermail ?>" name="usermail"  />
          <input type="hidden" id =""  value="<?php echo $phonenum; ?>" name="phonenum"  />
          <input type="hidden" id =""   value="<?php echo $productprice ?>" name="productprice"  />
          <input type="hidden" id =""  value="<?php echo $productname ?>" name="productname"  />
          <input type="hidden" id =""   value="<?php echo $pincode ?>" name="pincode"  />
          <input type="hidden" id =""   value="<?php echo $idbookedproducts ?>" name="idbookedproducts"  />
          <input type="hidden" id =""   value="<?php echo $vendorid ?>" name="vendorid"  />

          
            <br>
     <div class="btn-group">
         
  <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 
   <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->

       
</div>     

<script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });

  </script> 
<script>
    

$('#myForm input').on('change', function() {
  //  alert($('input[name=radioName]:checked', '#myForm').val()); 
   var x = $('input[name=radioName]:checked', '#myForm').val();
   console.log(x);
   if(x == 2){
     var y= true;
          document.getElementById("Upload").disabled = y;
   }else{
    document.getElementById("Upload").disabled = false;
   }


});

</script> 

    </div>
    </div> 
 
   </div>
</form>

</body>
</html>
