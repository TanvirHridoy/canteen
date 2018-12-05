<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `teacher` WHERE `id`=:GOT_ID");
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
		<th>Designation</th>
		<th>Email</th>
		<th>Picture</th>
		<th>Operations</th>
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `teacher`");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['name'].'</td>
		<td>'.$eachRow['dg'].'</td>
		<td>'.$eachRow['email'].'</td>
		<td><img src="../admin2/Upload/teacher/'.$eachRow['picture'].'" width="50px" " height="50px"></td>
        <td>
		
		<a href="edit-teacher.php?es='.$eachRow['id'].'" > <input type="submit" value="Edit"/> </a>								
		<a href="list-teacher.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete" /></a></td>
		
	</tr>
	';
}

?>
	
</table>