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
					<h1>About: </h1>
					<p>Roundtable is an application that will allow employees in a company to meet up and grab lunch together. Often times teams will work together and get lunch together, without meeting any of their other peers who might work in different departments. This application sends out a survey that employees can fill out and will randomly assign them to a group to each lunch with, like roulette but for lunch groups. This would build camaraderie between employees and let workers meet others they may not interact with otherwise within their company. Company executives could also use the application to meet with their subordinates, which would be a great surprise for the employees and would also provide a way for the executives to hear from the front-line.
					</p>
				</div>
			</div>

			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</body>
		</html>
