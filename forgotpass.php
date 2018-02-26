<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="margin-top:2rem">
	<div class="container jumbotron" style="text-align:center" >
			<h2>Enter your details!
		</div>
		<br>
			<form style="margin-left:40%" id="forms" action="retrieve.php" method="post" role="form">
				<div class="form-group col-xs-4">
					Username: &nbsp <input class="form-control" type="text" name="username" value="" autofocus autocomplete="off" required>
					<br>
					Email: &nbsp <input class="form-control" type="text" name="email" required>
					<br>
					Contact: &nbsp <input class="form-control" type="text" name="tel" required>
					<br>
					User Type: &nbsp <select class="form-control" name="userType" required>
										<option>Administrator</option>
										<option>Manager</option>
										<option>Developer</option>
									</select>
					<br>
					<button type="submit" value="Submit" class="btn btn-primary btn-block" onclick="go()">Submit</button>
					<br>
				</div>
			</form>
	</div>
</body>
</html>

