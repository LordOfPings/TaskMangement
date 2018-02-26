<?php		

		$q = intval($_GET['q']);
		$link=mysql_connect("localhost","root","")or die("can not connect");
		mysql_select_db("taskmanagement",$link) or die("can not select database");
	            
					$s_sql="SELECT users.EmployeeID,users.FirstName,users.LastName FROM users where users.UserType='Developer' AND users.Approved='1'
					AND users.EmployeeID not in (select HandlerID from handlers where ProjectID='".$q."')";
					$innerresult=mysql_query($s_sql,$link) or die("Invalid2"); 
					if(mysql_num_rows($innerresult)==0){
						echo "<p style='color:red'> No developers available</p>";
						}
					while($rows = mysql_fetch_array($innerresult)) {
					echo "<div class='checkbox'>";
					echo "<label><input type='checkbox' name='employeeID[]' value='"
					.$rows['EmployeeID']."'>".$rows['FirstName']." ".$rows['LastName']."</label>";
					echo "</div>";
					}
					
				
		mysql_close($link);
?>