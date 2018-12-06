            <?php
	include "admin2/resource/database.php"; 
	
	if(isset($_POST['send']))
	{	
		$id = @$_POST['id'];
		$name = @$_POST['name'];
		$email = @$_POST['email'];
		$massage = @$_POST['massage'];

		$query = $conn1->prepare("
		INSERT INTO `feedback` (`id`,`name`, `email`, `massage`) VALUES (:ID,:NM,:EM,:MS)");

		$query->execute(array(
						':ID' => $id,
						':NM' => $name,
						':EM' => $email,
						':MS' => $massage,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										<center><h2>Thank you For Your Feedback :D </h2></center>
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-danger">
										<center><h2>unsuccessfull</h2></center>
                                    </div>                       
                                </div>';
								
								}
				}
?>
	