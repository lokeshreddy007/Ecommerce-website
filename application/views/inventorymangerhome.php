
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vendor Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <?php // $id = intval($_GET['id']); ?>
<?php
    $idproduct = array();
?>
  <?php foreach ($pro as $value) {?>
          <?php array_push($idproduct, $value->idbookedproduct);?>
            <?php } ?>
<?php // print_r($idproduct);?>


        <h1 style="text-align: center;"><b>Inventory Manager Home</b></h1>
        <div class="form-group">
        </div>
        <br />
        <input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder=" Search Here">

        <table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            <tr>
                <th>S.NO</th>
                <th>ID</th>
                <th>NAME</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Product</th>
                <th>Submit</th>
                <th>status</th>
            </tr>
            <tbody >							
                <tr>
                    <?php $sumval = array();?>
                   <?php foreach ($usercart as $value) { ?>
                    <?php if(in_array($value->Quantity, $sumval)){?>
                       <?php  $sumval[$value->productname ] += $value->Quantity;?>
                    <?php } ?>
                    <?php $sumval[$value->productname ] = $value->Quantity;?>
                    <td> <?php echo $value->Quantity;?></td>
                    <td> <?php echo $value->productname;?></td>                    
                   <?php } ?>
                    
                    <?php foreach ($pro as $value) { ?>
                    <?php echo $value->Quantity;?>
                    <?php echo $value->productname;?>
                    
                   <?php } ?>
                  
                   <?php     print_r($sumval);?>
              

                </tr>
                        </tbody>  
                        </table>
            </form>
           
    </body>
</html>
