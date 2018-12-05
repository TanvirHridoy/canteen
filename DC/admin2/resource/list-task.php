<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `saminer` WHERE `id`=:GOT_ID");
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
                  <th>TITLE</th>
				  <th>SUBJECT</th>
				  <th>TIME</th>
                  <th>DATE</th>
		          <th>Operations</th>
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `seminar` order by `id` desc");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['title'].'</td>
		<td>'.$eachRow['sub'].'</td>
		<td>'.$eachRow['time'].''.$eachRow['ap'].'</td>
		<td>'.$eachRow['date'].'</td>
		
        <td>
		
		
										
		<a href="list-task.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="DELETE"/></a>
		</td>
		
	</tr>
	';
}

?>
	
</table>