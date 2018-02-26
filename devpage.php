<?php session_start(); 
if(!isset($_SESSION['username'])){
   header("Location:login.php");
	}
else {
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
		$sql="update users set Status='Active' where Username='$_SESSION[username]'";
		mysql_query($sql,$link) or die("Wrong Query");
	mysql_close($link);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="new.css">
		<title>Developer</title>
			<script>
                $(document).ready(function(){
                    $(".menu").hover(function(){
                        $(".navo").fadeIn();
                    });
                });
                
                $(document).ready(function(){
                    $(".navo").mouseleave(function(){
                        $(".navo").fadeOut();
                    });
                });
					$(document).ready(function(){
						$("#tasktype").change(function(){
					if ($("#tasktype").val()== '2'){
						$("#taskassoc").show();
						}
					else {
						$("#taskassoc").hide();
					}
					});		
				});
				
				function showProject(str) {
				if (str == "") {
						document.getElementById("pd").innerHTML = "";
						return;
					} else { 
						xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								document.getElementById("pd").innerHTML = xmlhttp.responseText;
							}
						}
						xmlhttp.open("GET","pdesc.php?q="+str,true);
						xmlhttp.send();
					}
					if (str == "") {
						document.getElementById("tka").innerHTML = "";
						return;
					} else { 
						xmlhttp0 = new XMLHttpRequest();
						xmlhttp0.onreadystatechange = function() {
							if (xmlhttp0.readyState == 4 && xmlhttp0.status == 200) {
								document.getElementById("tka").innerHTML = xmlhttp0.responseText;
							}
						}
						xmlhttp0.open("GET","taskassociated.php?q="+str,true);
						xmlhttp0.send();
					}
					
					if (str == "") {
						document.getElementById("rd").innerHTML = "";
						return;
					} else { 
						xmlhttp1 = new XMLHttpRequest();
						xmlhttp1.onreadystatechange = function() {
							if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
								document.getElementById("rd").innerHTML = xmlhttp1.responseText;
							}
						}
						xmlhttp1.open("GET","requestdate.php?q="+str,true);
						xmlhttp1.send();
					}
					
					if (str == "") {
						document.getElementById("ta").innerHTML = "";
						return;
					} else { 
						xmlhttp2 = new XMLHttpRequest();
						xmlhttp2.onreadystatechange = function() {
							if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
								document.getElementById("ta").innerHTML = xmlhttp2.responseText;
							}
						}
						xmlhttp2.open("GET","taskassociated.php?q="+str,true);
						xmlhttp2.send();
					}
					if (str == "") {
						document.getElementById("vt").innerHTML = "";
						return;
					} else { 
						xmlhttp3 = new XMLHttpRequest();
						xmlhttp3.onreadystatechange = function() {
							if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
								document.getElementById("vt").innerHTML = xmlhttp3.responseText;
							}
						}
						stra = document.getElementById("project").value;
                        strb = document.getElementById("fromDate").value;
						strc = document.getElementById("toDate").value;
						xmlhttp3.open("GET","viewtask.php?q="+str+"&p="+stra+"&r="+strb+"&s="+strc,true);
						xmlhttp3.send();
					}
					if (str == "") {
						document.getElementById("td").innerHTML = "";
						return;
					} else { 
						xmlhttp4 = new XMLHttpRequest();
						xmlhttp4.onreadystatechange = function() {
							if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
								document.getElementById("td").innerHTML = xmlhttp4.responseText;
							}
						}
						xmlhttp4.open("GET","pdesc.php?q="+str,true);
						xmlhttp4.send();
					}
					if (str == "") {
						document.getElementById("taskdetail").innerHTML = "";
						return;
					} else { 
						xmlhttp5 = new XMLHttpRequest();
						xmlhttp5.onreadystatechange = function() {
							if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
								document.getElementById("taskdetail").innerHTML = xmlhttp5.responseText;
							}
						}
						xmlhttp5.open("GET","taskdetails.php?q="+str,true);
						xmlhttp5.send();
					}
                }
			</script>
	</head>
	<body>

		<div class="container-fluid">
			
			<?php 	
					$link=mysql_connect("localhost","root","")or die("can not connect");
					mysql_select_db("taskmanagement",$link) or die("can not select database");
					date_default_timezone_set ("Asia/Calcutta");
					$dt=date("d/m/y : H:i:s", time());
					$username=$_SESSION['username'];
					$sql="update users set LastLogin='$dt' where UserName='$username'";
					mysql_query($sql,$link)or die("wrong query");
					mysql_close($link);			
			?>
            <div class="header">
                <p class="p1"><span class="glyphicon glyphicon-tasks"></span> Task Management Tool</p>
                <a href="logout.php" data-toggle="tooltip" title="Logout" class="glyphicon glyphicon-log-out"></a>
                <a data-toggle="pill" title="Modify personal details" href="#manageAccount" class="glyphicon glyphicon-cog"></a>
                <p class="p2"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></p>
                <p class="menu"><span class="glyphicon glyphicon-chevron-down"></span></p>
			</div>  
            
			<ul class="nav nav-pills navo">
			  <li><a data-toggle="pill" href="#addNew">Add New</a></li>
			  <li><a data-toggle="pill" href="#statusUpdate">Status Update</a></li>
			  <li><a data-toggle="pill" href="#taskHistory">Task History</a></li>
			  <li><a data-toggle="pill"	href="#taskView">View Tasks</a></li>
			</ul>
			<br>
			<?php 	
					$link=mysql_connect("localhost","root","")or die("can not connect");
					mysql_select_db("taskmanagement",$link) or die("can not select database");
			?>
			<div class="tab-content">
				<div id="addNew" class="tab-pane fade in active">
					<form role="form" action="addtask.php" class="form-horizontal" method="post" id="form3">
						<div class="form-group">
							<legend>New Task</legend>
                        </div>
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Available Projects(ID): </p>
								<select class="in form-control" name="projectID" onchange="showProject(this.value)" required>
								<option selected>Choose here</option>
								<?php $s_sql="SELECT project.ProjectID,project.ProjectName FROM project, users, handlers 
                                    where project.ProjectID=handlers.ProjectID 
                                    and handlers.HandlerID=users.EmployeeID AND
                                    users.Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$pid  = $row['ProjectID'];
									$pname = $row['ProjectName'];
									echo "<option>".$pid." - ".$pname."</option>";
								}
								?>
								</select>
						</div>
						</div>
                        
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Project Details: </p>
								<text class="in form-control" style="height:80px" name="projectDetails" id="pd" readonly>
								
						</div>
						</div>
                            
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Task Type: </p>
								<select class="in form-control" name="taskType" id="tasktype" required>
									<option value='1'>New Task</option>
									<option value='2'>Modify Task Details</option>
								</select>
						</div>
						</div>
                            
						<div style="display:none" class="form-group" id="taskassoc" >
						<div class="col-sm-8">
							<p>Tasks associated: </p>
								<select class="in form-control" name="taskID" id="tka">
								</select>
						</div>
						</div>
                            
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Task Title:</p>
								<input class="in form-control" type="text" name="taskTitle" id="tt" required/>
						</div>	
						</div>
                            
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Task Description: </p>
								<textarea class="in form-control" name="taskDescription" rows="3" required>
								</textarea>
						</div>
						</div>
                            
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Starting Date Of Task:</p>
								<input class="in form-control" type="date" name="taskStartDate" required>
						</div>
						</div>
                            
						<div class="form-group">
                            <div class="col-sm-8">
							<input id="bttn2" class="btn btn-primary" type="submit" value="Submit">
						</div>
						</div>
					</form>
				</div>
			
			<div id="statusUpdate" class="tab-pane fade">
				<form role="form" method="post" id="form2" class="form-horizontal" action="statusupdate.php">
                    <div class="form-group">
						<legend>Status Update</legend>
                    </div>
					
						<div class="form-group">
                            <div class="col-sm-8">
                            <p>Choose project:</p>
							<select class="in form-control" name="projectID" onchange="showProject(this.value)" required>
							<option selected>Choose Here</option>
								<?php $s_sql="SELECT project.ProjectID,project.ProjectName FROM project, users, handlers 
                                    where project.ProjectID=handlers.ProjectID 
                                    and handlers.HandlerID=users.EmployeeID AND
                                    users.Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$pid = $row['ProjectID'];	
									$pname = $row['ProjectName'];
									echo "<option>".$pid." - ".$pname."</option>";
								}
								?>
							</select>
						</div>	
						</div>
                    
						<div class="form-group">
                            <div class="col-sm-8">
							<p>Tasks associated: </p>
								<select class="in form-control" name="taskID" id="ta">
								</select>
						</div>	
						</div>
                    
						<br>
						<div id="status">
								<div class="form-group">
                                    <div class="col-sm-8">
									<p>Task status: </p>
										<select class="in form-control" name="taskStatus">
											<option>Active/Engaged</option>
											<option>Cancelled</option>
											<option>On hold</option>
											<option>Completed</option>
										</select>
								</div>
								</div>
                            
								<div class="form-group">
                                    <div class="col-sm-8">
									<p>Task Comment: </p>
										<textarea class="in form-control" name="taskComments" rows="2" required>
										</textarea>
								</div>
								</div>
                            
								<div class="form-group">
                                    <div class="col-sm-8">
									<p>Completion in %: </p>
									<input  type="text" class="in form-control" name="completionStatus" required>
								</div>	
								</div>	

								<div class="form-inline">
									<p style="padding-left:150px">Time Spent:</p>
									<div class="form-group">
                                    <div class="col-xs-6">
									<input  type="number" class="in form-control" name="hours" placeholder="HH" max='23' min='0' required>
									</div>	
									<div class="col-xs-6">
									<input  type="number" class="in form-control" name="mins" placeholder="MM" max='59' min='0' required>
									</div>																
								</div>									
								</div>									
								<br>								
								
								<div class="form-group">
                                    <div class="col-sm-8">
										<input class="btn  btn-primary" value="Submit" id="btn1" type="submit">
								</div>	
								</div>	
						</div>
				</form>
			</div>
		  
		  <div id="taskHistory" class="tab-pane fade">
				<form role="form" method="post" class="form-horizontal" id="form1">
					<div class="form-group">
						<legend>Task History</legend>
                    </div>
					<div class="form-group">
                        <div class="col-sm-8">
							<p>Projects: </p>
								<select class="in form-control" name="projectID" onchange="showProject(this.value)" required>
								<option selected>Choose Here</option>
								<?php $s_sql="SELECT project.ProjectID,project.ProjectName FROM project, users, handlers 
                                    where project.ProjectID=handlers.ProjectID 
                                    and handlers.HandlerID=users.EmployeeID AND
                                    users.Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$pid  = $row['ProjectID'];
									$pname = $row['ProjectName'];
									echo "<option>".$pid." - ".$pname."</option>";
								}
								?>
								</select>
					</div>
					</div>
                    
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Project Details:</p>
							<text class="in form-control" style="height:80px; overflow:auto" name="taskDescription" id="td" readonly>
							
					</div>
					</div>
                        
					<div class="form-group" id="taskdetail">
					</div>
				</form>
		  </div>
		  
		  <div id="taskView" class="tab-pane fade">
			<form role="form" method="post"	id="form4" class="form-horizontal" action="viewtask.php">
                <div class="form-group">
				<legend>Choose by project and status</legend>
                </div>
						<div class="form-group">
                            <div class="col-sm-8">
                                <p>Choose project:</p>
							<select class="in form-control" name="projectID" id="project" required>
							<option selected >Choose Here</option>
								<?php $s_sql="SELECT project.ProjectID,project.ProjectName FROM project, users, handlers 
                                    where project.ProjectID=handlers.ProjectID 
                                    and handlers.HandlerID=users.EmployeeID AND
                                    users.Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$pid = $row['ProjectID'];	
									$pname = $row['ProjectName'];
									echo "<option>".$pid." - ".$pname."</option>";
								}
								?>
							</select>
						</div>	
						</div>
                        <div class="form-inline">
                        <div class="form-group dates">
                            <div class="col-sm-4">
                               <p>From:</p>
                                <input type="date" class="in form-control" id="fromDate">
                            </div>
                        </div>
                        <div class="form-group dates">
                            <div class="col-sm-4">
                                <p>To:</p>
                                <input type="date" class="in form-control" id="toDate" onchange="showTasks(this.value)">
                                
                        </div>
                        </div>
                        </div>
                        <br>
					<div class="form-group">
                        <div class="col-sm-8">
                            <p>Select Status of Task to display:</p>
						<select class="in form-control" name="taskStatus" onchange="showProject(this.value)">
								<option selected >Choose Here</option>
								<option>All</option>
								<option>Active/Engaged</option>
								<option>Cancelled</option>
								<option>On hold</option>
								<option>Completed</option>
						</select>
					</div>
					</div>
                
					<div style="padding:0px" class="form-group" id="vt">
					</div>
			</form>
			<br>
		 </div>
              
		 <div id="manageAccount" class="tab-pane fade">
			<form role="form" method="post"	id="form5" class="form-horizontal" action="manageaccount.php">	
			 <div class="form-group">
                <legend>Modify details</legend>
                 </div>
					<div class="form-group">
                        <div class="col-sm-8">
					       <p>Username:</p>
                            <input type="text" class="in form-control" name="username"
                                    value="<?php $s_sql="SELECT * FROM users where Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$username  = $row['Username'];
									}
									echo $username;
									?>">
								
					</div>
					</div>
                
					<div class="form-group">
                        <div class="col-sm-8">
					<p>Email:</p>
						<input type="email" class="in form-control" name="email"
						value="<?php $s_sql="SELECT * FROM users where Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$mail  = $row['Email'];
									}
									echo $mail;
									?>">
								
					</div>
					</div>
                
					<div class="form-group">
                        <div class="col-sm-8">
					<p>Contact:</p>
						<input type="tel" pattern="/(7|8|9)\d{9}/" class="in form-control" name="tel" maxlength='10'
						value="<?php $s_sql="SELECT * FROM users where Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$tel  = $row['Tel'];
									}
									echo $tel;
									?>">
								
					</div>
					</div>
                
					<div class="form-group">
                        <div class="col-sm-8">
					<p>New Password:</p>
						<input type="text" class="in form-control" name="pass"
						value="<?php $s_sql="SELECT * FROM users where Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$mail  = $row['Password'];
									}
									echo $mail;
									?>">
								
					</div>
					</div>
					
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Change status:</p>
						<select class="in form-control" name="status">
							<option>Active</option>
							<option>Inactive</option>
						</select>
					</div>
					</div>
                
					<div class="form-group">
                        <div class="col-sm-8">
						<input class="btn  btn-primary" value="Submit" id="btn5" type="submit">
					</div>		
					</div>		
			</div>		 
		</div>
	  </div>
	</body>
</html>