<?php
session_start();
if(isset($_SESSION['USER_SESSION'])){
    header("Location:dashboard.php");
}
include "database.php"; 
		
			if(isset($_POST['login']))
			{
				
				$valToBind = array(
					':EM' => $_POST['student_id'], 
					':PWD' => $_POST['password']
				);

				$query = $conn1->prepare("SELECT * FROM `students` WHERE `student_id`=:EM AND `password`=:PWD");
				
				$query->execute($valToBind);
				$userDetails = $query->fetchAll(PDO::FETCH_ASSOC);
				$totalRow = $query->rowCount(); // 1 //

				if($totalRow > 0)
				{
					$_SESSION['SAFE_EXPIRYTIME'] = strtotime("now + 50000 Seconds"); // Expire Howar Time
					$_SESSION['USER_SESSION'] = $_POST['student_id'];
					$_SESSION['USER_FULLNAME'] = $userDetails[0]['name'];
					header("Location:index.php");
				}
				else
				{
					echo '<div class="contents boxpadding">
                                   <div class="alert alert-danger">
                                       Wrong Username/Password.
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


	     <form class="logIn-form"action="" method="post">
	     	 <input type="text" class="form-control" name="student_id" placeholder="Student Id" />
	     	 <input type="password"class="form-control" name="password" placeholder="password"/>

	     	 <button type="submit" class="btn btn-primary btn-block" name="login">Log In</button>
	     	 <p class="message">Not register?<a href="regi.php">Register</a>
	     	 </p>


	     	 </form>
 		
 		

 		
	  	
	  </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    	</script>

       <script>
       $('.message a').click (function(){
       	$('form').animate({height : "toggle",opacity : "toggle"},"slow");
       
       });
       
       	
       </script>

</body>
</html>
