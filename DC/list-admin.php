
<?php 

include ("database.php");

$usersList = $conn1->query("SELECT * FROM `items`");

foreach($usersList AS $eachRow)
{

	echo '
	<tr>
		<td>'.$eachRow['price'].'</td>
		<input type="checkbox" class="col-md-6"  id="items"> '.$eachRow['name'].' price: '.$eachRow['price'].'/-</checkbox>

        
		
	</tr>
	';
}

?>
