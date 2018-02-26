<?php		
	session_start();
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
		$eid=intval($_POST['employeeID']);
		$sql=" update users set Status='Inactive' where EmployeeID='$eid'";
		mysql_query($sql,$link) or die("Wrong Query");
		header("location:mgrpage.php");
	mysql_close($link);
?>