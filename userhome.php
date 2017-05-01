<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Roundtable</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css"  rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Roundtable</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav navbar-right">
					<?php if (isset($_SESSION['usr_id'])) { ?>
						<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
						<li><a href="logout.php">Log Out</a></li>
						<?php } else { ?>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Sign Up</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</nav>

			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 well">
						<form role="form" action="schedule.php" method="post" name="lunchschedule">
							<fieldset>
								<legend>Weekly Schedule</legend>

								<div class="form-group">
									<label for="exampleSelect2">Choose Day(s) of Week</label>
									<select multiple class="form-control" id="exampleSelect2">
										<option name="t1">Monday</option>
										<option name="t1">Tuesday</option>
										<option name="t1">Wednesday</option>
										<option name="t1">Thursday</option>
										<option name="t1">Friday</option>
									</select>
								</div>

								<div class="form-group">
									<input type="submit" name="schedule" value="schedule" class="btn btn-primary" />
								</div>
							</fieldset>
						</form>
						<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
					</div>
				</div>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
		</body>
		</html>
