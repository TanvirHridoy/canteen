			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `order` 
						SET
							
							`status`='".@$_POST['status']."'

						
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
				
				$query = $conn1->prepare("SELECT * FROM `order` WHERE `id`=:EDITID");
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
		<div class="col-md-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Current Status :"'.$userDetails['status'].'"</label>
				<select name="status" value="'.$userDetails['status'].'" id="exampleInputEmail1" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);" >
					<option value="#">Select...</option>
					<option value="cooking">Cooking mode</option>
					<option value="delivered">Delivered Mood </option>
					<option value="canceled">Canceled Mood</option>
				</select>
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
