
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vendor Home</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	
    </head>
    <body>
        <?php $id = intval($_GET['id']);?>
         <?php foreach($canpro as $user){ ?>
    <?php if($user->vendorid ==$id ){?>
     <?php echo $user->datelist;?> 
    <?php $productidex = explode(",",$user->datelist);?>
  
<?php }?>
<?php } ?>

<?php
print_r($productidex);
  echo "$productidex";
echo "<br/>";
?>
        
        
        
        
         <h1 style="text-align: center;"><b>Vendor Home</b></h1>
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
            
           
            
             </tr>
              <tbody >							
    
<tr>
    <?php
    function createDateRange($startDate, $endDate, $format = "Y-m-d")
                            {
                                $begin = new DateTime($startDate);
                                $end = new DateTime($endDate);

                                $interval = new DateInterval('P1D'); // 1 Day
                                $dateRange = new DatePeriod($begin, $interval, $end);

                                $range = [];
                                foreach ($dateRange as $date) {
                                    $range[] = $date->format($format);
                                }

                                return $range;
                            }
    
    
    ?>
                        <?php $num = 1;?>
				<?php foreach($order as $data){ ?>
    
                                    <?php if($data->vendorid ==$id ){?>
    
                                        <?php $one = $data->dateone;?>
    <?php $useridnow = $data->userid;?>
                                         <?php $two = $data->datelast; ?>
                                            <?php
                                         $twoall = new DateTime($two);
                                         
                                        $twoall->modify('+1 day');
//                                        echo $twoall->format('Y-m-d');
                                        ?>
                                <?php

                            
                             echo "now";
                            print_r(createDateRange("$one", "$twoall"));
                            $people = createDateRange("$one", "$twoall");
                            $val = date("Y-m-d");
                             echo $val;
                             

                            if (in_array($val, $people))
                              {
                              echo "Match found";
                              $give= 1;
                              }
                            else
                              {
                              echo "Match not found";
                              }


                            ?>
                    <?php
                    $cal  = array();?>


                    <?php foreach($canpro as $del){ ?>
                       <?php if($del->vendorid ==$id  && $del->userid == $useridnow){?>

                    <?php array_push($cal,$del->date);?>

                    <?php } ?>
                    <?php } ?>
                                <?php

                                print_r($cal);
                                if (in_array($val, $cal))
                                  {
                                  $give+= 1;
                                  }
                                else
                                  {
                                  echo "Match not found";
                                  }

                                  echo '<br/>';
                                  echo $give;
                                ?>
                                <?php if($give  == 1){?>
				<td> <?php echo $num;?> </td>
					<td><a href="<?php echo base_url(); ?>Managementcontrol/followup?id=<?php echo $data->Transactionid; ?>" /> <?php echo $data->Transactionid; ?></td>   
					<td><?php echo $data->username; ?> </td>
					<td><?php echo $data->usermail; ?> </td>
					<td><?php echo $data->phonenum; ?> </td>
                                            
					<td><?php echo $data->productname; ?> </td>
                                        
					<?php $num = $num+1;?>
                                        <tr/>
					<?php } ?>
                                        <?php } ?>
					

                                        <?php } ?>


				</tbody>  
</table>

    </body>
</html>
