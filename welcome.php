<?php session_start();
			
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$dob=$_POST["dob"];
				$email=$_POST["email"];
				$tel=$_POST["tel"];
				$username=$_POST["username"];
				$pass=$_POST["pass"];
				$passw=$_POST["passw"];
				$userType=$_POST["userType"];
				$status="Active";

				$sql="insert into users(FirstName,LastName,DateofBirth,Email,Tel,Username,Password,RePassword,UserType,Status)
				values('$fname','$lname','$dob','$email','$tel','$username','$pass','$passw','$userType','$status')";
				
				mysql_query($sql,$link)or die("wrong query");
					mysql_close($link);
			header("location:login.php");
?>