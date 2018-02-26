<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="margin-top:2rem">
	<?php session_start();


	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	
	$s_sql="SELECT * FROM users WHERE UserType='Manager' OR UserType='Developer' AND Approved='1' order by UserType";
	$s_query=mysql_query($s_sql);

	
						if(mysql_num_rows($s_query)!=0){				
						echo "<table class='table table-hover' border='2'>
							<thead><tr>
								<th>Employee ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>User Name</th>
								<th>User Type</th>
								<th>Email</th>
								<th>Contact Number</th>
								<th>Status</th>
								<th>Delete</th>
							</tr></thead>";
						
						while ($row = mysql_fetch_assoc($s_query)) {
						 $eid = $row['EmployeeID'];
						 $fname   = $row['FirstName'];
						 $lname = $row['LastName'];
						 $username = $row['Username'];
						 $usertype = $row['UserType'];
						 $email = $row['Email'];
						 $tel = $row['Tel'];
						 $status = $row['Status'];
						 echo "<tr><td>".$eid."</td><td>".$fname."</td><td>".$lname."</td><td>".$username."</td><td>".$usertype."</td>
						 <td>".$email."</td><td>".$tel."</td><td>".$status."</td><td>".
						 "<form action='remove.php' role='form' method='post' id='form13'>
							<input type='hidden' name='username' value='$username' />
							<button style='border-radius:50%' id='btn7' class='btn btn-danger' type='submit'>
							<span class='glyphicon glyphicon-remove'></span></button>
							</form>"."</td></tr>";
						 }
						 echo "</table>";
						}
						
						else {
						echo"No Users to Delete";
						}

	?>	<div>
			<a href="mgrpage.php" style="text-decoration:none; margin-top:5%; margin-left:40%">Back To Main Page</a>
		</div>
	</div>
 </body>
</html>