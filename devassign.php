<!DOCTYPE html>
<html>
<?php		

			$q = intval($_GET['q']);
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

		$sql="SELECT users.FirstName,users.LastName FROM users,handlers WHERE handlers.ProjectID='".$q."' AND handlers.HandlerID=users.EmployeeID";
		$result = mysql_query($sql,$link)or die("Invalid");
		while($row = mysql_fetch_array($result)){
			echo $row['FirstName']." ".$row["LastName"];?>
			<br><?php
		 }
		mysql_close($link);
?>
</html>