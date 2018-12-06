<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `order` WHERE `id`=:GOT_ID");
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
		<th>Student <br />Id </th>
		<th>ordered <br />time & Date</th>
		<th>Order <br />prefered <br />time& date</th>
		<th>Price</th>
		<th>payment <br />status <br /></th>
		<th>Notification <br /> time</th>
		<th>Operations</th>
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `order` WHERE status='canceled' ORDER BY id DESC");

foreach($usersList AS $eachRow)
{
	

	echo '
	<tr>
	
		<td>'.$eachRow['s_id'].'</td>
		<td>'.$eachRow['c_time'].'<br />'.$eachRow['c_date'].'</td>
		<td>'.$eachRow['p_time'].'<br />'.$eachRow['p_date'].'</td>
		<td>'.$eachRow['price'].' taka</td>
		<td> '.$eachRow['p_status'].'</td>
		<td>'.$eachRow['notification'].' min</td>
        <td>
		
		<a href="edit-status.php?es='.$eachRow['id'].'" > <input type="submit" value="Update status"/> </a>								
		<a href="list-delivered.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete" /></a></td>
		
	</tr>
	';
}


?>
	
</table>