<?php 
session_start();
include "head.php"
?>

<?php
function getTimeSlots(){
	$allTimeSlots = array();
	$orderTakeStartAt = 9;
	$orderTakeEndAt = 15;
	for ($n = $orderTakeStartAt*60; $n <= $orderTakeEndAt * 60; $n+=30){
		$date = sprintf('%02d:%02d', $n / 60, $n % 60);
		$allTimeSlots[$date] = $date;
	}
	$selectedTimeSlots = array();
	
	date_default_timezone_set('Asia/Dhaka');
	$nowTime = date("H:i:a",strtotime("now"));
	//$nowTime = "1:20";
	//print_r($nowTime);
	$nowTimetArr = explode(":",$nowTime);
	//print_r($nowTimetArr);
	
		foreach ($allTimeSlots as &$value) {
				$tmp = explode(":",$value);
				if($orderTakeEndAt > $nowTimetArr[0]){
				if($nowTimetArr[0] == $tmp[0]){
					if($tmp[1] > $nowTimetArr[1] ){
				      array_push($selectedTimeSlots, $value);
						}
				}else{
					if($tmp[0] > $nowTimetArr[0] ){
				      array_push($selectedTimeSlots, $value);
						}
				}
				
				} else {
				   array_push($selectedTimeSlots, $value);
				}
		
		}
	return $selectedTimeSlots;
	
	}
	
	$selectedTimeSlots = getTimeSlots();
	$currentTime = date("H:i:a",strtotime("now"));
	$currentDate = date("d/m/Y");
	//print_r($currentDate);

?>

  <body>
  <h1 class="mb-4">Make A Order</h1>  
                <form action="order_confirm.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group order">
					<label for="">Enter your Name</label>
                      <input type="text" required name="s_name" class=" form-control" id="m_fname" value = "<?php echo $_SESSION['USER_FULLNAME'] ?>" readonly>
                    </div>
					<div class="col-md-6 form-group order">
					<label for="">Enter your Student id</label>
                      <input type="text" required name="s_id" class="form-control" placeholder=""id="m_fname" value = "<?php echo $_SESSION['USER_SESSION'] ?>" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group order">
					<label for="">Enter your phone no</label>
                      <input type="text"required name="s_phone" class="form-control"placeholder=""onkeypress='return event.charCode>= 48 && event.charCode <=57' id="m_phone" value = "<?php echo $_SESSION['USER_PHONE'] ?>" readonly>
                    </div>
					<div class="col-md-6 form-group order">
					<label for="">Enter your email</label>
                      <input type="email" required  class="form-control" name="s_email" value = "<?php echo $_SESSION['USER_EMAIL'] ?>" readonly>
                    </div>
                  </div>

                  <div class="row">
					<div class="col-md-6 form-group order">
						<label for="">Current Date</label>
                      <input type="text" required placeholder="" name="c_date"class="form-control" id="date" value = "<?php echo $currentDate ?>" readonly>
                    </div>
                    <div class="col-md-6 form-group order">
						<label for="">Current Time</label>
										  <!--	<input type="time" required  class="form-control" name="c_time" id="time"> -->
											<input type="text"  required  class="form-control" name="c_time" id="time" value = "<?php echo $currentTime ?>" readonly>
						
                    </div>
					
                  </div>
				  <div class="row">
					  <div class="row col-md-6">
					  
						<div class="col-md-12 form-group order">
						
						  <label for="">Prefered Date</label>
						  <input type="date" name="p_date"required  class="form-control" id="date">
						</div>
						<div class="col-md-12 form-group order">
						  <label for="p_time">Prefered Time</label>
						    
							<select name="p_time" required id="p_time" class="form-control">
									<option value="#">--select--</option>
									<?php foreach($selectedTimeSlots AS $eachRow){
										echo '<option value="'.$eachRow.'">'.$eachRow.'</option>';
									}
								?>
							</select>
							
						</div>
						
					  </div>
					  <div class="row col-md-6">
						
						
						<div class="col-md-12 form-group order">
						<center><h4>-:Notification Time:-</h4></center><br />
							<input type="radio"  class="col-md-6 " name="notification" value="10" id="items">10 minute</checkbox><br />
							<input type="radio" class="col-md-6 " name="notification"  value="20" id="items">20 minute</checkbox><br />
							<input type="radio" class="col-md-6"  name="notification"  value="30" id="items">30 minute</checkbox><br />
						</div>
					  </div>
					</div>
					
				  <div class="col-md-12 order">
						<center><h4>-:Available Items:-</h4></center>
				  </div>
					
                  <div class="row order">
                        <div class=" row form-group">
						
								<?php 

								include ("database.php");

								$usersList = $conn1->query("SELECT * FROM `items` WHERE status='1'");

								foreach($usersList AS $eachRow)
								{

									echo '
									
										
										<div class="col-md-4"><input type="checkbox" name="items[]" class="col-md-1" value="'.$eachRow['id'].'" id="'.$eachRow['id'].'"> <label for="items">'.$eachRow['name'].' price: '.$eachRow['price'].'/-</label> <br /></div>

										
										
									
									';
								}

								?>

						</div>
						
						 
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <center><button type="submit" class="btn btn-info btn-lg" 
					  name="confirm"<a href="order_confirm.php">Confirm Order</a></button></center>
                    </div>
					
                  </div>

                </form>
  
  <?php include "footer.php"?>