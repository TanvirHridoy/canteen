
<?php
	include "resource/database.php"; 
	if(isset($_POST['save']))
	{	
	$name = @$_POST['st'];

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
		$_FILES['proImg']['tmp_name'], "Upload/slider/". $fileName
	);
	
}
	$query = $conn1->prepare("
	INSERT INTO `slider` (`title`,`picture`) VALUES
	(:NM,:PIMG)");

$query->execute(array(

						':NM' => $name,
						':PIMG'=> @$fileName,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully add Slider
                                    </div>                       
                                </div>';
								}
				}
?>


<form action="" method="post" enctype="multipart/form-data">
		
         
		  <div class="form-group">
            <label for="exampleInputEmail1">Slider Title</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="st" placeholder="Provide Slider Title">
          </div>
		  
		   <div class="form-group">
            <label for="exampleInputEmail1">Slider Picture (1349px*395px)</label>
            <input class="form-control" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" name="proImg" placeholder="Enter Student Name">
          </div>
		  
         
		  
		   
		  
         <button type="submit" class="btn btn-primary btn-block" name="save">Save</button>
		
        <!--  <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
		
        </form>