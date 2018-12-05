<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `course` WHERE `id`=:GOT_ID");
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
				


<table class="table table-condensed table-bordered table-responsive">
	<tr>
		<th>Name</th>
		<th>Fee</th>
		<th>Month's</th>
		<th>Hour P/D</th>
		<th>Days P/W</th>
		<th>Classes</th>
		<th>Operations</th>
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `course`");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['c_name'].' ('.$eachRow['c_type'].')</td>
		<td>'.$eachRow['fee'].'</td>
		<td>'.$eachRow['month'].' months</td>
		<td>'.$eachRow['hour'].' hours</td>
		<td>'.$eachRow['day'].' days</td>
		
		<td>'.$eachRow['c_no'].' classes</td>
        <td>
		
		<a href="edit-course.php?es='.$eachRow['id'].'" > <input type="submit" value="Edit"/> </a>								
		<a href="list-course.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete" /></a></td>
		
	</tr>
	';
}

?>
	
</table>