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
<?php session_start();

	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	
	$username=$_POST["username"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	
	$sql="SELECT * FROM users WHERE Username='$username'";
	$q="SELECT Password FROM users WHERE Username='$username' AND Tel='$tel' AND Email='$email'";
	$res = mysql_query($sql,$link) or die("wrong query");
	$row = mysql_fetch_assoc($res);
	
	if(($_POST['username']==$row['Username'])&&($_POST['tel']==$row['Tel'])&&($_POST['email']==$row['Email'])) {
		$result=mysql_query($q,$link);
		$rows=mysql_fetch_array($result);
		echo "<br>
			<div style='text-align:center' class='alert alert-success'><strong>Your password is: ".$rows[0]."</strong>
				</div>
			<div class='container-fluid'>
				<p style='margin-left:45%'><a href='login.php'> Back To Login </a></p>
			</div>";
	
	}
?>
</body>
</html>