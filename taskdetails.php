<?php 
	$q = $_GET['q'];
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	$s_sql="SELECT * FROM taskhistory WHERE ProjectID='".$q."'";
	$s_query=mysql_query($s_sql);
	
	$sql="SELECT * from tasks where ProjectID='".$q."'";
	$sql_query=mysql_query($sql);

						if(mysql_num_rows($s_query)!=0){				
						echo "<table class='table table-hover' border='2'>
							<thead><tr>
								<th>Task ID</th>
								<th>Task Title</th>
								<th>Task Status</th>
								<th>Comments</th>
								<th>Completion</th>								
								<th>Submitted By</th>
								<th>Time Spent</th>
								<th>Submitted Time</th>
							</tr></thead>";
						while ($row = mysql_fetch_assoc($s_query)) {
						 $tid   = $row['TaskID'];
						 $tdesc = $row['TaskDescription'];
						 $tstatus = $row['Status'];
						 $comment = $row['Comment'];
						 $complete = $row['Completion'];
						 $submitby = $row['SubmitBy'];
						 $hours = $row['Hour'];
                         $mins = $row['Mins'];  
						 $submittime = $row['SubmitTime'];
						 echo "<tr><td>".$tid."</td><td>".$tdesc."</td><td>".$tstatus."</td><td>".$comment."</td>
						 <td>".$complete."</td><td>".$submitby."</td><td>".$hours."h ".$mins."m</td><td>".$submittime."</td></tr>";
						 }
						 echo "</table>";
						}
						
						else {
						echo"No task history available";
						}

	?>