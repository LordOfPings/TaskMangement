<?php session_start(); 
if(!isset($_SESSION['username'])){
   header("Location:login.php");
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
		<title>Manager</title>
			<script>
                 $(document).ready(function(){
                    $(".menu").hover(function(){
                        $(".navs").fadeIn();
                    });
                });
                
                $(document).ready(function(){
                    $(".navs").mouseleave(function(){
                        $(".navs").fadeOut();
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
						document.getElementById("ad").innerHTML = "";
						return;
					} else { 
						xmlhttp1 = new XMLHttpRequest();
						xmlhttp1.onreadystatechange = function() {
							if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
								document.getElementById("ad").innerHTML = xmlhttp1.responseText;
							}
						}
						xmlhttp1.open("GET","assigndev.php?q="+str,true);
						xmlhttp1.send();
					}
                 if (str == "") {
						document.getElementById("dva").innerHTML = "";
						return;
					} else { 
						xmlhttp3 = new XMLHttpRequest();
						xmlhttp3.onreadystatechange = function() {
							if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
								document.getElementById("dva").innerHTML = xmlhttp3.responseText;
							}
						}
						xmlhttp3.open("GET","removedev.php?q="+str,true);
						xmlhttp3.send();
					}
					

					if (str == "") {
						document.getElementById("rd").innerHTML = "";
						return;
					} else { 
						xmlhttp2 = new XMLHttpRequest();
						xmlhttp2.onreadystatechange = function() {
							if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
								document.getElementById("rd").innerHTML = xmlhttp2.responseText;
							}
						}
						xmlhttp2.open("GET","requestdate.php?q="+str,true);
						xmlhttp2.send();
					}
					if (str == "") {
						document.getElementById("pd3").innerHTML = "";
						return;
					} else { 
						xmlhttp4 = new XMLHttpRequest();
						xmlhttp4.onreadystatechange = function() {
							if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
								document.getElementById("pd3").innerHTML = xmlhttp4.responseText;
							}
						}
						xmlhttp4.open("GET","pdesc.php?q="+str,true);
						xmlhttp4.send();
					}
				}
				function showProjectDesc(str) {
                    if (str == "") {
						document.getElementById("pd2").innerHTML = "";
						return;
					} else { 
						xmlhttp1 = new XMLHttpRequest();
						xmlhttp1.onreadystatechange = function() {
							if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
								document.getElementById("pd2").innerHTML = xmlhttp1.responseText;
							}
						}
						xmlhttp1.open("GET","pdesc.php?q="+str,true);
						xmlhttp1.send();
					}
					if (str == "") {
						document.getElementById("client").innerHTML = "";
						return;
					} else { 
						xmlhttp2 = new XMLHttpRequest();
						xmlhttp2.onreadystatechange = function() {
							if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
								document.getElementById("client").innerHTML = xmlhttp2.responseText;
							}
						}
						xmlhttp2.open("GET","client.php?q="+str,true);
						xmlhttp2.send();
					}
				}
				function showStatus(str){
					if (str == "") {
						document.getElementById("pd1").innerHTML = "";
						return;
					} else { 
						xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
								document.getElementById("pd1").innerHTML = xmlhttp.responseText;
							}
						}
						xmlhttp.open("GET","pdesc.php?q="+str,true);
						xmlhttp.send();
					}
					
					if (str == "") {
						document.getElementById("sd").innerHTML = "";
						return;
					} else { 
						xmlhttp3 = new XMLHttpRequest();
						xmlhttp3.onreadystatechange = function() {
							if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
								document.getElementById("sd").innerHTML = xmlhttp3.responseText;
							}
						}
						xmlhttp3.open("GET","startdate.php?q="+str,true);
						xmlhttp3.send();
					}

					if (str == "") {
						document.getElementById("ps").innerHTML = "";
						return;
					} else { 
						xmlhttp4 = new XMLHttpRequest();
						xmlhttp4.onreadystatechange = function() {
							if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) {
								document.getElementById("ps").innerHTML = xmlhttp4.responseText;
							}
						}
						xmlhttp4.open("GET","pstatus.php?q="+str,true);
						xmlhttp4.send();
					}
                    if (str == "") {
						document.getElementById("ps1").innerHTML = "";
						return;
					} else { 
						xmlhttp6 = new XMLHttpRequest();
						xmlhttp6.onreadystatechange = function() {
							if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
								document.getElementById("ps1").innerHTML = xmlhttp6.responseText;
							}
						}
						xmlhttp6.open("GET","projectstatus.php?q="+str,true);
						xmlhttp6.send();
					}	
					
					if (str == "") {
						document.getElementById("da").innerHTML = "";
						return;
					} else { 
						xmlhttp5 = new XMLHttpRequest();
						xmlhttp5.onreadystatechange = function() {
							if (xmlhttp5.readyState == 4 && xmlhttp5.status == 200) {
								document.getElementById("da").innerHTML = xmlhttp5.responseText;
							}
						}
						xmlhttp5.open("GET","devassign.php?q="+str,true);
						xmlhttp5.send();
					}	
				}
				
				function showDeveloper(str) {
				if (str == "") {
						document.getElementById("dn").innerHTML = "";
						return;
					} else { 
						xmlhttp6 = new XMLHttpRequest();
						xmlhttp6.onreadystatechange = function() {
							if (xmlhttp6.readyState == 4 && xmlhttp6.status == 200) {
								document.getElementById("dn").innerHTML = xmlhttp6.responseText;
							}
						}
						xmlhttp6.open("GET","dname.php?q="+str,true);
						xmlhttp6.send();
					}
					
					if (str == "") {
						document.getElementById("ds").innerHTML = "";
						return;
					} else { 
						xmlhttp7 = new XMLHttpRequest();
						xmlhttp7.onreadystatechange = function() {
							if (xmlhttp7.readyState == 4 && xmlhttp7.status == 200) {
								document.getElementById("ds").innerHTML = xmlhttp7.responseText;
							}
						}
						xmlhttp7.open("GET","dstatus.php?q="+str,true);
						xmlhttp7.send();
					}

					if (str == "") {
						document.getElementById("pa").innerHTML = "";
						return;
					} else { 
						xmlhttp8 = new XMLHttpRequest();
						xmlhttp8.onreadystatechange = function() {
							if (xmlhttp8.readyState == 4 && xmlhttp8.status == 200) {
								document.getElementById("pa").innerHTML = xmlhttp8.responseText;
							}
						}
						xmlhttp8.open("GET","passign.php?q="+str,true);
						xmlhttp8.send();
					}
			}
			function showProjectStatus(str){
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
					$link=mysql_connect("localhost","root","")or die("can not connect");
					mysql_select_db("taskmanagement",$link) or die("can not select database");
					$ql="SELECT COUNT(UserType) FROM users where UserType='Developer' AND Approved='1'";
					$ql_query=mysql_query($ql);
					$qlcount=mysql_fetch_array($ql_query);
					$l="SELECT COUNT(Approved) FROM users where Approved=1";
					$l_query=mysql_query($l);
					$lcount=mysql_fetch_array($l_query);
					$m="select count(Approved) from users where Approved=0";
					$m_query=mysql_query($m);
					$mcount=mysql_fetch_array($m_query);
					
							
			?>
            <div class="header">
                <p class="p1"><span class="glyphicon glyphicon-tasks"></span> Task Management Tool</p>
                <a href="logout.php" data-toggle="tooltip" title="Logout" class="glyphicon glyphicon-log-out"></a>
                <a data-toggle="pill" title="Modify personal details" href="#manageAccount" class="glyphicon glyphicon-cog"></a>
                <p class="p2"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></p>
                <p class="menu"><span class="glyphicon glyphicon-chevron-down"></span></p>
			</div>  
        
			<ul class="nav nav-pills navs">
			<li><a data-toggle="pill" href="#createProject">Create Project</a></li>
			  <li><a data-toggle="pill" href="#editProject">Edit Project</a></li>
			  <li><a data-toggle="pill" href="#deleteProject">Delete Project</a></li>
			  <li><a data-toggle="pill" href="#assignProject">Assign Projects</a></li>
			  <li><a data-toggle="pill" href="#statusProject">Project Status</a></li>
			  <li><a data-toggle="pill" href="#developers">Check Developers</a></li>
			  <li><a data-toggle="pill"	href="#taskView">View Tasks</a></li>
			  <li><a data-toggle="pill" href="#manageUser">Manage Users</a></li>
			</ul>
			<br>
			
				<div class="tab-content">
				<div id="createProject" class="tab-pane fade in active">
					<form role="form" action="addproject.php" class="form-horizontal" method="post" id="form6">
						<div class="form-group">
                        <legend>Create Project</legend>
                        </div>    
	
						<div class="form-group">
				             <div class="col-sm-8">
                            <p>Project Name: </p>
								<input class="in form-control" type="text" name="projectName" required>
						</div>
						</div>
						
						<div class="form-group">
							 <div class="col-sm-8">
                            <p>Project Description: </p>
								<textarea class="in form-control" name="projectDescription" rows="4" required>
								</textarea>
						</div>
						</div>
						
						<div class="form-group">
                             <div class="col-sm-8">
							<p>Client:</p>
							<input class="in form-control" type="text" name="client" required>
						</div>
						</div>

						<div class="form-group">
                             <div class="col-sm-8">
							<input id="bttn2" class="btn btn-primary" type="submit" value="Create">
						</div>
						</div>
                            
					</form>
                  </div>
				  
				  <div id="editProject" class="tab-pane fade">
				<form role="form" action="editproject.php" class="form-horizontal" method="post" id="form7">
					<div class="form-group">
						<legend>Edit Project</legend>
                    </div>
						
					<div class="form-group">
                         <div class="col-sm-8">
						<p>Project: </p>
						<select class="in form-control" name="projectOldName" onchange="showProjectDesc(this.value)" required>
                            <option selected >Choose Here</option>    
						  <?php $s_sql="SELECT * FROM project";
								$s_query=mysql_query($s_sql); 
								while ($row = mysql_fetch_assoc($s_query)) {
								$pid   = $row['ProjectID'];
								$pname = $row['ProjectName'];
								echo "<option>".$pid." - ".$pname."</option>";
								}
						?>
						</select>
					</div>
					</div>
						
					<div class="form-group">
                         <div class="col-sm-8">
						<p>New Project Name: </p>
						<input type="text" class="in form-control" name="projectNewName" required>
					</div>
					</div>
						
					<div class="form-group">
                         <div class="col-sm-8">
						<p>Project Description: </p>
							<textarea class="in form-control" name="projectDescription" id="pd2" rows="4">
                            </textarea>
					</div>
					</div>
					
					<div class="form-group">
                         <div class="col-sm-8">
						<p>Client: </p>
						<input class="in form-control" type="text" name="client" required />
					</div>
					</div>

					<div class="form-group">
                         <div class="col-sm-8">
						<input id="bttn3" class="btn btn-primary" type="submit" value="Submit">
					</div>
					</div>
                        
				</form>
			</div>
				  
				<div id="deleteProject" class="tab-pane fade">
				<form role="form" action="deleteproject.php" class="form-horizontal" method="post" id="form8">
					<div class="form-group">
						<legend>Delete Project</legend>
					</div>
						
					<div class="form-group">
                         <div class="col-sm-8">
						<p>Project: </p>
						<select class="in form-control" name="projectID" onchange="showProject(this.value)" required>
						<option selected>Choose Here</option>
						<?php $s_sql="SELECT * FROM project";
								$s_query=mysql_query($s_sql); 
								while ($row = mysql_fetch_assoc($s_query)) {
								$pid   = $row['ProjectID'];
								$pname = $row['ProjectName'];
								echo "<option>".$pid." - ".$pname."</option>";
								}
						?>
						</select>						
					</div>
					</div>
                    
					<div class="form-group">
                         <div class="col-sm-8">
						<p>Project Description: </p>
						<text style="height:80px; overflow:auto" class="in form-control" name="projectDescription" id="pd3" readonly>
					</div>
					</div>
					
					<div class="form-group">
                         <div class="col-sm-8">
						<input id="bttn4" class="btn btn-danger" type="submit" value="Delete Project">
					</div>
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
								<?php $s_sql="SELECT project.ProjectID,project.ProjectName FROM project";
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
						<select class="in form-control" name="taskStatus" onchange="showProjectStatus(this.value)">
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
			<div id="manageUser" class="tab-pane fade">
				<form role="form" action="" method="post" class="form-horizontal" id="form9">
					<div class="panel-group">
						<legend>Manage Users</legend>
					</div>
						
					<div class="panel panel-success">
                         
						<div class="panel-heading">Accept New Registration:</div>
							<div class="panel-body">
								<a href="newapplication.php">New Applications 
									<span class="badge"><?php echo $mcount[0]; ?></span></a>
							</div>
							
					</div>
						
					<div class="panel panel-danger">
                         
						<div class="panel-heading">Delete User:</div>
							<div class="panel-body">
								<a href="deleteuser.php">Current Users  
									<span class="badge"><?php echo $lcount[0]; ?></span></a>
							</div>
					</div>
				</form>
			</div>  
				  
				<div id="assignProject" class="tab-pane fade in">
					<form role="form" action="assignproject.php" class="form-horizontal" method="post" id="form10">
						<div class="form-group">
							<legend>Assign Project</legend>
                        </div>
						<div class="form-group">
                        <div class="col-sm-8">
							<p>Project: </p>
						<select class="in form-control" name="projectID" onchange="showProject(this.value)" required>
							<option selected >Choose here</option>
							<?php $s_sql="SELECT * FROM project";
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
							<p>Project Description: </p>
								<text class="in form-control" name="projectDescription" style="height:80px; overflow:auto"  id="pd" readonly>		
						  </div>
						</div>
                            
						<div class="form-group">
							<div class="col-sm-8">
							<p>Developers assigned (select to remove assignment): </p>
								<div id="dva">
								</div>
                                
                            </div>						
						</div>
						<div class="form-group">
							<div class="col-sm-8">
							<p>Available developers (select to assign developer): </p>
								<div id="ad">
								</div>
						</div>						
						</div>	
						
						<div class="form-group">
                            <div class="col-sm-8">
							<input style="margin-top:2%" id="bttn2" class="btn btn-primary" type="submit" value="Submit">
						</div>
						</div>
					</form>
				</div>
			<div id="statusProject" class="tab-pane fade">
				<form role="form" action="pstatus.php" class="form-horizontal" method="post" id="form11">
					<div class="form-group">
						<legend>Project Status</legend>
					</div>
						
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Project: </p>
						<select class="in form-control" name="projectID" onchange="showStatus(this.value)" required>
							<option selected >Choose here</option>
							<?php $s_sql="SELECT * FROM project";
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
						<p>Project Description: </p>
							<text style="height:80px" class="in form-control" name="projectDescription" id="pd1" readonly>	
					</div>
					</div>
	
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Developer assigned: </p>
						<text style="height:50px;" class="in form-control" type="text" name="employeeID" id="da" readonly>
					</div>
					</div>
                        
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Current project status: </p>
						<text class="in form-control" type="text" name="projectStatus" id="ps1" readonly>
					</div>
					</div>
                        
					<div class="form-group">
                        <div class="col-sm-8">
									<p>Update project status: </p>
										<select class="in form-control" name="projectStatus">
											<option >Active/Engaged</option>
											<option >Cancelled</option>
											<option >On hold</option>
											<option >Completed</option>
										</select>
				        </div>
                    </div>

					<div class="form-group">
                        <div class="col-sm-8">
						<input class="btn  btn-primary" value="Submit" id="btn1" type="submit">
					</div>
					</div>
				</form>
			</div>
			
			<div id="developers" class="tab-pane fade">
				<form role="form" action="inactive.php" class="form-horizontal" method="post" id="form12">
					<div class="form-group">
						<legend>Developers <span class="badge">
							<?php echo $qlcount[0]; ?></span> </legend>
					
                    </div>
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Employee: </p>
						<select class="in form-control" name="employeeID" onchange="showDeveloper(this.value)"required>
						<option selected >Choose here</option>
							<?php $s_sql="SELECT * FROM users where UserType='Developer' AND Approved='1'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$eid   = $row['EmployeeID'];
									$fname = $row['FirstName'];
									$lname = $row['LastName'];
									echo "<option>".$eid." : ".$fname." ".$lname."</option>";
									}
							?>
						</select>
					</div>
					</div>
						
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Developer Status: </p>
						<text type="text" class="in form-control" name="employeeStatus" id="ds" readonly>
					</div>
					</div>
                        
					<div class="form-group">
                        <div class="col-sm-8">
						<p>Projects Assigned: </p>
						<text style="height:80px" type="text" class="in form-control" name="projectAssigned" id="pa" readonly>	
					</div>	
					</div>
                         
				</form>
			</div>
                    
			<div id="manageAccount" class="tab-pane fade">
			<form role="form" method="post"	id="form5" class="form-horizontal" action="manageaccountm.php">	
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
						<input type="tel"  pattern="/(7|8|9)\d{9}/" class="in form-control" name="tel" maxlength='10'
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
                </form>
			</div>
		 </div>
		 <?php mysql_close($link); ?>
		</div>
	</body>
</html>