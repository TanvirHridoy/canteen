<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `students` WHERE `id`=:GOT_ID");
						$delQuery->bindValue(':GOT_ID', $delId, PDO::PARAM_STR);
						$delQuery->execute();
						$deletedRow = $delQuery->rowCount();

						if($deletedRow > 0)
								echo '
						 <div class="contents boxpadding">
                                    <a class="togglethis">Toggle</a>
                                    <div class="alert alert-success">
                                        Successfully Deleted
                                    </div>                       
                                </div>
						
						';
						else
							echo '<div class="contents boxpadding">
                                    <a class="togglethis">Toggle</a>
                                   <div class="alert alert-danger">
                                        Nothing is Deleted
                                    </div>                       
                                </div>';
					}
					?>	
				


<table class="table table-bordered table-responsive" id="dataTable"width="100%" cellspacing="0">
	<tr>
				  <th>Student Id</th>
                  <th>Name</th>
				  <th>Email</th>
                  <th>Phone No</th>
                  <th>Password</th>
                  <th>Operations</th>
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `students`");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['student_id'].'</td>
		<td>'.$eachRow['name'].'</td>
		<td>'.$eachRow['email'].'</td>
		<td>'.$eachRow['phone_no'].'</td>
		<td>'.$eachRow['password'].'</td>
		
		
        <td>
		
		
		 <a href="edit-student.php?es='.$eachRow['id'].'" > <input type="submit" value="Edit"/> </a>								
		<a href="list-student.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete"/></a>
		</td>
		
	</tr>
	';
}

?>
	
</table>