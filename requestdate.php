<?php		

			$q = intval($_GET['q']);
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

		$sql="SELECT RequestDate FROM project WHERE ProjectID='".$q."'";
		$result = mysql_query($sql,$link);
		$row = mysql_fetch_array($result);
			echo $row['RequestDate'];
		mysql_close($link);
?>