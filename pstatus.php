<?php		

			$pstatus=$_POST['projectStatus'];
            $pid=intval($_POST['projectID']);
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
        
        
        $sql="update project set ProjectStatus='$pstatus'  WHERE ProjectID='$pid'";
        mysql_query($sql,$link) or die("Error");

        if($pstatus=="Completed"||$pstatus=="Cancelled"){
            date_default_timezone_set ("Asia/Calcutta");
            $edt=date("y-m-d : H:i:s", time());;
            $qr="update project set EndDate='$edt'  WHERE ProjectID='$pid'";
            mysql_query($qr,$link) or die("Error");
        }
		mysql_close($link);
		header("location:mgrpage.php");
?>