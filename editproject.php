
		<?php session_start();
			$link=mysql_connect("localhost","root","")or die("can not connect");
			mysql_select_db("taskmanagement",$link) or die("can not select database");
				
				$pid=$_POST["projectOldName"];
				$pnname=$_POST["projectNewName"];
				$pdesc=$_POST["projectDescription"];
				$client=$_POST["client"];

				$qr="update project set ProjectName='$pnname',ProjectDescription='$pdesc',Client='$client'
				where ProjectID='$pid'";
				
				mysql_query($qr,$link)or die("wrong query");
					mysql_close($link);
					header("location:mgrpage.php");
		?>
