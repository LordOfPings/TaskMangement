<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
		<link rel="stylesheet" href="login.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<title>Login</title>
			<script>
				function go(){
				document.getElementById("forms").submit();
				}
                
			 function checkPasswordMatch() {
					var password = $("#pass").val();
					var confirmPassword = $("#passw").val();

					if (password != confirmPassword) {
						$("#match2").hide();
						$("#match1").show();
						}
					else {
						$("#match1").hide();
						$("#match2").show();
						}
				}

				$(document).ready(function () {
				   $("#passw").keyup(checkPasswordMatch);
				});

			
                $(document).ready(function(){
						$(".log").click(function(){
				            $("#reg").hide();
                            $("#forgotpass").hide();
                            $("#login").show();
					});
                        $("#register").click(function(){
				            $("#login").hide();
                            $("#forgotpass").hide();
                            $("#reg").show();
                            
                    });
                        $("a").click(function(){
				            $("#login").hide();
                            $("#reg").hide();
                            $("#forgotpass").show();
                    });    
				});
			</script>	
	</head>
	<body>
		<div>
		<div class="login-card">
		<div class="form-group" id="login">
            <div> <p data-toggle="tooltip" title="Register" class='glyphicon glyphicon-edit' id="register"> </p> </div>
            <div> <h1>Log in</h1> </div>
                <form id="form0" action="loginprocess.php" method="post" role="form">
					Username: &nbsp <input  type="text" name="username" value="" autofocus autocomplete="off" required>
					<br>
					Password: &nbsp <input  type="password" name="pass" required>
					<br>
					<button type="submit" class="login login-submit" value="Submit" onclick="go()">Submit</button>
					<br>
                </form>
                <div class="login-help">
                    <a href="#">Forgot password?</a>
					 <div id="errMsg">
                   <p style="color:red">
                        <?php if(!empty($_SESSION['errMsg'])) { 
                        echo $_SESSION['errMsg']; 
                        } 
                        ?>
                    </p>
                    <?php unset($_SESSION['errMsg']); 
                    ?>
			     </div>
                </div>
            </div>    
            <div class="form-group" id="reg" style="display:none">
                <div> <p data-toggle="tooltip" title="Login" class="glyphicon glyphicon-log-in log"> </p> </div>
                <div> <h1>Register</h1> </div>
                <form id="form1" name="details" action="welcome.php" method="post" role="form" class="form-vertical">
					<input type="text" name="fname" placeholder="First Name" required>
                    <br>
			
					<input type="text" name="lname" placeholder="Last Name" required>
				    <br>
					
					<input type="date" name="dob" max="1993-01-01" placeholder="Date of birth" required>

					<input type="email" name="email" placeholder="Email" required>
				    <br>
				
					<input type="tel" name="tel"  placeholder="Mobile number" maxlength="10" required>
				    <br>
				
					<input type="text" name="username" placeholder="Username" required>
					<br>

					<select id="userType" name="userType" required>
						<option selected disabled>User Type</option>
						<option>Manager</option>
						<option>Developer</option>
					</select>
				    <br>
					<input id="pass" type="password" name="pass" minlength="5" placeholder="Password" required>
				    <br>
					<input id="passw" type="password" name="passw" minlength="5" placeholder="Re-enter Password" onChange="checkPasswordMatch()" required>
					<div style="margin-left:168px; margin-top:-32px">
					<span id="match1" class="glyphicon glyphicon-remove" style="color:red;display:none; font-size:16px"></span> 
					<span id="match2" class="glyphicon glyphicon-ok" style="color:green;display:none; font-size:16px"></span> 
					</div>
					<br>
					<button id="buttn" type="submit" class="login login-submit">Submit</button>
			 	</form>	
            </div>
			<div class="form-group" id="forgotpass" style="display:none">
                 <div> <p data-toggle="tooltip" title="Login" class="glyphicon glyphicon-log-in log"> </p> </div>
                <div> <h1>Get Password</h1> </div>
                <form id="form2" action="retrieve.php" method="post" role="form">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" value="" autofocus autocomplete="off" required>
                        <br>
                         <input type="email" name="email" placeholder="Email" required>
                        <br>
                         <input type="tel"  pattern="/(7|8|9)\d{9}/" name="tel" placeholder="Contact number" required>
                        <br>
                         <select name="userType" required>
							<option selected disabled>User Type</option>
                            <option>Manager</option>
                            <option>Developer</option>
                         </select>
                        <br>
                        <button type="submit" value="Submit" class="login login-submit">Submit</button>
                        <br>
                    </div>
			     </form>
            </div>
		</div>
		</div>
        
	 
	</body>
</html>