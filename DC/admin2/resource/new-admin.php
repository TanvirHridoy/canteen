<?php
	include "resource/database.php"; 
	
	if(isset($_POST['addadmin']))
	{	
		$id = @$_POST['id'];
		$uemail = @$_POST['uemail'];
		$uname = @$_POST['uname'];
		$uphone = @$_POST['uphone'];
		$password = @$_POST['password'];

		$query = $conn1->prepare("
		INSERT INTO `user` (`id`,`uemail`, `uname`, `uphone`,`password`) VALUES (:SI,:NM,:DP,:RL,:RG)");

		$query->execute(array(
						':SI' => $id,
						':NM' => $uemail,
						':DP' => $uname,
						':RL' => $uphone,
						':RG' => $password,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully added Admin
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you unsuccessfully added Admin
                                    </div>                       
                                </div>';
								
								}
				}
?>


<form action="" method="post">
	<div class="row">
			<div class="col-md-12">
					<div class="form-group">
						<label for="exampleInputEmail1">Admin Name</label>
						<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="uname" placeholder="Provide Admin Name">
					</div>
					  
					   <div class="form-group">
						<label for="exampleInputEmail1">Email Address</label>
						<input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="uemail" placeholder="Provide Email Address note:(email address must be unique)">
					  </div>
					  
					   <div class="form-group">
						<label for="exampleInputEmail1">Phone No.</label>
						<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="uphone" placeholder="Provide Phone No. note:(phone no must be unique)">
					  </div>
					  
						<div class="form-group">
							<label for="exampleInputEmail1">Password </label>
							<input class="form-control" id="exampleInputEmail1" type="password" aria-describedby="emailHelp" name="password" placeholder="Provide Password note:(provide Your Password Very Carefully)">
						</div>
					  
					  <button type="submit" class="btn btn-primary btn-block" name="addadmin" >Register</button>
					  <button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
		 </div>
		   
		  
		  
		  
		  
	</div>
         
		  
		
         
		
        <!--  <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
		
        </form>