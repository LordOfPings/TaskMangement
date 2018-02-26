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
		<title>Admin</title>
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
                }
                function showProjectDesc(str) {
                    if (str == "") {
						document.getElementById("pd1").innerHTML = "";
						return;
					} else { 
						xmlhttp1 = new XMLHttpRequest();
						xmlhttp1.onreadystatechange = function() {
							if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
								document.getElementById("pd1").innerHTML = xmlhttp1.responseText;
							}
						}
						xmlhttp1.open("GET","pdesc.php?q="+str,true);
						xmlhttp1.send();
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
					mysql_query($sql,$link)or die("wrong query3");
					mysql_close($link);
					$link=mysql_connect("localhost","root","")or die("can not connect");
					mysql_select_db("taskmanagement",$link) or die("can not select database");
					$ql="SELECT COUNT(Approved) FROM users where Approved=1";
					$ql_query=mysql_query($ql);
					$qlcount=mysql_fetch_array($ql_query);
					$q="select count(Approved) from users where Approved=0";
					$q_query=mysql_query($q);
					$qcount=mysql_fetch_array($q_query);
					
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
                            <option selected disabled>Choose Here</option>    
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
							<textarea class="in form-control" name="projectDescription" id="pd1" rows="4">
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
						<option selected disabled>Choose Here</option>
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
						<text style="height:80px; overflow:auto" class="in form-control" name="projectDescription" id="pd" readonly>
					</div>
					</div>
					
					<div class="form-group">
                         <div class="col-sm-8">
						<input id="bttn4" class="btn btn-danger" type="submit" value="Delete Project">
					</div>
					</div>
				</form>
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
									<span class="badge"><?php echo $qcount[0]; ?></span></a>
							</div>
							
					</div>
						
					<div class="panel panel-danger">
                         
						<div class="panel-heading">Delete User:</div>
							<div class="panel-body">
								<a href="deleteuser.php">Current Users  
									<span class="badge"><?php echo $qlcount[0]; ?></span></a>
							</div>
					</div>
				</form>
			</div>
            <div id="manageAccount" class="tab-pane fade">
			<form role="form" method="post"	id="form5" class="form-horizontal" action="manageaccounta.php">	
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
						<input type="text" class="in form-control" name="email"
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
						<input type="text" class="in form-control" name="tel" maxlength='9'
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
						<input type="text" class="in form-control" name="status"
						value="<?php $s_sql="SELECT * FROM users where Username='$_SESSION[username]'";
									$s_query=mysql_query($s_sql); 
									while ($row = mysql_fetch_assoc($s_query)) {
									$status  = $row['Status'];
									}
									echo $status;
									?>">
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
      </div>
	</body>
</html>