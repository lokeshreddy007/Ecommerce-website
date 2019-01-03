<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $id = intval($_GET['id']);?>

<?php foreach ($stock as $item){?>
     <?php if( $item->idstockup == $id){ ?>
     <?php $idstockup = $item->idstockup; ?> 
            <?php $Material = $item->Material; ?>
            <?php $Quantity = $item->Quantity; ?>
     <?php $Price = $item->Price; ?>
    
            <?php $Tax = $item->Tax; ?>
            <?php $Address = $item->Address; ?>
            <?php $Phone = $item->Phone; ?>
            <?php $Vendor = $item->Vendor; ?>
            <?php $Email = $item->Email; ?>

        <?php $Date = $item->Date; ?>
            
          


            <?php } ?>
<?php } ?>
    


    
</body>
</html>