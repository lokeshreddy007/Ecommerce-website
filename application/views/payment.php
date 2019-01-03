<!DOCTYPE html>
<html lang="en">

<head>
    <title>userorderconfirmation</title>
    <meta charset="utf-8">
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
        .Back {

            right: 3px;
            padding: 10px;
            text-align: right;
            display: inline-block;
            width: 100%;
            margin-right: -50%;
            margin-bottom: 10px;
        }

 h1{
    margin-top: -40px;
    margin-bottom: 10px;
}


    </style>
</head>

<!-- <body style="background-image: url('E:/code/navya project/cafe/images/01.jpg');"> -->
<div class="container">
<?php $id = intval($_GET['id']);?>
                                   
    
                             
                                 <?php foreach($sliderlist as $item){?>
                                 <?php $id = intval($_GET['id']);?>
                                  <?php if( $item->userid == $id){?>
                                   <?php $name =  $item->username; ?>
                                   <?php  $ID =  $item->userid;?>
                                   <?php  $mail =  $item->usermail;?>
                                    
                                <?php }?>   
                                    <?php }?> 
    <div class="Back">
        <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
       
       <?php if (!$this->session->userdata('Manager')) {?>
        <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
   <?php }  else {?>
    <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Manager'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

   <?php } ?>
         <!-- <button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Saleshome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button> -->
                            
    </div>
    <div class="follow" align="center" > 
        <h1><b>Payment</h1>
        </div>
          <div class="container" >
        
          <form class="form-horizontal" name="myForm"  action="<?php echo base_url();?>Managementcontrol/walletpay" method="post">


                  <div >
                      <div class="row">
                                      <div class="col-sm-4" >
                              <div class="form-group">
                                  <label>CUSTOMER ID:</label>
                                  <input disabled style="margin-right:5px;" type="text" class="form-control" value="<?php echo $ID ?>" placeholder="Enter Customer Id" name="iduser">
                              </div>
                          </div>
          
                              <div class="col-sm-4">
                              <div class="form-group">
                                  <label>CUSTOMER NAME:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $name ?>" placeholder="Enter name" name="name">
                              </div>
                          </div>
                          <!--  style="background-color: #5bc0de" <br> -->
                          <!-- <br> -->
                          <!-- <br> -->
                          <div class="col-sm-4">
                              <div class="form-group">
                                  <label>EMAILID:</label>
                                  <input disabled type="text" class="form-control"  value="<?php echo $mail ?>" id="fin" placeholder="mail" name="mail">
                              </div>
                          </div>
                         
 <input type="hidden" id ="instabro"  value="<?php echo $ID; ?>" name="userid"  />
<input type="hidden" id ="amountnow"   value="<?php echo $name ?>" name="username"  />
<input type="hidden" id ="desicri"  value="<?php echo $mail ?>" name="usermail"  />

                          
                      </div>
                  </div>
                  <br>
                  </div>
                  </div>
                 
                  <div class="container" >
                  <div class="row">
<div id = "payment" >
<h3>Payments</h3>


<table>
    <thead id="tableInvestmentId">
        <tr>
         <th>SL.No</th>
            <th>Amount</th>
                 


            <th>Date</th>
           
            <th>Bank Name</th>
           
        </tr>

        <tr>
            <td>
            <input disabled style="width:50px;" value = "1" type="number" />
            </td>

            <td>
                <input type="number"   name="amountnow"   />
            </td>
           

            <td>
               
            <input type="date"  placeholder="Enter Date" name="date"  /> 
            </td>
            <!-- <td>
                <input  name="Cheque" type="number" />
            </td> -->
            <td>
                <input  name="BankName" type="text"  />
            </td>
           
        </tr>
    </thead>
</table>
</div>
</br>



<div class="col-xs-offset-3 ">
                 
                 
                 <button type="submit" id="button" class="btn btn-primary">Check</button>

                     </div>
                     </form>
                     </div>
                     </div>







        
            
                    </body>
                    </html>