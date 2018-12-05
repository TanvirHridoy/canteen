<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `student` WHERE `id`=:GOT_ID");
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
				  <th>Id</th>
                  <th>Name</th>
				  <th>Department</th>
                  <th>Roll</th>
                  <th>Reg.</th>
                  <th>Semester</th>
                  <th>Shift</th>
                  <th>Session</th>
                  <th>Contact</th>
                  <th>Operations</th>
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `student`");

foreach($usersList AS $eachRow)
{

	echo '
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
		
        <td>
		
		
		 <a href="edit-student.php?es='.$eachRow['id'].'" > <input type="submit" value="Edit"/> </a>								
		<a href="list-students.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete"/></a>
		</td>
		
	</tr>
	';
}

?>
	
</table>