			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `students` 
						SET
							`name`='".@$_POST['name']."',
							`email`='".@$_POST['email']."',
							`phone_no`='".@$_POST['phone_no']."',
							`password`='".@$_POST['password']."',
							`student_id`='".@$_POST['student_id']."'
						
						WHERE `id`= '".$_POST['id']."'
					");					
					if( $updatedata > 0 )
					{
						
						echo '
						 <div class="contents boxpadding">
                                    <div class="alert alert-success">
                                        Your Data is Successfully Updated!
                                    </div>                       
                                </div>
						
						';
					}else
							echo '<div class="contents boxpadding">
									<div class="alert alert-danger">
                                       Nothing is Updated! Please Recheck...
                                    </div>                       
                                </div>';
				}
				?>	
				<!--update data post code end-->
				
				<!--old data get code start-->
				<?php 
				include "resource/database.php"; 
				@$editId = $_REQUEST['es'];
				
				if(isset($_REQUEST['es']))
					$_SESSION['edit_cat_edit_id'] = $editId;
				
				$valToBind = array(
					':EDITID' => $_SESSION['edit_cat_edit_id']
				);
				
				$query = $conn1->prepare("SELECT * FROM `students` WHERE `id`=:EDITID");
				$query->execute($valToBind);
				$userDetails = $query->fetchAll(PDO::FETCH_ASSOC);
				
				$rowNumber = $query->rowCount();
				
				if($rowNumber == 0)
						echo '<div class="contents boxpadding">
                                   <div class="alert alert-danger">
                                        No update Data From student!
                                    </div>                       
                                </div>';
				else
				{
					$userDetails = $userDetails[0];

					echo '

						<form action="" method="post" enctype="multipart/form-data">
						
			<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Student Id</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="student_id" value="'.$userDetails['student_id'].'" placeholder="Enter Student Name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Student Name</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="name" value="'.$userDetails['name'].'" placeholder="Enter Student Name">
			</div>
			  
			
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" value="'.$userDetails['email'].'" placeholder="Student Roll Number">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Phone No</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="phone_no" value="'.$userDetails['phone_no'].'" placeholder="Student Reg. Number">
			  </div>
			  
				<button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
				<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
		 </div>
		   
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  </div>
		  <input name="id" type="hidden" value="'.$userDetails['id'].'" />
		
		</form>
		
		';
	}

?>
<!--old data get code end-->