<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - Barishal Polytechnic Institute</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        
		
	<?php
	
	include "resource/database.php"; 
	
	if(isset($_POST['register']))
	{	
		$username = @$_POST['username'];
		$umail = @$_POST['umail'];
		$phone = @$_POST['phone'];
		$password = @$_POST['password'];

		$query = $conn1->prepare("
		INSERT INTO `user` (`username`,`umail`, `uphone`, `password`) VALUES (:UN,:UM,:PH,:PA)");

		$query->execute(array(
						':UN' => $username,
						':UM' => $umail,
						':PH' => $phone,
						':PA' => $password,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully added Students
                                    </div>                       
                                </div>';
								}
				}
		?>

		
		<form action="" method="post">
		
         
		  
		   <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="username" placeholder="Enter User Name">
          </div>
		  
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="umail" placeholder="Enter email">
          </div>
		  
		   <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="phone" placeholder="Enter Phone Number">
          </div>
		  
		   <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input class="form-control" id="exampleInputEmail1" type="password" aria-describedby="emailHelp" name="password" placeholder="Enter Password">
          </div>
		  
         <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
		
        <!--  <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
		
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
