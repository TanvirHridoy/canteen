<?php
	include "resource/database.php"; 
	
	if(isset($_POST['addstudent']))
	{	
		$id = @$_POST['id'];
		$name = @$_POST['name'];
		$dep = @$_POST['dep'];
		$roll = @$_POST['roll'];
		$reg = @$_POST['reg'];
		$sem = @$_POST['sem'];
		$shift = @$_POST['shift'];
		$sess = @$_POST['sess'];
		$contact = @$_POST['contact'];

		$query = $conn1->prepare("
		INSERT INTO `student` (`id`,`name`, `dep`, `roll`,`reg`,`sem`,`shift`,`sess`,`contact`) VALUES (:SI,:NM,:DP,:RL,:RG,:SM,:SF,:SS,:CT)");

		$query->execute(array(
						':SI' => $id,
						':NM' => $name,
						':DP' => $dep,
						':RL' => $roll,
						':RG' => $reg,
						':SM' => $sem,
						':SF' => $shift,
						':SS' => $sess,
						':CT' => $contact,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully added Students
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you unsuccessfully added Students
                                    </div>                       
                                </div>';
								
								}
				}
?>


<form action="" method="post">
	<div class="row">
			<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Student Name</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="name" placeholder="Enter Student Name">
			</div>
			  
			<div class="form-group">
				<label for="exampleInputEmail1">Department</label><br />
				<select name="dep" id="" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);" >
					<option value="#">Select...</option>
					<option value="Computer">Computer</option>
					<option value="Electrical">Electrical</option>
					<option value="Electronics">Electronics</option>
					<option value="Medical">Electro-Medical</option>
					<option value="Mechanical">Mechanical</option>
					<option value="Power">Power</option>
					<option value="Civil">Civil</option>
					<option value="Hospitality">Hospitality</option>
				</select>
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Roll No.</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="roll" placeholder="Student Roll Number">
			  </div>
			  
			   <div class="form-group">
				<label for="exampleInputEmail1">Registration No.</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="reg" placeholder="Student Reg. Number">
			  </div>
			  
			  
		 </div>
		   
		  <div class="col-md-6">
			<div class="form-group">
            <label for="exampleInputEmail1">Semester</label><br />
			<select name="sem" id="" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);">
				<option value="#">Select Semester</option>
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
				<select name="shift" id="" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);">
					<option value="#">Select Shift</option>
					<option value="1st">First Shift</option>
					<option value="2nd">Second Shift</option>
				</select>
			</div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Session</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="sess" placeholder="Enter Session">
          </div>
		  
		  <div class="form-group">
            <label for="exampleInputEmail1">Email/Contact No.</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="contact" placeholder="Enter Student Email/Contact No.">
          </div>
		  
		  
		  </div>
		  
	</div>
        <div class="row">
			<div class="col-md-6" style=padding-top:10px;>
			      <button type="submit" class="btn btn-primary btn-block" name="addstudent" >Register</button>
			</div>
			<div class="col-md-6" style=padding-top:10px;>
			   <button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button> 
			</div>
	    </div>
		
        </form>