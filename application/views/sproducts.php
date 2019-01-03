<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body>


<button class="button button2" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/getproducts'" >Products</button>
<button class="button button2" onclick="window.location.href='<?php echo base_url();?>Managementcontrol/'"  >Services</button>

</body>
</html>
