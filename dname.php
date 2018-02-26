<?php		

			$q = intval($_GET['q']);
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

		$sql="SELECT users.FirstName,users.LastName FROM users WHERE EmployeeID='".$q."'";
		$result = mysql_query($sql,$link);
		$row = mysql_fetch_array($result);
			echo $row['FirstName']." ".$row["LastName"];
		mysql_close($link);
?>