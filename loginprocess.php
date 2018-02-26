<?php session_start();
date_default_timezone_set ("Asia/Calcutta");
if(empty($_POST))
{
	exit;
}

if(empty($_POST['username'])||empty($_POST['pass']))
{
	echo "You must enter all fields";
}

	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("taskmanagement",$link) or die("Cant select database");
	
	$q = "select * from users where Username = '".$_POST['username']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if(($_POST['pass']==$row['Password'])&&($row['Approved']==1)&&($row['UserType']=='Developer'))
		{
			//login
			$_SESSION = array();
			
			$_SESSION['fname']=$row['FirstName'];
			$_SESSION['lname']=$row['LastName'];
			$_SESSION['username']=$row['Username'];
			$_SESSION['userType']=$row['UserType'];
			
			header("location:devpage.php");
		}
		else if($row['Approved']==0) 
		{
			$_SESSION['errMsg'] = "Your registration is pending for approval";
			header("location:login.php");
		}
		else if($row['Approved']==2) 
		{
			$_SESSION['errMsg'] = "Your registration has been rejected";
			header("location:login.php");
		}
		else if($row['Password']!=$_POST['pass']){
			$_SESSION['errMsg'] = "Password entered is wrong";
			header("location:login.php");
		}
	}
	else
	{
		$_SESSION['errMsg'] = "No such user";
		header("location:login.php");
	}
	mysql_close($link);


	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("taskmanagement",$link) or die("Cant select database");
	
	$q = "select * from users where Username = '".$_POST['username']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);


	$link = mysql_connect("localhost","root","") or die("Cannot Connect");
	mysql_select_db("taskmanagement",$link) or die("Cant select database");
	
	$q = "select * from users where Username = '".$_POST['username']."'";
	
	$res = mysql_query($q,$link) or die("wrong query");
	
	$row = mysql_fetch_assoc($res);
	
	
	if(!empty($row))
	{
		if(($_POST['pass']==$row['Password'])&&($row['Approved']==1)&&($row['UserType']=='Manager'))
		{
			//login
			$_SESSION = array();
			
			$_SESSION['fname']=$row['FirstName'];
			$_SESSION['lname']=$row['LastName'];
			$_SESSION['username']=$row['Username'];
			$_SESSION['userType']=$row['UserType'];
			
			header("location:mgrpage.php");
		}
		else if($row['Approved']==0) 
		{
			$_SESSION['errMsg'] = "Your registration is pending for approval";
			header("location:login.php");
		}
		else if($row['Approved']==2) 
		{
			$_SESSION['errMsg'] = "Your registration has been rejected";
			header("location:login.php");
		}
		else if($row['Password']!=$_POST['pass']){
			$_SESSION['errMsg'] = "Password entered is wrong";
			header("location:login.php");
		}
	}
	else
	{
		$_SESSION['errMsg'] = "No such user";
		header("location:login.php");
	}
	mysql_close($link);

		
?>
