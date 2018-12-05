<?php
	include "database.php"; 
	
	if(isset($_POST['save']))
	{	
		$m1 = @$_POST['m1'];
		$m2 = @$_POST['m2'];
		$m3 = @$_POST['m3'];
		$m4 = @$_POST['m4'];
		$m5 = @$_POST['m5'];
		$m6 = @$_POST['m6'];
		$m7 = @$_POST['m7'];
		$m8 = @$_POST['m8'];
		$m9 = @$_POST['m9'];
		$m10 = @$_POST['m10'];
		$m11 = @$_POST['m11'];
		$m12 = @$_POST['m12'];
		$m13 = @$_POST['m13'];
		$m14 = @$_POST['m14'];
		$m15 = @$_POST['m15'];
		$c_name = @$_POST['c_name'];
		$month = @$_POST['month'];
		$hour = @$_POST['hour'];
		$day = @$_POST['day'];
		$c_no = @$_POST['c_no'];
		$c_type = @$_POST['c_type'];
		$fee = @$_POST['fee'];
		$c1 = @$_POST['c1'];
		$c2 = @$_POST['c2'];
		$c3 = @$_POST['c3'];
		$c4 = @$_POST['c4'];
		$c5 = @$_POST['c5'];
		$c6 = @$_POST['c6'];
		$c7 = @$_POST['c7'];
		$c8 = @$_POST['c8'];
		$c9 = @$_POST['c9'];
		$c10 = @$_POST['c10'];
		$c11 = @$_POST['c11'];
		$c12 = @$_POST['c12'];
		$c13 = @$_POST['c13'];
		$c14 = @$_POST['c14'];
		$c15 = @$_POST['c15'];
		$h1 = @$_POST['h1'];
		$h2 = @$_POST['h2'];
		$h3 = @$_POST['h3'];
		$h4 = @$_POST['h4'];
		$h5 = @$_POST['h5'];
		$s1 = @$_POST['s1'];
		$s2 = @$_POST['s2'];
		$s3 = @$_POST['s3'];
		$s4 = @$_POST['s4'];
		$s5 = @$_POST['s5'];

		$query = $conn1->prepare("
		INSERT INTO `course` (`c_name`, `c_type`, `month`,`day`,`hour`,`c_no`,`fee`,`m1`,`m2`,`m3`,`m4`,`m5`,`m6`,`m7`,`m8`,`m9`,`m10`,`m11`,`m12`,`m13`,`m14`,`m15`,`s1`,`s2`,`s3`,`s4`,`s5`,`h1`,`h2`,`h3`,`h4`,`h5`,`c1`,`c2`,`c3`,`c4`,`c5`,`c6`,`c7`,`c8`,`c9`,`c10`,`c11`,`c12`,`c13`,`c14`,`c15`) 
		VALUES (:NM,:DP,:MM,:DD,:HH,:CN,:FE,:M1,:M2,:M3,:M4,:M5,:M6,:M7,:M8,:M9,:M10,:M11,:M12,:M13,:M14,:M15,:S1,:S2,:S3,:S4,:S5,:H1,:H2,:H3,:H4,:H5,:C1,:C2,:C3,:C4,:C5,:C6,:C7,:C8,:C9,:C10,:C11,:C12,:C13,:C14,:C15)");

		$query->execute(array(
						':NM' => $c_name,
						':DP' => $c_type,
						':MM' => $month,
						':DD' => $day,
						':HH' => $hour,
						':CN' => $c_no,
						':FE' => $fee,
						':M1' => $m1,
						':M2' => $m2,
						':M3' => $m3,
						':M4' => $m4,
						':M5' => $m5,
						':M6' => $m6,
						':M7' => $m7,
						':M8' => $m8,
						':M9' => $m9,
						':M10' => $m10,
						':M11' => $m11,
						':M12' => $m12,
						':M13' => $m13,
						':M14' => $m14,
						':M15' => $m15,
						':S1' => $s1,
						':S2' => $s2,
						':S3' => $s3,
						':S4' => $s4,
						':S5' => $s5,
						':H1' => $h1,
						':H2' => $h2,
						':H3' => $h3,
						':H4' => $h4,
						':H5' => $h5,
						':C1' => $c1,
						':C2' => $c2,
						':C3' => $c3,
						':C4' => $c4,
						':C5' => $c5,
						':C6' => $c6,
						':C7' => $c7,
						':C8' => $c8,
						':C9' => $c9,
						':C10' => $c10,
						':C11' => $c11,
						':C12' => $c12,
						':C13' => $c13,
						':C14' => $c14,
						':C15' => $c15,
						
					));
					
				$rowNumber = $query->rowCount();
				$lastInsertId = $conn1->lastInsertId();
				if($lastInsertId > 0)
								{
							
									echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you successfully added Admin
                                    </div>                       
                                </div>';
								}
								else{
									 echo '<div class="contents boxpadding">
									  <div class="alert alert-success">
										you unsuccessfully added Admin
                                    </div>                       
                                </div>';
								
								}
				}
?>


<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-6">
			  
			<div class="form-group">
				<label for="exampleInputEmail1">Course Subject:</label>
				<select name="c_name" id="exampleInputEmail1" style="width: 100%; height: 40px; border-radius: 5px; border: 1px solid rgb(204, 204, 204);" >
					<option value="#">Select...</option>
					<option value="COMPUTER OFFICE APPLICATION">COMPUTER OFFICE APPLICATION</option>
					<option value="GRAPHIC DESIGN">GRAPHIC DESIGN </option>
					<option value="WEB DESIGN">WEB DESIGN</option>
					<option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
					<option value="COMPUTER NETWORK & HARDWARE">COMPUTER NETWORK & HARDWARE</option>
					<option value="AUTOCAD 2D">AUTOCAD 2D</option>
					<option value="AUTOCAD 3D">AUTOCAD 3D</option>
					<option value="OUTSOURCING">OUTSOURCING</option>
					<option value="YOUTUBE MARKETING">YOUTUBE MARKETING</option>
					<option value="YOUTUBE MARKETING">VIDEO EDITING</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1 " >Duration:</label>
				<div class="navbar">
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="month" placeholder="Ex:3"> 
					<lebel class="col-md-4">Months</lebel>
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="c_no" placeholder="Ex:36"> 
					<lebel class="col-md-4">Class's</lebel>
				</div>
				<div class="navbar">
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="hour" placeholder="Ex:1">
					<lebel class="col-md-4">Hour's a day</lebel>
					<input class="form-control col-md-2" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="day" placeholder="Ex:3">
					<lebel class="col-md-4">Day's Per a Week</lebel>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Course Modules:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m1" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m2" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m3" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m4" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m5" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m6" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m7" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m8" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m9" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m10" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m11" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m12" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m13" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m14" placeholder="Provide Module">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="m15" placeholder="Provide Module">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Highlight's:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="h1" placeholder="Provide Highlight">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="h2" placeholder="Provide Highlight">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="h3" placeholder="Provide Highlight">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="h4" placeholder="Provide Highlight">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="h5" placeholder="Provide Highlight">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputEmail1 " >Course Fee:</label>
				<div class="navbar">
					<lebel class="col-md-4">BDT</lebel>
					<input class="form-control col-md-4" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" name="fee" placeholder="Ex:5,500"> 
					<lebel class="col-md-4">/-</lebel>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Software Tought:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="s1" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="s2" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="s3" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="s4" placeholder="Provide Software Name">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="s5" placeholder="Provide Software Name">
			</div>
			 <div class="form-group">
				<label for="exampleInputEmail1">Carrer Support:</label>
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c1" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c2" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c3" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c4" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c5" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c6" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c7" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c8" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c9" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c10" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c11" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c12" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c13" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c14" placeholder="Provide Carrer Support">
				<input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" style="margin-bottom:5px;"name="c15" placeholder="Provide Carrer Support">
			</div> 
			
		</div>
	</div>	
    <div class="row">
		<div class="col-md-6">
			<button type="reset" class="btn btn-primary btn-block" name="#"  style="background-color:#D54C25;">Reset Field</button>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary btn-block" name="save">Save</button>
		</div>
	</div>    
        
        </form>