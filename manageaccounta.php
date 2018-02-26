<?php
	session_start();

		$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("taskmanagement",$link) or die("can not select database");
				$username = $_POST['username'];	
				$email=$_POST["email"];
				$tel=$_POST["tel"];
				$pass=$_POST["pass"];
				$status=$_POST["status"];
		$sql="update users set Tel='$tel',Email='$email',Password='$pass',RePassword='$pass',Status='$status' where Username='$_SESSION[username]'";
		mysql_query($sql,$link)or die("wrong query6");
		mysql_close($link);
		header("location:adminpage.php");
?>