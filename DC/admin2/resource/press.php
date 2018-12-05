<?php
	include "database.php"; 
	if(isset($_POST['save']))
	{	
	$name = @$_POST['name'];
	$sz = @$_POST['sz'];
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
		$_FILES['proImg']['tmp_name'], "Upload/press/". $fileName
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
	INSERT INTO `press` (`name`,`sz`,`picture`) VALUES
	(:NM,:SZ,:PIMG)");

$query->execute(array(

						':NM' => $name,
						':SZ' => $sz,
						':PIMG'=> @$fileName,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully add A Product
                                    </div>                       
                                </div>';
								}
				}
?>


<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Product Title:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="name" placeholder="Provide Product Title">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Size:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="sz" placeholder="Provide Product Size">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product's Picture:(max size 1024KB)</label>
				<input class="form-control" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" name="proImg" >
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