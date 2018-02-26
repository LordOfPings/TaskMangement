<?php		

			$q = $_GET['q'];
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

		$sql="SELECT EmployeeID FROM users WHERE FirstName = '".$q."'";
		$result = mysql_query($sql,$link);
		$row = mysql_fetch_array($result);
			echo $row['EmployeeID'];
		mysql_close($link);
?>