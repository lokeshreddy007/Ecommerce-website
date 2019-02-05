<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #2196F3;
  margin-top:0px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav-right {
  float: right;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 50px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}







</style>
</head>
<body>
    <?php
   $name = $_SESSION['username'];
   $usersurname = $_SESSION['usersurname'];
   $emailsess = $_SESSION['emailsess'];
   $userid = $_SESSION['userid'];  
   $vendoridnow = $_SESSION['vendorid'];  
?>
<div class="topnav"> 
  <a class="active" href="<?php echo base_url();?>Managementcontrol/getproducts">Home</a>
   <a class="active" href="<?php echo base_url();?>Managementcontrol/vendorregister">Vendor Register</a>
   <a class="active" href="<?php echo base_url();?>Managementcontrol/vendorregister">Stock Up</a>
   <a class="active" href="<?php echo base_url();?>Managementcontrol/Vendorlogin">Vendor</a>
     <a class="active" href="<?php echo base_url();?>Managementcontrol/userlogin">userlogin Up</a>
     <a class="active" href="<?php echo base_url();?>Managementcontrol/admin">admin</a>
     <a class="active" href="<?php echo base_url();?>Managementcontrol/report?id=<?php echo $vendoridnow;?>">Report</a>
     <a class="active" href="<?php echo base_url();?>Managementcontrol/inventorymangerhome">Inventory Manager</a>

  <div class="topnav-right">


     <div class="dropdown">
    <button class="dropbtn">Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><?php echo $name;?></a>
     
      <a href="<?php echo base_url();?>Managementcontrol/Profile?id=<?php echo $userid; ?>">Profile</a>
      <a href="<?php echo base_url();?>Managementcontrol/showcart?id=<?php echo $userid; ?>">Cart</a>  
      <a href="<?php echo base_url();?>Managementcontrol/userproduct?id=<?php echo $userid; ?>">Order History</a>  
      <a href="<?php echo base_url();?>Managementcontrol/gotproduct?id=<?php echo $userid; ?>">Delivery Product</a>  

      
      <a href="<?php echo base_url();?>Managementcontrol/userLogout">Logout</a>
    </div>
  </div> 

  </div>
</div>

<div style="padding-left:30px">
  
</div>

</body>
</html>