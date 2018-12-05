			<!--update data post code start-->
			<?php 
				include "resource/database.php"; 
				if(isset($_POST['update']))	
				{
						$updatedata = $conn1->exec("
						UPDATE `course` 
						SET
							`c_name`='".@$_POST['c_name']."',
							`c_type`='".@$_POST['c_type']."',
							`c_no`='".@$_POST['c_no']."',
							`fee`='".@$_POST['fee']."',
							`month`='".@$_POST['month']."',
							`hour`='".@$_POST['hour']."',
							`s1`='".@$_POST['s1']."',
							`s2`='".@$_POST['s2']."',
							`s3`='".@$_POST['s3']."',
							`s4`='".@$_POST['s4']."',
							`s5`='".@$_POST['s5']."',
							`hour`='".@$_POST['hour']."',
							`day`='".@$_POST['day']."'

						
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
				
				$query = $conn1->prepare("SELECT * FROM `course` WHERE `id`=:EDITID");
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
				<label for="exampleInputEmail1">Course Subject:</label>
				<select name="c_name" value="'.$userDetails['c_name'].'" id="exampleInputEmail1" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);" >
					<option value="#">Select...</option>
					<option value="COMPUTER OFFICE APPLICATION">COMPUTER OFFICE APPLICATION</option>
					<option value="GRAPHIC DESIGN">GRAPHIC DESIGN </option>
					<option value="WEB DESIGN">WEB DESIGN</option>
					<option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
					<option value="COMPUTER NETWORK & HARDWARE">COMPUTER NETWORK & HARDWARE</option>
					<option value="AUTOCAD 2D">AUTOCAD 2D</option>
					<option value="AUTOCAD 3D">AUTOCAD 3D</option>
					<option value="OUTSOURCING">OUTSOURCING</option>
					<option value="YOUTUBE MARKETING">YOUTUBE MARKETING</option>
					<option value="YOUTUBE MARKETING">VIDEO EDITING</option>
				</select>
			</div>
			  
			<div class="form-group">
				<label for="exampleInputEmail1 " >Duration:</label>
				<div class="navbar">
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['month'].'" name="month" placeholder="Ex:3"> 
					<lebel class="col-md-4">Months</lebel>
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['c_no'].'" name="c_no" placeholder="Ex:36"> 
					<lebel class="col-md-4">Classs</lebel>
				</div>
				<div class="navbar">
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['hour'].'" name="hour" placeholder="Ex:1">
					<lebel class="col-md-4">Hours a day</lebel>
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['day'].'" name="day" placeholder="Ex:3">
					<lebel class="col-md-4">Days Per a Week</lebel>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1 " >Course Type:</label>
				<div class="navbar">
					<input class="form-control col-md-4" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['c_type'].'" name="c_type" placeholder="Ex:Basic/Advanced">
				</div>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1 " >Course Fee:</label>
				<div class="navbar">
					<lebel class="col-md-4">BDT</lebel>
					<input class="form-control col-md-4" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" value="'.$userDetails['fee'].'" name="fee" placeholder="Ex:5,500"> 
					<lebel class="col-md-4">/-</lebel>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Software Tought:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;" value="'.$userDetails['s1'].'" name="s1" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;" value="'.$userDetails['s2'].'" name="s2" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;" value="'.$userDetails['s3'].'" name="s3" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;" value="'.$userDetails['s4'].'" name="s4" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;" value="'.$userDetails['s5'].'" name="s5" placeholder="Provide Software Name">
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
