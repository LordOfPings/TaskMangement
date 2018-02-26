<?php		
	session_start();
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
		$status=$_POST['status'];
		$sql=" update users set Status='$status' where Username='$_SESSION[username]'";
		mysql_query($sql,$link) or die("Wrong Query");
	mysql_close($link);
	header("location:devpage.php");
?>