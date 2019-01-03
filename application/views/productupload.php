<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">


  <style>

body {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #414141;
  background: #caccf7 url('https://i.imgur.com/Syv2IVk.png'); 
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
          .Back{
          right: 3px;
          padding : 10px;
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-right: -50%;
          margin-bottom: 10px;
		  padding-right:0;
      }
    
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}



input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9; 
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
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

   
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
                 <?php if (!$this->session->userdata('Manager')) {?>

        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Procurementhomes'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

 <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
    </div>
    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;">
        
        <h2 style="text-align: center;">Stock UPload</h2>
        
  
  
  <div class="row">
  
        <?php echo form_open_multipart('Managementcontrol/designdo_uploader');?>  
        <form method="post" >
           
    <div class="col-sm-6"><br>
    
   
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Division*</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" style="margin: 10px;" id="Matname"   placeholder="Enter Division" name="divison" style="background-color:#5bc0de" >  
                           
      </div>
    </div>  
    
           
        
      
<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Product Name*</label>
      <div class="col-sm-8">          
        <input type="text" name="product" style="margin: 10px;"   class="form-control" id="pwd"  placeholder="Enter Product Name "  >
       </div>
      
    </div>
        
         
        <!--include()-->
   <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Image*</label>
      <div class="col-sm-8">  
      <td><input type = "file" style="margin: 10px;"   name ="userfile" size = "20" /> </td>        
      </div>
    </div>
        
        
      <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Price*</label>
      <div class="col-sm-8"> 
      <input type="number" style="margin: 10px;" class="form-control" id="pwd" placeholder="Enter Price" name="price"  >

    </label>
             
    </div>
    </div>
        
    
    
    </div>
      
      <div class="col-sm-6"><br>
         <div class="form-group">
      <label class="control-label col-sm-4" for="email">Offer Price:</label>
      <div class="col-sm-8">
          <input type="number" class="form-control" id="NowName" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter Price Offer "  name="offerprice">
      <p id="phone"></p>
      </div>
    </div>  
      
    
        
         <div class="form-group">
      <label class="control-label col-sm-4" for="email">Quantity*:</label>
      <div class="col-sm-8">
          <input type="number" class="form-control" id="Nowget" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Enter Quantity " name="quantity" >
      <p id="phone"></p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Unit of Measure*:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="NowMail" oninput="phoneValidation()" onkeypress="if(this.value.length==10) return false" min="0" placeholder="Unit of Measure" name="measure" >
      <p id="phone"></p>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Product Description*:</label>
      <div class="col-sm-8">
          <textarea type="text" class="form-control" id="NowMail" name="desc">
          </textarea>
      </div>
    </div>
    
    
     <div class="btn-group">
         
   
</div>      
<button type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>

</form>
</div> 

    </div>



    





</body>
</html>


   
     
