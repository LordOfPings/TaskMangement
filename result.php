<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Search Result</title>
</head>
<body>
	<div class="container-fluid" style="margin-top:2rem">
		Your search result: 
		<div style="margin-top:3rem">
	<?php session_start();
if(empty($_POST['search']))
{
	echo "No user of that type exists.";
}
else{
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	
	$s_sql="SELECT * FROM users WHERE UserType LIKE '%".$_POST['search']."%'";
	$s_query=mysql_query($s_sql);

	
						if(mysql_num_rows($s_query)!=0){				
						echo "<table class='table table-hover' border='2'>
							<thead><tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>User Type</th>
								<th>Last Login Time</th>
							</tr></thead>";
						
						while ($row = mysql_fetch_assoc($s_query)) {
						 $fname   = $row['FirstName'];
						 $lname = $row['LastName'];
						 $usertype = $row['UserType'];
						 $lastlogin = $row['LastLogin'];
						 echo "<tr><td>".$fname."</td><td>".$lname."</td><td>".$usertype."</td><td>".$lastlogin."</td></tr>";
						 }
						 echo "</table>";

						}
						
						else {
						echo"No results found";}
} 
	?>
	</div>
</div>
</body>
</html>