<?php
	include "database.php"; 
	
	if(isset($_POST['register']))
	{	
		$id = @$_POST['id'];
		$name = @$_POST['name'];
		$email = @$_POST['email'];
		$student_id = @$_POST['student_id'];
		$password = @$_POST['password'];
		$phone_no = @$_POST['phone_no'];

		$query = $conn1->prepare("
		INSERT INTO `students` (`id`,`name`, `email`, `student_id`,`password`,`phone_no`) VALUES (:SI,:NM,:EM,:SI,:PS,:PN)");

		$query->execute(array(
						':SI' => $id,
						':NM' => $name,
						':EM' => $email,
						':SI' => $student_id,
						':PS' => $password,
						':PN' => $phone_no,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully registered
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										Registration unsuccessfull
                                    </div>                       
                                </div>';
								
								}
				}
?>

<!DOCTYPE html>
<html>
<head>
	<title>log in and registration page design</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<div class="logIn-page">
	  <div class="form">
	   <form  class="register-form" action="" method="post">
	      <input type="text" name="name" placeholder="Enter your name"/>
	      <input type="email"  name="email" placeholder="email "/>
	      	<input type="text" name="student_id" placeholder="student id"/>
	     	 <input type="password" name="password" placeholder="password"/>
	     	<p class="message">Active Phone Number</p>

	     
	     	<input type="text" onkeypress='return event.charCode>= 48 && event.charCode <=57' name="phone_no"
	    placeholder="Phone No"></input>

	    <button type="submit" class="btn btn-primary btn-block" name="register" >Submit</button> 
	    <p class="message">Already register?<a href="login.php">Log in</a>
	    </p>

	     
 		
 		</form>

 		<script src="https://code.jquery.com/jquery-3.3.1.min.js">
    	</script>

       <script>
       $('.message a').click (function(){
       	$('form').animate({height : "toggle",opacity : "toggle"},"slow");
       
       });
       
       	
       </script>
	  	
	  </div>
    </div>

</body>
</html>
