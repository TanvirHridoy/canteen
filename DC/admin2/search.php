			
				<?php
	include "resource/database.php"; 
	
	if(isset($_GET['search']))
	{	
		$roll = @$_GET['roll'];

		$query = $conn1->prepare("SELECT * FROM `student` WHERE roll='RL' order by `id` desc");
		foreach($usersList AS $eachRow)
				{

					echo '
					<tr>
						
						
						<tr>
						  <td>'.$eachRow['id'].'</td>
						  <td>'.$eachRow['name'].'</td>
						  <td>'.$eachRow['dep'].'</td>
						  <td>'.$eachRow['roll'].'</td>
						  <td>'.$eachRow['reg'].'</td>
						  <td>'.$eachRow['sem'].'</td>
						  <td>'.$eachRow['shift'].'</td>
						  <td>'.$eachRow['sess'].'</td>
						  <td>'.$eachRow['contact'].'</td>
						</tr>

					</tr>
					';
				}

		$query->execute(array(
						':RL' => $roll,
					));
					

	}
?>
<form action="" method="get">
			<div class="form-group">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="roll" placeholder="Search for Roll">
			</div>
			
			<button type="submit" class="btn btn-primary btn-block" name="search" >search</button>
			</form>