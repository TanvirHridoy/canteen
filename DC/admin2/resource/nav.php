<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">DIU CANTEEN ADMIN</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		

		
		
        
        
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages225" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Order's</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages225">
            <li>
              <a href="list-cooking.php">Order In cooking</a>
            </li>
            <li>
              <a href="list-delivered.php">Order Which Delivered</a>
            </li>
			<li>
              <a href="list-canceled.php">Order Which Delivered</a>
            </li>
          </ul>
        </li>
		
				
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents9991" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-secret"></i>
            <span class="nav-link-text">students</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents9991">
            <li>
              <a href="new-student.php">Create New Student login</a>
            </li>
            <li>
              <a href="list-student.php">List of Students's</a>
            </li>
          </ul>
        </li>
		
		
		

		
		

		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents999" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-secret"></i>
            <span class="nav-link-text">Admin</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents999">
            <li>
              <a href="new-admin.php">Create New Admin</a>
            </li>
            <li>
              <a href="list-admin.php">List of Admin's</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="feedback.php">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Feedback</span>
          </a>
        </li>
       
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

 <?php include("new msg_&_notifications.php")?>
    </div>
  </nav>