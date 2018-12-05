			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `student` 
						SET
							`name`='".@$_POST['name']."',
							`dep`='".@$_POST['dep']."',
							`roll`='".@$_POST['roll']."',
							`reg`='".@$_POST['reg']."',
							`sem`='".@$_POST['sem']."',
							`shift`='".@$_POST['shift']."',
							`sess`='".@$_POST['sess']."',
							`contact`='".@$_POST['contact']."'
						
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
				
				$query = $conn1->prepare("SELECT * FROM `student` WHERE `id`=:EDITID");
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
				<label for="exampleInputEmail1">Student Name</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="name" value="'.$userDetails['name'].'" placeholder="Enter Student Name">
			</div>
			  
			<div class="form-group">
				<label for="exampleInputEmail1">Department</label><br />
				<select name="dep" id="" value="'.$userDetails['dep'].'" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);" >
					<option value="#">Select Department (must be select)</option>
					<option value="Computer">Computer</option>
					<option value="Electrical">Electrical</option>
					<option value="Electronics">Electronics</option>
					<option value="Electro-Medical">Electro-Medical</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Power">Power</option>
					<option value="Civil">Civil</option>
					<option value="Hospitality">Hospitality</option>
				</select>
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Roll No.</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="roll" value="'.$userDetails['roll'].'" placeholder="Student Roll Number">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Registration No.</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="reg" value="'.$userDetails['reg'].'" placeholder="Student Reg. Number">
			  </div>
			  
				<button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
		 </div>
		   
		  <div class="col-md-6">
			<div class="form-group">
            <label for="exampleInputEmail1">Semester</label><br />
			<select name="sem" value="'.$userDetails['sem'].'" id="" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);">
				<option value="#">Select Semester (must be select)</option>
				<option value="1st">First</option>
				<option value="2nd">Second</option>
				<option value="3rd">Third</option>
				<option value="4th">Fourth</option>
				<option value="5th">Fifth</option>
				<option value="6th">Sixth</option>
				<option value="7th">Seventh</option>
				<option value="8th">Eighth</option>
			
			</select>
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Shift</label><br />
				<select name="shift" value="'.$userDetails['shift'].'" id="" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);">
					<option value="#">Select Shift (must be select)</option>
					<option value="1st">First Shift</option>
					<option value="2nd">Second Shift</option>
				</select>
			</div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Session</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="sess" value="'.$userDetails['sess'].'" placeholder="Enter Session">
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Contact No.</label>
            <input class="form-control" value="'.$userDetails['contact'].'" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="contact" placeholder="Enter Student Contact No.">
          </div>
		  <button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
		  
		  </div>
		  <input name="id" type="hidden" value="'.$userDetails['id'].'" />
		
		</form>
		
		';
	}

?>
<!--old data get code end-->