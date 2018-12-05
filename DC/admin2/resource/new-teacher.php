<?php
	include "database.php"; 
	if(isset($_POST['save']))
	{	
	$name = @$_POST['name'];
	$dg = @$_POST['dg'];
	$s1 = @$_POST['s1'];
	$s2 = @$_POST['s2'];
	$s3 = @$_POST['s3'];
	$w1 = @$_POST['w1'];
	$w2 = @$_POST['w2'];
	$w3 = @$_POST['w3'];
	$w4 = @$_POST['w4'];
	$w5 = @$_POST['w5'];
	$email = @$_POST['email'];
	$uploaded_file=@$_FILES['proImg']['name'];
	
	if(
		(@$_FILES['proImg']['error'] == 0)
		&& 
		(
		(@$_FILES['proImg']['type'] == "image/jpeg") ||
		(@$_FILES['proImg']['type'] == "image/jpg") ||
		(@$_FILES['proImg']['type'] == "image/png") ||
		(@$_FILES['proImg']['type'] == "image/x-png")
		)
		&& 
		($_FILES['proImg']['size'] <= 999999999)
	)
{
	$fileName = date("YmdHis") . "_" . $_FILES['proImg']['name'];
	move_uploaded_file(
		$_FILES['proImg']['tmp_name'], "Upload/teacher/". $fileName
	);
	
}
else{
    echo '<div class="contents boxpadding">
              <div class="alert alert-danger">
                Your Image is too large, Try another Please...
            </div>                       
        </div>';
}
	$query = $conn1->prepare("
	INSERT INTO `teacher` (`name`,`dg`,`email`,`picture`,`s1`,`s2`,`s3`,`w1`,`w2`,`w3`,`w4`,`w5`) VALUES
	(:NM,:DG,:EM,:PIMG,:S1,:S2,:S3,:W1,:W2,:W3,:W4,:W5)");

$query->execute(array(

						':NM' => $name,
						':DG' => $dg,
						':S1' => $s1,
						':S2' => $s2,
						':S3' => $s3,
						':W1' => $w1,
						':W2' => $w2,
						':W3' => $w3,
						':W4' => $w4,
						':W5' => $w5,
						':EM' => $email,
						':PIMG'=> @$fileName,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully add A Teacher
                                    </div>                       
                                </div>';
								}
				}
?>


<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Teacher Name:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="name" placeholder="Provide Teacher Name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email Address:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="email" placeholder="Provide Email Address">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Teacher's Picture:(max size 1024KB)(285px*285px)</label>
				<input class="form-control" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" name="proImg" >
			</div>
			
			
			<div class="form-group">
				<label for="exampleInputEmail1">Social Media Link:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="s1" placeholder="Provide Facebook LInk "> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="s2" placeholder="Provide Twitter Link"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="s3" placeholder="Provide Linkedin Link"> <br />
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Designation:</label>
			
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="dg" placeholder="Provide Teacher Designation">
			</div> 
			
			<div class="form-group">
				<label for="exampleInputEmail1">Work Area:</label>
			
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="w1" placeholder="Provide Teacher Work Area 1"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="w2" placeholder="Provide Teacher Work Area 2"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="w3" placeholder="Provide Teacher Work Area 3"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="w4" placeholder="Provide Teacher Work Area 4"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="w5" placeholder="Provide Teacher Work Area 5"> <br />
			</div>
			
		</div>
	</div>	
    <div class="row">
		<div class="col-md-6">
			<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary btn-block" name="save">Save</button>
		</div>
	</div>    
        
        </form>