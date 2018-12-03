<?php include"head.php";
include "database.php";
?>
<?php
	include "database.php"; 
	
	if(isset($_POST['confirm']))
	{	
		$s_id = @$_POST['s_id'];
		$s_name = @$_POST['s_name'];
		$s_email = @$_POST['s_email'];
		$s_phone = @$_POST['s_phone'];
		$c_date = @$_POST['c_date'];
		$p_date = @$_POST['p_date'];
		$c_time = @$_POST['c_time'];
		$p_time = @$_POST['p_time'];
		$notification = @$_POST['notification'];
		
		
	
		
		$items=[];
		$string_items='';
		

if(!empty($_POST['items']))
{
	
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['items'] as $selected)
		{
			array_push($items,$selected);

		}
		$string_items=implode(",",$items);
		
}




		
	}
?>


<body>
	<div class="row col-md-12">
			
			
				<div class="col-md-12"><center><h3>Receipt</h3></center></div>
				<div class="row col-md-6">
					
						
						<h4 class="col-md-12"><?php echo("NAME:".$s_name);?></h4><br />
						<h4 class="col-md-12"><?php echo("PHONE:".$s_phone);?></h4><br />
						<h4 class="col-md-12"><?php echo("Email:".$s_email);?></h4><br />
						 
						
					
					
					
				</div>
				<div class="row col-md-6 form-group">
					<h4 for="payment"><b>How would you like to pay?</b></h4>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Online</button>
					<button type="button" class="btn btn-info btn-lg" >offline</button>
					
				</div>
				<div class="col-md-12"><center><h3><b>Ordered Items</b></h3></center></div>
				<table class="table table-striped table-hover">
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Item Name</th>
							  <th scope="col">Price</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						      $total=0;
							for( $i=0;$i<count($items);$i++)
								{
									$usersList = $conn1->query("SELECT * FROM `items` WHERE id=".$items[$i]);
									foreach($usersList AS $eachRow)
										{
											$total=$total+$eachRow['price'];
											echo '
						  
						  
							<tr>
							  <td scope="row">'.$i.'</td>
							  <td>'.$eachRow['name'].'</td>
							  <td>'.$eachRow['price'].' /- taka</td>
							</tr>
							
							';
																
										}
								}
						  ?>
						  
						  </tbody>
						  <thead>
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">Total Price</th>
							  <th scope="col"><?php echo $total;?>/- taka</th>
							</tr>
						  </thead>
				</table>
				<div class="col-md-12">
					<form action="success.php"method="POST">
						<input type="hidden" id="custId" name="s_id" value="<?php echo $s_id;?>">
						<input type="hidden" id="custId" name="c_date" value="<?php echo $c_date;?>">
						<input type="hidden" id="custId" name="c_time" value="<?php echo $c_time;?>">
						<input type="hidden" id="custId" name="p_date" value="<?php echo $p_date;?>">
						<input type="hidden" id="custId" name="p_time" value="<?php echo $p_time;?>">
						<input type="hidden" id="custId" name="notification" value="<?php echo $notification;?>">
						<input type="hidden" id="custId" name="price" value="<?php echo $total;?>">
						<input type="hidden" id="custId" name="p_status" value="<?php echo $p_status;?>">
						<input type="hidden" id="custId" name="items" value="<?php echo $string_items;?>">
					<a href=""><button type="submit"  name="final" class="btn btn-success btn-lg"  >
					  Done
					</button></a> 
					</form>
				</div>			
						</div>
					  </div>
					</div>  
				</div>
			</div>
			<!-- Modal -->
  
    
      


</body>


<?php include"footer.php"?>