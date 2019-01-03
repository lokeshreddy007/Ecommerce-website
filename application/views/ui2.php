<!DOCTYPE html>
<html lang="en">
<head>
  <title>User interface</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
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
          
      background-image: url("<?php echo base_url();?>images/background/");    
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
    
     <?php
    $num = array();
 
    ?>
    
    
                           

    
    <!-- <div class="Back"> -->
        <!-- <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);"> -->
         <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/EnqueryNextPage'" style="text-align: center;" type="button">Next</button>
         <!-- <?php if (!$this->session->userdata('Manager')) {?> -->
        <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>

    </div>

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white; width: 500px;">
        
        <h2 style="text-align: center;">User Interface</h2>
        
  
  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Managementcontrol/ui" method="post">
      <center> <font color="red"> <?php echo $this -> session->flashdata("status"); ?></font></center>
    <div class="col-sm-10"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> ma*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> mn*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> md*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> q*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> t*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> i*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> r*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> b*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>


    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> b*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> p*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> tx*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
      </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-4" for="email"> d*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="n"   oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter name" name="name" required value="<?php echo $name ?> ">
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
