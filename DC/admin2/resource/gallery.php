<?php
	include "database.php"; 
	if(isset($_POST['addgallery']))
	{	
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
		$_FILES['proImg']['tmp_name'], "Upload/gallery/". $fileName
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
	INSERT INTO `gallary` (`picture`) VALUES
	(:PIMG)");

$query->execute(array(

						':PIMG'=> @$fileName,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully add A Image
                                    </div>                       
                                </div>';
								}
				}
?>


<form action="" method="post" enctype="multipart/form-data">
		
         
		  
		  
		   <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Upload Picture</label>
            <input class="form-control" id="exampleInputEmail1" type="file" aria-describedby="emailHelp" name="proImg" >
          </div>
		  
		  <div class="row">
			<div class="col-md-12" style=padding-top:10px;>
			      <button type="submit" class="btn btn-primary btn-block" name="addgallery" >Submit</button>
			</div>
			<div class="col-md-12" style=padding-top:10px;>
			   <button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button> 
			</div>
	    </div>
		
        <!--  <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
		
        </form>