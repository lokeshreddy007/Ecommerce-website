<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

        <link href="https://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css" rel="stylesheet" />
        <link href="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.css" rel="stylesheet" />
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.js
        "></script>
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
    <center>  <h1>Product Info</h1> </center>

    <center>  <h3></h3> </center>

    <?php $id = intval($_GET['id']); ?>
    <?php
    echo $id;
    ?>
    <?php foreach ($order as $user) { ?>
        <?php if ($user->idbookedproducts == $id) { ?>
            <?php $vendorid = $user->vendorid; ?>
            <?php $dateone = $user->dateone; ?>
            <?php $datelast = $user->datelast; ?>
            <?php $Transactionid = $user->Transactionid; ?>
    <?php $productname = $user->productname; ?>
    <?php $qua = $user->quantity; ?>


        <?php } ?>
    <?php } ?>




    <strong>Product Details</strong>


    <?php foreach ($order as $user) { ?>
        <?php if ($user->idbookedproducts == $id) { ?>



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

                <form action="<?php echo base_url(); ?>Managementcontrol/delproduct" method="post"    

                      <div class="row">
                        <div class="col-md-1"><img src="<?php echo base_url() . $user->productimg; ?>" class="media-object img-thumbnail"></div>
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-right"><label class="label label-success">Approved</label> </div>
                  <!-- <div class="pull-right"><?php echo $user->productimg; ?></div> -->
                                    <span><strong>TransactionId: <a href="<?php echo base_url(); ?>Managementcontrol/productinfo?id=<?php echo $user->idbookedproducts; ?>"><span>  <?php echo $user->Transactionid; ?> </span></a>
                                        </strong></span> <br>
                                    <input type="hidden" id =""   value="<?php echo $id ?>" name="bookedid"  />
                                    <input type="hidden" id =""   value="<?php echo $user->userid ?>" name="userid"  />
                                    <input type="hidden" id =""   value="<?php echo $dateone ?>" name="dateone"  />
                                    <input type="hidden" id =""   value="<?php echo $datelast ?>" name="datelast"  />
                                    <input type="hidden" id =""   value="<?php echo $datelast ?>" name="datelast"  />
                                    <input type="hidden" id =""   value="<?php echo $datelast ?>" name="datelast"  />
                                    <input type="hidden" id =""   value="<?php echo $Transactionid ?>" name="Transactionid"  />
                                    <!--<input type="hidden" id =""   value="<?php echo $user->idbookedproducts ?>" name="bookedid"  />-->
                                    <input type="hidden" id =""   value="<?php echo $vendorid ?>" name="vendorid"  />
                                    <input type="hidden" id =""   value="<?php echo $productname ?>" name="productname"  />
                                    <input type="hidden" id =""   value="<?php echo $qua ?>" name="qua"  />

                                    <span><strong>OrderName:<?php echo $user->productname; ?></strong></span> 
                                    <span class="label label-info"></span><br>
                                    ProductPrice :$<?php echo $user->productprice; ?> 
                                    <div class="col-md-12">
                                        order made on:<?php echo $user->dateone; ?>  To <?php echo $user->datelast; ?>	
                                    </div>


                                    <h3>Cancelled Dates</h3> 
                                    <?php foreach ($canpro as $user) { ?>
                                        <?php if ($user->bookedid == $id) { ?>
                                            <h4><?php echo $user->datelist; ?>, </h4>
                                        <?php } ?>
                                    <?php } ?>
                                </div>

                            </div>



                            <?php
//$date2=date_create($user->datelast);
                            $twoall = date_create($datelast);
//$twoall->modify('+1 day');
//print_r ($twoall);
                            echo '<br/>';
                            $todaydate = date("Y-m-d");
                            $date1 = date_create($todaydate);
//print_r ($date1);
//print_r($date2) ;
                            $seldate = date_diff($date1, $twoall);
                            $val = $seldate->format("%R%a days");
//echo $val;
                            ?>


                        <?php } ?>
                    <?php } ?>
                    <div id="placeholder"></div>

                    <div  id="cal"   style="color: whitesmoke"/>    
                </div>


                <input type="submit" value="submit"/>
            </div>
    </div>
    <input type="hidden" id ="alldate"  name="alldate"  />



</div>
</div>   




</form>     

<script>
    var name = '<?php echo $val; ?>';
    console.log(name);
    var val = parseInt(name);
    console.log(typeof (val));
    $(document).ready(function () {
        $('#cal').multiDatesPicker({
            minDate: 0,
            maxDate: +val
        });

    });
//
// $('#showdate').click(function (){
//     var num = document.getElementById("cal").value = cal;
//     console.log(num);
//     return false;
// });
</script>
<script>
    $(function () {
        var $win = $(window); // or $box parent container
        var $box = $(".box");
        var $log = $(".log");
        $win.on("click.Bst", function (event) {
            if ($box.has(event.target).length == 0 &&!$box.is(event.target)) {
                var num = document.getElementById("cal").value;
                console.log(num);
                document.getElementById("placeholder").innerHTML = num;
                document.getElementById("alldate").value = num;
                $log.text("you clicked outside the box");
            }
        });

    });
</script>
</body>
</html>



