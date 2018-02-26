<DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>Create Project</title>
	</head>
	<body>
		<?php session_start();
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
				

				$pname=$_POST["projectName"];
				$pdesc=$_POST["projectDescription"];
				$client=$_POST["client"];

				$qr="insert into project(ProjectName,ProjectDescription,Client) 
				values('$pname','$pdesc','$client')";
				
				mysql_query($qr,$link)or die("ID already assigned");
					mysql_close($link);
					header("location:mgrpage.php");
				
		?>

	</body>
</html>