

<?php
					include "resource/database.php"; 
					if(isset($_REQUEST['ds']))
					{
						$delId = $_REQUEST['ds'];
						//$delId = $_GET['tid'];
						
						$delQuery = $conn1->prepare("DELETE FROM `slider` WHERE `id`=:GOT_ID");
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
				


<table class="table table-condensed">
	<tr>
		<th>Title</th>
		<th>Picture</th>
		
		
	</tr>
<?php 

include ("resource/database.php");

$usersList = $conn1->query("SELECT * FROM `slider`");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['title'].'</td>
		<td><img src="../admin2/Upload/slider/'.$eachRow['picture'].'" width="150px"></td>
        <td>
		
		<a href="list-slider.php?ds='.$eachRow['id'].'" > <input name="ds" type="submit" value="Delete"/></a></td>
		
	</tr>
	';
}

?>
	
</table>