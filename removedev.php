<?php
$q = intval($_GET['q']);
		$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("taskmanagement",$link) or die("can not select database");
	               
                    $ss_sql="SELECT users.EmployeeID,users.FirstName,users.LastName FROM users where users.UserType='Developer' AND users.Approved='1' AND                           users.EmployeeID in (select HandlerID from handlers where ProjectID='".$q."')";
					$innerresults=mysql_query($ss_sql,$link) or die("Invalid1");
						if(mysql_num_rows($innerresults)==0){
						echo "<p style='color:red'> No developers assigned</p>";
						}					
					while($rowss = mysql_fetch_array($innerresults)) {
					echo "<div class='checkbox'>";
					echo "<label><input type='checkbox' name='removeEmployeeID[]' value='"
					.$rowss['EmployeeID']."'>".$rowss['FirstName']." ".$rowss['LastName']."</label>";
					echo "</div>";
					}
			mysql_close($link);
?>