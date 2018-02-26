
	<?php 
    $p = intval($_GET['p']);
	$q = $_GET['q'];
	$r = $_GET['r'];
	$s = $_GET['s'];
	
	$link=mysql_connect("localhost","root","")or die("can not connect");
	mysql_select_db("taskmanagement",$link) or die("can not select database");
	
	if ($q=='All'){
	$q_sql="SELECT * FROM tasks where ProjectID='".$p."' and TaskStartDate between '".$r."' and '".$s."'";
	$q_query=mysql_query($q_sql);
	
						if(mysql_num_rows($q_query)!=0){				
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
						
						while ($row = mysql_fetch_assoc($q_query)) {
						 $tid   = $row['TaskID'];
						 $pid = $row['ProjectID'];
						 $tdesc = $row['TaskDescription'];
						 $tsdate = $row['TaskStartDate'];
						 $tstatus = $row['TaskStatus'];
						 $comment = $row['Comments'];
						 $submitby = $row['SubmittedBy'];
						 $submittime = $row['SubmittedTime'];
						 $hours = $row['Hour'];
                         $mins = $row['Mins'];    
						 echo "<tr><td>".$tid."</td><td>".$pid."</td><td>".$tdesc."</td><td>".$tsdate."</td>
						 <td>".$tstatus."</td><td>".$comment."</td><td>".$submitby."</td><td>".$submittime."</td>
						 <td>".$hours."h ".$mins."m</td></tr>";
						 }
						 echo "</table>";
						}
						
						else {
						echo "No task to display with given constraints";
						}
	}
	else {
	$s_sql="SELECT * FROM tasks where TaskStatus='".$q."' and ProjectID='".$p."' and TaskStartDate between '".$r."' and '".$s."'";
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
						 $hours = $row['Hour'];
                         $mins = $row['Mins'];    
						 echo "<tr><td>".$tid."</td><td>".$pid."</td><td>".$tdesc."</td><td>".$tsdate."</td>
						 <td>".$tstatus."</td><td>".$comment."</td><td>".$submitby."</td><td>".$submittime."</td>
						 <td>".$hours."h ".$mins."m</td></tr>";
						 }
						 echo "</table>";
						}
						
						else {
						echo "No task to display with given constraints";
						}
	}
			

	?>