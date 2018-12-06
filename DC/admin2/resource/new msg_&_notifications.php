      <ul class="navbar-nav ml-auto">
	  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
           <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
		   <div class="dropdown-menu" aria-labelledby="messagesDropdown">
		   <h6 class="dropdown-header">New Messages:</h6>
<?php 

include ("../database.php");

$usersList = $conn1->query("SELECT * FROM `feedback` order by `id` desc limit 3");

foreach($usersList AS $eachRow)
{

	echo '
        
         
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="feedback.php">
              <strong>'.$eachRow['name'].'</strong>
              <div class="dropdown-message small">'.$eachRow['massage'].'</div>
            </a>
            
	';
}

?>
			<a class="dropdown-item small" href="feedback.php">View all messages</a>
          </div>
        
		</li>
		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning"> New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>

	
	
            <a class="dropdown-item" href="list-task.php">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>hi</strong>
              </span>
              <span class="small float-right text-muted">hi</span>
              <div class="dropdown-message small">hi</div>
            </a>
    
            <a class="dropdown-item small" href="list-task.php">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
		        <a class="nav-link" href="resource/logout.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>