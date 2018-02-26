<?php
	session_start();

		$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("taskmanagement",$link) or die("can not select database");
				$stat=2;
				$username = $_POST['username'];	
		$sql="update users set Approved='$stat' where Username='$username'";
		header("location:newapplication.php");
		mysql_query($sql,$link)or die("wrong query4");
		mysql_close($link);
?>