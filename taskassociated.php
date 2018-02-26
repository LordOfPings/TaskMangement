t<?php		

	$q = intval($_GET['q']);
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");

	$sql="select * from tasks where ProjectID='".$q."'";
	$result = mysql_query($sql,$link);
	while($row = mysql_fetch_array($result)){
		echo "<option>".$row['TaskID']." : ".$row['TaskTitle']."</option>";
	}
	mysql_close($link);
?>