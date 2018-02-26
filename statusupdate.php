<DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>Update Status</title>
	</head>
	<body>
		<?php session_start();
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
			
				date_default_timezone_set ("Asia/Calcutta");
				$dt=date("d/m/y : H:i:s", time());
				$pid=$_POST["projectID"];
				$tstatus=$_POST["taskStatus"];
				$tcomment=$_POST["taskComments"];
				$cstatus=$_POST["completionStatus"];
				$hours=$_POST["hours"];
                $mins=$_POST["mins"];
				$submitby=$_SESSION["username"];
				$tid=$_POST["taskID"];

				$qs="update tasks set ProjectID='$pid',TaskStatus='$tstatus',Comments='$tcomment', 
				SubmittedBy='$submitby',SubmittedTime='$dt',Completion='$cstatus',Hour='$hours',Mins='$mins' where TaskID='$tid'";
				
				mysql_query($qs,$link)or die("Error");
                
                if($tstatus=="Completed"||$tstatus=="Cancelled"){
                    date_default_timezone_set ("Asia/Calcutta");
                    $edt=date("y-m-d : H:i:s", time());;
				    $qr="update tasks set TaskEndDate='$edt' where TaskID='$tid'";
                    mysql_query($qr,$link) or die("Error");
                }
                    
                    
				$sql="select * from tasks where TaskID='$tid'";
				$sql_query=mysql_query($sql);
				$row = mysql_fetch_array($sql_query);
				$tdesc=$row['TaskDescription'];

				$ql="insert into taskhistory (ProjectID,TaskID,TaskDescription,Status,Comment,Completion,Hour,Mins,SubmitTime,SubmitBy) values
				('$pid','$tid','$tdesc','$tstatus','$tcomment','$cstatus','$hours','$mins','$dt','$submitby')";
				mysql_query($ql,$link)or die("Invalid1");
				
				mysql_close($link);
					header("location:devpage.php");
				
			
		?>

	</body>
</html>