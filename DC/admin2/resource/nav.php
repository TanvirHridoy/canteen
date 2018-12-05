<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">SAATRONG SYSTEMS ADMIN</a>
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
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages22" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Teachers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages22">
            <li>
              <a href="teacher.php">New Teacher</a>
            </li>
            <li>
              <a href="list-teacher.php">List of Teacher</a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages1232" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Press & Printing</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages1232">
            <li>
              <a href="press.php">New P & P</a>
            </li>
            <li>
              <a href="list-press.php">List of P & P</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages225" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="nav-link-text">Course"s</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages225">
            <li>
              <a href="new-course.php">New Course</a>
            </li>
            <li>
              <a href="list-course.php">List of Course</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages232" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-picture-o"></i>
            <span class="nav-link-text">Slider's</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages232">
            <li>
              <a href="new-slider.php">New Slider</a>
            </li>
            <li>
              <a href="list-slider.php">List of Slider</a>
            </li>
          </ul>
        </li>		
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages301" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-picture-o"></i>
            <span class="nav-link-text">Student's Gallery</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages301">
            <li>
              <a href="gallery.php">New Student's Gallery</a>
            </li>
            <li>
              <a href="list-gallery.php">List Student's Gallery</a>
            </li>
          </ul>
        </li>
		
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Slider's Menu">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages43" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Notice / Event / Seminar</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages43">
            <li>
              <a href="list-notice.php">List Of Notice</a>
            </li>
            <li>
              <a href="list-event.php">List of Event</a>
            </li>
			<li>
              <a href="list-task.php">List of Seminar</a>
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