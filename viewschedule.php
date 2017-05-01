<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Roundtable</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>


	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="index.php">Roundtable</a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php if (isset($_SESSION['usr_id'])) { ?>
					<a class="nav-item nav-link navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></a>
					<a class="nav-item nav-link" href="userhome.php">Scheduler</a>
					<a class="nav-item nav-link" href="viewschedule.php">View Set Lunches</a>
					<a class="nav-item nav-link" href="logout.php">Log Out</a>
					<?php } else { ?>
						<a class="nav-item nav-link" href="login.php">Login</a>
						<a class="nav-item nav-link" href="register.php">Sign Up</a>
						<?php } ?>
					</div>
				</div>
			</nav>

			<div class="container">
				<div class="row">
					<h1>Lunch Schedule for the week:</h1>
				</div>
				<div class="row">
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th>First Name</th>
					      <th>Last Name</th>
					      <th>Day</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>@mdo</td>
					    </tr>
					    <tr>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td>@fat</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>

			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</body>
		</html>
