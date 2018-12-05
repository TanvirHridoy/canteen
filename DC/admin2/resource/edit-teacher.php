			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `teacher` 
						SET
							`name`='".@$_POST['name']."',
							`dg`='".@$_POST['dg']."',
							`s1`='".@$_POST['s1']."',
							`s2`='".@$_POST['s2']."',
							`s3`='".@$_POST['s3']."',
							`w1`='".@$_POST['w1']."',
							`w4`='".@$_POST['w4']."',
							`w3`='".@$_POST['w3']."',
							`w2`='".@$_POST['w2']."',
							`w5`='".@$_POST['w5']."',
							`email`='".@$_POST['email']."'

						
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
				
				$query = $conn1->prepare("SELECT * FROM `teacher` WHERE `id`=:EDITID");
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
				<label for="exampleInputEmail1">Teacher Name:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['name'].'" name="name" placeholder="Provide Teacher Name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email Address:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['email'].'" name="email" placeholder="Provide Email Address">
			</div>
			
			
			
			<div class="form-group">
				<label for="exampleInputEmail1">Social Media Link:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['s1'].'" name="s1" placeholder="Provide Facebook LInk "> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['s2'].'" name="s2" placeholder="Provide Twitter Link"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['s3'].'" name="s3" placeholder="Provide Linkedin Link"> <br />
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Designation:</label>
			
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['dg'].'" name="dg" placeholder="Provide Teacher Designation">
			</div> 
			
			<div class="form-group">
				<label for="exampleInputEmail1">Work Area:</label>
			
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['w1'].'" name="w1" placeholder="Provide Teacher Work Area 1"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['w2'].'" name="w2" placeholder="Provide Teacher Work Area 2"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['w3'].'" name="w3" placeholder="Provide Teacher Work Area 3"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['w4'].'" name="w4" placeholder="Provide Teacher Work Area 4"> <br />
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['w5'].'" name="w5" placeholder="Provide Teacher Work Area 5"> <br />
			</div>
			
		</div>
	</div>	

    <div class="row">
	
		<div class="col-md-12">
			<button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
		</div>
	</div>    
        <input name="id" type="hidden" value="'.$userDetails['id'].'" />
        </form>
		
		  
		';
	}

?>
<!--old data get code end-->