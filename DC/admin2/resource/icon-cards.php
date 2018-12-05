<?php
	include "database.php"; 
	if(isset($_POST['addnotice']))
	{	
	$id = @$_POST['id'];
	$title = @$_POST['title'];
	$date = @$_POST['date'];
	$ldate = @$_POST['ldate'];
	$details = @$_POST['details'];
	 
	$query = $conn1->prepare("
	INSERT INTO `notice` (`id`,`title`, `date`,`ldate`,`details`) VALUES (:SI,:TT,:DT,:LT,:DL)");

$query->execute(array(

						':SI' => $id,
						':TT' => $title,
						':DT' => $date,
						':LT' => $ldate,
						':DL' => $details,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)									
													{
												
														echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															you successfully added A New Notice
														</div>                       
													</div>';
													}
													else{
														 echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															 add New Notice unsuccessfull
														</div>                       
													</div>';
													
													}
									}
?>
<?php
	include "database.php"; 
	if(isset($_POST['addevent']))
	{	
	$id = @$_POST['id'];
	$title = @$_POST['title'];
	$date = @$_POST['date'];
	$details = @$_POST['details'];
	$time = @$_POST['time'];

	$query = $conn1->prepare("
	INSERT INTO `event` (`id`,`title`, `date`, `time`, `details`) VALUES (:SI,:TT,:DT,:TM,:DL)");

$query->execute(array(

						':SI' => $id,
						':TT' => $title,
						':DT' => $date,
						':DL' => $details,
						':TM'=> $time,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)									
													{
												
														echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															you successfully added A New Event
														</div>                       
													</div>';
													}
													else{
														 echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															 add New Event unsuccessfull
														</div>                       
													</div>';
													
													}
									}
?>
<?php
	include "database.php"; 
	if(isset($_POST['addseminar']))
	{	
	$id = @$_POST['id'];
	$title = @$_POST['title'];
	$day = @$_POST['day'];
	$month = @$_POST['month'];
	$time = @$_POST['time'];
	$ap = @$_POST['ap'];
	$sub = @$_POST['sub'];
	
	$query = $conn1->prepare("
	INSERT INTO `seminar` (`id`,`title`, `day`, `month`,`time`,`ap`,`sub`) VALUES (:SI,:TT,:DT,:MN,:TM,:AP,:SB)");

$query->execute(array(

						':SI' => $id,
						':TT' => $title,
						':DT' => $day,
						':MN'=> $month,
						':TM'=> $time,
						':AP'=> $ap,
						':SB'=> $sub,
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)									
													{
												
														echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															you successfully added A New Seminar
														</div>                       
													</div>';
													}
													else{
														 echo '<div class="contents boxpadding">
														  <div class="alert alert-success">
															 add New Task unsuccessfull
														</div>                       
													</div>';
													
													}
									}
?>
<div class="row" style="padding-top:20px;">
	   <div class="col-xl-4 col-sm-8 mb-4">
          <div class="form-group">
			<form action="" method="post" enctype="multipart/form-data">
				<h1><i class="fa fa-file-text" aria-hidden="true"></i> New Notice</h1>
				<lebel>Notice Title</lebel> <br />
				<input type="text" class="form-control" name="title" class="form-control" placeholder="Enter Notice Title " /> <br />
				<lebel>Notice Date </lebel><br />
				<input type="date" class="form-control" name="date" class="form-control" placeholder="Enter Notice Date (MM/DD/YEAR)" /> <br />
				<lebel>Notice Details </lebel><br />
				<input type="text" class="form-control" name="details" class="form-control" placeholder="Enter Notice Details"/><br />
				<label for="exampleInputEmail1"> Last Date</label><br />
				<input class="form-control" id="exampleInputEmail1" type="date" aria-describedby="emailHelp" name="ldate" placeholder="Enter last date" ><br />
				<button type="submit" class="btn btn-primary btn-block" name="addnotice" >Submit</button>
				<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
			</form>
          </div>
        </div>
		
		
		<div class="col-xl-4 col-sm-8 mb-4">
          <div class="form-group">
			<form action="" method="post" enctype="multipart/form-data">	
				<h1><i class="fa fa-calendar-o" aria-hidden="true"></i> New Event</h1>
				<lebel>Event Title </lebel><br />
				<input type="text" name="title" class="form-control" placeholder= "Enter Event Title"/> <br />
				<lebel>Event Date </lebel><br />
				<input type="date" name="date" class="form-control" placeholder= "Enter Event Date (MM/DD/YEAR)" /> <br />
				<lebel>Event Details </lebel><br />
				<input type="text" name="details" class="form-control" placeholder= "Enter Event Details" /> <br />
				<label for="exampleInputEmail1">Event Time</label><br />
				<input class="form-control" id="exampleInputEmail1" type="time" aria-describedby="emailHelp" name="time" placeholder= "Enter Event Time (hh:mm am/pm)" ><br />
				<button type="submit" class="btn btn-primary btn-block" name="addevent" >Submit</button>
				<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
			</form>
			
          </div>
        </div>
		
		
		
        <div class="col-xl-4 col-sm-8 mb-4">
          <div class="form-group">
			<form action="" method="post" enctype="multipart/form-data">
				<h1><i class="fa fa-fw fa-bell"></i> New Seminar</h1>
				<lebel>Enter Seminar Title </lebel><br />
				<input type="text" name="title" class="form-control" placeholder=" Enter Seminar Title" /> <br />
				<lebel>Seminar Date </lebel><br />
				<input type="date" name="date" class="form-control" placeholder=" Enter seminar date (MM/DD/YEAR)" /> <br />
				<lebel>Enter Seminar Subject </lebel><br />
				<input type="text" name="sub" class="form-control" placeholder=" Enter Seminar Subject" /> <br />
			 
				<div class="navbar">
				    <label for="exampleInputEmail1 " class="col-md-4">Time:</label>
					<input class="form-control col-md-4" id="exampleInputEmail1" aria-describedby="emailHelp" name="time" placeholder="ex:10.00" type="text">
					<input class="form-control col-md-4" id="exampleInputEmail1" aria-describedby="emailHelp" name="ap" placeholder="am/pm " type="text">
					</br>
					<lebel class="col-md-5">Date</lebel>
					<input class="form-control col-md-5" id="exampleInputEmail1" aria-describedby="emailHelp" name="day" placeholder="day no" type="text">
					</br>
					<lebel class="col-md-5">Month </lebel>
					<input class="form-control col-md-5" id="exampleInputEmail1" aria-describedby="emailHelp" name="month" placeholder="Ex:January" type="text">
					
				</div>
				
				<button type="submit" class="btn btn-primary btn-block" name="addseminar" >Submit</button>
				<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
			</form>
				
          </div>
        </div>
      </div>
             