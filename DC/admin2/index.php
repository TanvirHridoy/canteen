<?php
session_start();
if(isset($_SESSION['USER_SESSION'])){
    header("Location:dashboard.php");
}
include "../database.php"; 
		
			if(isset($_POST['login']))
			{
				
				$valToBind = array(
					':EM' => $_POST['uemail'], 
					':PWD' => $_POST['password']
				);

				$query = $conn1->prepare("SELECT * FROM `user` WHERE `uemail`=:EM AND `password`=:PWD");
				
				$query->execute($valToBind);
				$userDetails = $query->fetchAll(PDO::FETCH_ASSOC);
				$totalRow = $query->rowCount(); // 1 //

				if($totalRow > 0)
				{
					$_SESSION['SAFE_EXPIRYTIME'] = strtotime("now + 50000 Seconds"); // Expire Howar Time
					$_SESSION['USER_SESSION'] = $_POST['uemail'];
					$_SESSION['USER_FULLNAME'] = $userDetails[0]['username'];
					header("Location:dashboard.php");
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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - DIU Canteen</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login (DIU Canteen)
        <a href="https://bpi.edu.bd" style="text-decoration:none; padding-left:206px; color:black;">Home</a>
      </div>
      <div class="card-body">
       
	   <form action="" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="uemail" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
		  
		   <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
		  
        </form>
		
		
       
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