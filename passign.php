<?php		

	$q = intval($_GET['q']);
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");

	$sql="SELECT project.ProjectName,project.ProjectID FROM project,handlers WHERE handlers.HandlerID='".$q."' and project.ProjectID=handlers.ProjectID";
	$result = mysql_query($sql,$link);
	while($row = mysql_fetch_array($result)){
		echo $row['ProjectName'];?>
		<br><?php
	}
	mysql_close($link);
?>