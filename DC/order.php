<?php include "head.php"?>

  <body>
  <h1 class="mb-4">Make A Order</h1>  
                <form action="order_confirm.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group order">
					<label for="">Enter your Name</label>
                      <input type="text" required name="s_name" class=" form-control" id="m_fname">
                    </div>
					<div class="col-md-6 form-group order">
					<label for="">Enter your Student id</label>
                      <input type="text" required name="s_id" class="form-control" placeholder=""id="m_fname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group order">
					<label for="">Enter your phone no</label>
                      <input type="text"required name="s_phone" class="form-control"placeholder=""onkeypress='return event.charCode>= 48 && event.charCode <=57' id="m_phone">
                    </div>
					<div class="col-md-6 form-group order">
					<label for="">Enter your email</label>
                      <input type="email" required  class="form-control" name="s_email">
                    </div>
                  </div>

                  <div class="row">
					<div class="col-md-6 form-group order">
						<label for="">Current Date</label>
                      <input type="date" required placeholder="" name="c_date"class="form-control" id="date">
                    </div>
                    <div class="col-md-6 form-group order">
						<label for="">Current Time</label>
                      <input type="time" required  class="form-control" name="c_time" id="time">
					  
						
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
								  <option value="12:30:pm">12:30 PM</option>
								  <option value="01:00:pm">01:00 PM</option>
								  <option value="01:30:pm">01:30 PM</option>
								  <option value="02:00:pm">02:00 PM</option>
								  <option value="02:30:pm">02:30 PM</option>
								  <option value="03:00:pm">03:00 PM</option>
								  <option value="03:30:pm">03:30 PM</option>
								  <option value="04:00:pm">04:00 PM</option>
								  <option value="04:30:pm">04:30 PM</option>
								  
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