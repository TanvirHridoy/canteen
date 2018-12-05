			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `teacher` 
						SET
							`name`='".@$_POST['name']."',
							`sz`='".@$_POST['sz']."'

						
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
				
				$query = $conn1->prepare("SELECT * FROM `press` WHERE `id`=:EDITID");
				$query->execute($valToBind);
				$userDetails = $query->fetchAll(PDO::FETCH_ASSOC);
				
				$rowNumber = $query->rowCount();
				
				if($rowNumber == 0)
						echo '<div class="contents boxpadding">
                                   <div class="alert alert-danger">
                                        No update Data From Product!
                                    </div>                       
                                </div>';
				else
				{
					$userDetails = $userDetails[0];

					echo '

<form action="" method="post" enctype="multipart/form-data">

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Product Title:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['name'].'" name="name" placeholder="Provide Product Title">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Product Size:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['sz'].'" name="sz" placeholder="Provide Product Size">
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