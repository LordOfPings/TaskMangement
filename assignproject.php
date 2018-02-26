<DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>Create Project</title>
	</head>
	<body>
		<?php session_start();
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
				
				$pid = $_POST["projectID"];
				
                
                if(!empty($_POST["employeeID"])){
                    $hid = $_POST["employeeID"];
                for($i=0;$i<sizeof($hid);$i++){ 
                $qs="select * from handlers where ProjectID='$pid' and HandlerID='$hid[$i]'";
                $result=mysql_query($qs);
			     if(mysql_num_rows($result)==0){
                     $row=mysql_fetch_array($result);
					$qr="insert into handlers(ProjectID,HandlerID) values ('$pid','$hid[$i]')";
					mysql_query($qr,$link);
					
                    }
                    else {
                           header("location:mgrpage.php");
                        }
                }
                     $rid = $_POST["removeEmployeeID"];
                for($i=0;$i<sizeof($rid);$i++){ 
                $sql="select * from handlers where ProjectID='$pid' and HandlerID='$rid[$i]'";
                $results=mysql_query($sql);
			     if(mysql_num_rows($results)!=0){
                     $rows=mysql_fetch_array($results);
					$s_sql="delete from handlers where HandlerID='$rid[$i]'";
					mysql_query($s_sql,$link);
                }
                }
                }
                    
                else if(!empty($_POST["removeEmployeeID"])) {  
                    $rid = $_POST["removeEmployeeID"];
                for($i=0;$i<sizeof($rid);$i++){ 
                $sql="select * from handlers where ProjectID='$pid' and HandlerID='$rid[$i]'";
                $results=mysql_query($sql);
			     if(mysql_num_rows($results)!=0){
                     $rows=mysql_fetch_array($results);
					$s_sql="delete from handlers where HandlerID='$rid[$i]'";
					mysql_query($s_sql,$link);
                    }
                }
                    $hid = $_POST["employeeID"];
                for($i=0;$i<sizeof($hid);$i++){ 
                $qs="select * from handlers where ProjectID='$pid' and HandlerID='$hid[$i]'";
                $result=mysql_query($qs);
			     if(mysql_num_rows($result)==0){
                     $row=mysql_fetch_array($result);
					$qr="insert into handlers(ProjectID,HandlerID) values ('$pid','$hid[$i]')";
					mysql_query($qr,$link);
					
                    }
                    else {
                           header("location:mgrpage.php");
                        }
                }
                }
                header("location:mgrpage.php");
				mysql_close($link);
				 
	?>

	</body>
</html>