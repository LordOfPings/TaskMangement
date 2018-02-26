<DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>Add Task</title>
	</head>
	<body>
		<?php session_start();
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
				date_default_timezone_set ("Asia/Calcutta");
				$dt=date("d/m/y : H:i:s", time());
				$pid=intval($_POST["projectID"]);
				$tasktype=$_POST["taskType"];
                $tasktitle=$_POST["taskTitle"];
				$tdesc=$_POST["taskDescription"];
				$tsdate=$_POST["taskStartDate"];
				$submitby=$_SESSION["username"];

				$qr="insert into tasks(ProjectID,TaskTitle,TaskDescription,TaskStartDate,SubmittedBy,SubmittedTime) 
				values('$pid','$tasktitle','$tdesc','$tsdate','$submitby','$dt')";
				
				if($_POST["taskType"]=='1'){
				mysql_query($qr,$link)or die("ID already assigned");
				mysql_close($link);
						header("location:devpage.php");
				
				}
				else {
				$tid=$_POST["taskID"];
				$qs="update tasks set ProjectID='$pid',TaskTitle='$tasktitle', TaskDescription='$tdesc',TaskStartDate='$tsdate', 
				SubmittedBy='$submitby',SubmittedTime='$dt' where TaskID='$tid'";
				mysql_query($qs,$link)or die("ID already assigned");
				mysql_close($link);
						header("location:devpage.php");
				}
			
		?>

	</body>
</html>