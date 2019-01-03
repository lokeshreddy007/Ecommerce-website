<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <style>
  body {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #414141;
  background: #caccf7 url('fileupload/Tulips.jpg'); 
  padding: 25px 0;
}

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




function check() {
    if(document.getElementById('e').value ===
            document.getElementById('f').value) {
        document.getElementById('message').innerHTML = "";
    } else {
        document.getElementById('message').innerHTML =  "<p style='color:red'><i>Password does not match</i></p>";
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
          
      /* background-image: url("<?php echo base_url();?>images/background/");     */
      background-size: cover;
      background-repeat: no-repeat;
      }
      h2{
          border-bottom:solid Gray;
          border-width: 2px;
      
      }
      .color{
          background-color:#6d5cb8;
          
          }
      </style>
<script>
            
    function () var val = number.value
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    alert("Invalid number; must be ten digits")
    number.focus()
    return false
}
    </script>
</head>

<body>
    
     <?php
    $num = array();
 
    ?>
    
    
        <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/getproducts'" style="text-align: center;" type="button">product</button>
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/productupload'" style="text-align: center;" type="button">upload</button>
  
    
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/sproduct'" style="text-align: center;" type="button">cart</button>

   -->
  
         <!-- <?php if (!$this->session->userdata('Manager')) {?> -->
        <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white; width: 500px;">
        
        <h2 style="text-align: center;">User Interface</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/a" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-10"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" > Name:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="a"   oninput="phoneValidation()" onkeypress="if(this.value.length==20) return false" min="0" placeholder="Enter name" name="a" required ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4"> Last name:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="b"   oninput="phoneValidation()" onkeypress="if(this.value.length==15) return false" min="0" placeholder="Enter Last name" name="b" required ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > Email id:</label>
        <div class="col-sm-8">
            
        <input type="email"   class="form-control" id="c"   oninput="phoneValidation()" onkeypress="if(this.value.length==40) return false" min="0" placeholder="Enter Email" name="c" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > Flat no:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="d"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter Address" name="d" required ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > Password:</label>
        <div class="col-sm-8">
            
        <input name="password" id="e"  class="form-control" type="password" placeholder="Enter password" onkeyup='check();' />  
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > Confirm Password:</label>
        <div class="col-sm-8">
        <input type="password" name="confirm_password" id="f" class="form-control" placeholder="Confirm password"  onkeyup='check();' /> 
  <span id='message'></span>
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" > Mobile No:</label>
        <div class="col-sm-8">
        <input type="number" class="form-control" id="id-phone" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter  number" name="num" value="<?php echo $phone ?>">
      <p id="phone"></p>
         </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4"> OTP:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="h"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter OTP" name="h" required ">
      </div>
    </div>
      <div class="form-group">
        <label class="control-label col-sm-4"> Pin Code:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="h"   placeholder="Enter Pincode" name="pin" required ">
      </div>
    </div>


    
        
 
        <!--include()-->
   
        
        
   

          
        
  
    <center><div class="btn-group">
         
         <button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
        
          <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;margin:5px;" type="button" class="btn btn-primary">Next</button> -->
       
              
       </div>      </center>
    
    </div>
      
       
      
      <!-- <div class="col-sm-6"><br> -->
       
    
            <br>
       
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
// function validateForm() {
//     var x = document.forms["myForm"]["name"].value;
//     var y = document.forms["myForm"]["mail"].value;
//      var z = document.forms["myForm"]["dat"].value;
//       var a = document.forms["myForm"]["comment"].value;
//        var b = document.forms["myForm"]["distance"].value;
//         // var c = document.forms["myForm"]["pname"].value;
//          var d = document.forms["myForm"]["design"].value;
//           var e = document.forms["myForm"]["delivery"].value;
//            var f = document.forms["myForm"]["hdate"].value;
//             var g = document.forms["myForm"]["img"].value;
//             var h = document.forms["myForm"]["phone"].value;
//             var i = document.forms["myForm"]["aphone"].value;
//             var j = document.forms["myForm"]["villa"].value;
//             var k = document.forms["myForm"]["site"].value;
//             var l = document.forms["myForm"]["plots"].value;
      
//     if (x == "") {
//         alert("NAME must be filled out");
//         return false;
//     }
//      if (y == "") {
//         alert("EMAIL must be filled out");
//         return false;
//     }
//     if (z == "") {
//         alert("dat must be filled out");
//         return false;
//     }
//       if (a == "") {
//         alert("comment must be filled out");
//         return false;
//     }
//       if (b == "") {
//         alert("EMAIL must be filled out");
//         return false;
//     }
//       if (c == "") {
//         alert("distance must be filled out");
//         return false;
//     }
//     //   if (d == "") {
//     //     alert("pname must be filled out");
//     //     return false;
//     // }
//       if (e == "") {
//         alert("delivery must be filled out");
//         return false;
//     }
//       if (f == "") {
//         alert("hdate must be filled out");
//         return false;
//     }
//       if (g == "") {
//         alert("img must be filled out");
//         return false;
//       }

//      if (h == "") {
//         alert("PHONE NO must be filled out");
//         return false;
//      }
      
//         if (i == "") {
//         alert("aphone NO must be filled out");
//         return false;
        
// }

// if (j == "") {
//         alert("villa must be filled out");
//         return false;
// }

// if (k == "") {
//         alert("website must be filled out");
//         return false;
// }

// if (l == "") {
//         alert("plots must be filled out");
//         return false;
//     }


// }
</script> 
<script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });
  $(function() {
    $( "#datepicker1" ).datepicker({ minDate: 0});
  });
  $(function() {
    $( "#datepicker2" ).datepicker({ minDate: 0});
  });
  $(function() {
    $( "#datepicker3" ).datepicker({ minDate: 0});
  });
  </script>

    </div>
    </div> 
 
   </div>
</form>


</body>
</html>