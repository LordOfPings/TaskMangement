
	<?php 
	$q = $_GET['q'];
	$p = $_GET['p'];
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	$s_sql="SELECT * FROM tasks WHERE TaskStartDate between '".$q."' and '".$p."'";
	$s_query=mysql_query($s_sql);

						if(mysql_num_rows($s_query)!=0){				
						echo "<table class='table table-hover' border='2'>
							<thead><tr>
								<th>Task ID</th>
								<th>Project ID</th>
								<th>Task Description</th>
								<th>Task Start Date</th>
								<th>Task Status</th>
								<th>Comments</th>
								<th>Submitted By</th>
								<th>Submitted Time</th>
								<th>Time Spent (h.mm)</th>
							</tr></thead>";
						
						while ($row = mysql_fetch_assoc($s_query)) {
						 $tid   = $row['TaskID'];
						 $pid = $row['ProjectID'];
						 $tdesc = $row['TaskDescription'];
						 $tsdate = $row['TaskStartDate'];
						 $tstatus = $row['TaskStatus'];
						 $comment = $row['Comments'];
						 $submitby = $row['SubmittedBy'];
						 $submittime = $row['SubmittedTime'];
						 $timespent = $row['TimeSpent'];
                            
						 echo "<tr><td>".$tid."</td><td>".$pid."</td><td>".$tdesc."</td><td>".$tsdate."</td>
						 <td>".$tstatus."</td><td>".$comment."</td><td>".$submitby."</td><td>".$submittime."</td>
						 <td>".$timespent."</td></tr>";
						 }
						 echo "</table>";
						}
						
						else {
						echo "No tasks started in the time range";
						}

	?>