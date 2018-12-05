<?php
include"head.php";
?>
<?php
include "database.php";
		$s_id = @$_POST['s_id'];
		$c_date = @$_POST['c_date'];
		$p_date = @$_POST['p_date'];
		$c_time = @$_POST['c_time'];
		$p_time = @$_POST['p_time'];
		$notification = @$_POST['notification'];
		$p_status = 1;
		$total = @$_POST['price'];
	
	if(isset($_POST['final']))
	{	
		
		$query = $conn1->prepare("
		INSERT INTO `order` (`s_id`,`c_date`, `c_time`, `p_date`,`p_time`,`notification`,`p_status`,`price`) 
		VALUES (:SI,:CD,:CT,:PD,:PT,:NT,:PS,:TP)");
$payload=array(
						':SI' => $s_id,
						':CD' => $c_date,
						':CT' => $c_time,
						':PD' => $p_date,
						':PT' => $p_time,
						':NT' => $notification,
						':PS' => $p_status,
						':TP' => $total,
					);
					
		$query->execute($payload);
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				$items=explode(',',@$_POST['items']);
				foreach($items as $item)
				{	
						
						$query = $conn1->prepare("
						INSERT INTO `o_items` (`order_id`,`item_id`) 
						VALUES (:SI,:CD)");
				$payload=array(
										':SI' => $lastInsertId,
										':CD' => $item,
										
									);
									
				$query->execute($payload);
				}
				if($lastInsertId > 0)
								{
									
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully ordered
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										Order unsuccessfull
                                    </div>                       
                                </div>';
								
								}
				}
?>
<body class="col-md-12">
	<!-- Modal content-->
      <div class="">
        <div class="">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="">You have Successfully Placed Your Order</h4></center>
        </div>
        <div class="modal-body">
          <center><p>Your Order No is : <?php echo $lastInsertId;?></p></center>
          <center><p>Payment status: <?php  if($p_status==1){echo'paid';}else {echo 'Not Paid';};?></p></center>
          <center><h2>thank you</h2></center>
          
        </div>
        <div class="col-md-12">
          <center><a href="index.php"><button type="success" class="btn btn-default" >Close</button></a></center>
        </div>
      </div>
      
   
	
	<!-- modal 4-->
	


</body>
<?php 
	include "footer.php";
?>