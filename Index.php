<!DOCTYPE html>
<html>

<head>
	<title>Welcome to Organization</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body>

	<script type="text/javascript">
		
		function check_empty() {
				
			if (document.getElementById("username").value == "") {

				document.getElementById("login").disabled = true;
			}

			else document.getElementById("login").disabled = false;
		}	
		setInterval(check_empty, 0);

	</script>

	<h1>Welcome to Organization</h1><p>
	<img src="myorg.jpg" alt="Logo"><p>
	<form action="Profile.php" method="post" class="container-fluid">
		<fieldset>
			<button type="button" onclick="location.href='Register.php'" name="register">Register New Member</button><br>
		</fieldset>
		<fieldset>
			<button type="button" name="signin">Log in to an existing Account</button><br>
			<input type="text" name="username" id="username" placeholder="Username">
			<select>
				<option value="member" selected="selected">Member</option>
				<option value="officer">Officer</option>
				<option value="admin">Administrator</option>
			</select><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="submit" name="login" id="login" value="Log in" disabled="disabled"><br>
		</fieldset>
	</form>
	<img src="sponsors.jpg" alt="Sponsors"><p>

</body>

</html>