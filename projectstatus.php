<?php		

			$q = intval($_GET['q']);
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");

		$sql="SELECT * FROM project WHERE ProjectID='".$q."'";
		$result = mysql_query($sql,$link);
		$row = mysql_fetch_array($result);
        if($row['ProjectStatus']=='Completed'||$row['ProjectStatus']=='Completed'){
            echo $row['ProjectStatus'];
            echo " on: ".$row['EndDate'];
        }
        else {
            echo $row['ProjectStatus'];
        }
		mysql_close($link);
?>