<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- load jQuery and jQuery UI -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- load jQuery UI CSS theme -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

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


            .panel-order .row {
                border-bottom: 1px solid #ccc;
            }
            .panel-order .row:last-child {
                border: 0px;
            }
            .panel-order .row .col-md-1  {
                text-align: center;
                padding-top: 15px;
            }
            .panel-order .row .col-md-1 img {
                width: 100px;
                max-height: 80px;
            }
            .panel-order .row .row {
                border-bottom: 0;
            }
            .panel-order .row .col-md-11 {
                border-left: 1px solid #ccc;
            }
            .panel-order .row .row .col-md-12 {
                padding-top: 7px;
                padding-bottom: 7px; 
            }
            .panel-order .row .row .col-md-12:last-child {
                font-size: 11px; 
                color: #555;  
                background: #efefef;
            }
            .panel-order .btn-group {
                margin: 0px;
                padding: 0px;
            }
            .panel-order .panel-body {
                padding-top: 0px;
                padding-bottom: 0px;
            }
            .panel-order .panel-deading {
                margin-bottom: 0;
            }                    



        </style>
    </head>
    <body>
    <center>  <h1>Transaction Confirmation</h1> </center>

    <center>  <h3>Order History</h3> </center>


<!-- <center style="color:green"><p>Your Transaction Sucessfully Placed</p></center> -->

    <!-- <h1 style="float:right">Products</h1> -->


    <?php $id = intval($_GET['id']); ?>





    <strong>Product Details</strong>     
    <?php foreach ($order as $user) { ?>
        <?php if ($user->userid == $id) { ?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
            <div class="panel panel-default panel-order">
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <ul class="dropdown-menu dropdown-menu-right">
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-1"><img src="<?php echo base_url() . $user->productimg; ?>" class="media-object img-thumbnail"></div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right"><label class="label label-success">Approved</label> </div>
              <!-- <div class="pull-right"><?php echo $user->productimg; ?></div> -->
                                <span><strong>TransactionId: <span>  <?php echo $user->Transactionid; ?> </span>
                                    </strong></span> <br>
                                <span><strong>OrderName:<?php echo $user->productname; ?></strong></span> </br>
                                <span class="label label-info"></span><br>
                                Vendor:<?php echo $user->vendorname; ?> <br>
                                ProductPrice :$<?php echo $user->productprice; ?> <br>
                                <a href="<?php echo base_url(); ?>Managementcontrol/productinfo?id=<?php echo $user->idbookedproducts; ?>">Oder Canellation</a>
                                <?php echo $user->productstratdate; ?> 
                                <?php echo $user->productenddate; ?>
                                <h3>Oder Cancelled Dates</h3> 
                                <?php foreach ($canpro as $value) { ?>
                                    <?php if ($value->bookedid == $user->idbookedproducts) { ?>
                                        <b> <?php echo $value->datelist; ?></b> ,

                                    <?php } else { ?>
                                        <?php $cal = 0; ?>
                                    <?php } ?>
                                <?php } ?>
                                </strong></span> 

                            </div>
                            <div class="col-md-12">
                                order made on:<?php echo $user->dateone; ?> To   <?php echo $user->datelast; ?>


                            </div>
                        </div>


                    </div>
                </div>
            <?php } ?>
        <?php } ?>





    </div>
</div>   




</form>     



</body>
</html>



