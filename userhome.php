<?php
session_start();
// User will not be able to see this page without being signed in due to the
// redirect back to the homepage. The following lines check the session variable
if(isset($_SESSION['usr_id'])=="") {
	header("Location: index.php");
}
include_once 'dbconnect.php';
$error = false;

if (isset($_POST['schedule'])) {
	$dates = implode(", ", $_POST['t1']);
	if(mysqli_query($con, "INSERT INTO availdates(userid,days) VALUES('" . $_SESSION['usr_id'] . "', '" . $dates . "')")) {
		header("Location: viewschedule.php");
	}
}
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
				<h1>Schedule for the week</h1></br>
				<div class="row justify-content-center">
					<div class="col-md-4 well">
						<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="lunchschedule">
							<fieldset>
								<legend>Bringing lunch on...</legend>

								<div class="form-group" id="scheduler" name="scheduler">
									<label for="t1">Choose Day(s) of Week</label></br>
									<label><input name= "t1[]" type="checkbox" value="MonBring"> Monday</label></br>
									<label><input name= "t1[]" type="checkbox" value="TueBring"> Tuesday</label></br>
									<label><input name= "t1[]" type="checkbox" value="WedBring"> Wednesday</label></br>
									<label><input name= "t1[]" type="checkbox" value="ThurBring"> Thursday</label></br>
									<label><input name= "t1[]" type="checkbox" value="FriBring"> Friday</label></br>
								</div>
								<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
							</div>
							<div class="col-md-4 well">
								<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="lunchschedule">
									<fieldset>
										<legend>Buying lunch on...</legend>

										<div class="form-group" id="scheduler" name="scheduler">
											<label for="t1">Choose Day(s) of Week</label></br>
											<label><input name= "t1[]" type="checkbox" value="MonBuy"> Monday</label></br>
											<label><input name= "t1[]" type="checkbox" value="TueBuy"> Tuesday</label></br>
											<label><input name= "t1[]" type="checkbox" value="WedBuy"> Wednesday</label></br>
											<label><input name= "t1[]" type="checkbox" value="ThurBuy"> Thursday</label></br>
											<label><input name= "t1[]" type="checkbox" value="FriBuy"> Friday</label></br>
										</div>

										<div class="form-group">
											<input type="submit" name="schedule" value="Make Schedule" class="btn btn-primary" />
										</div>
									</fieldset>
								</form>
								<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
							</div>
						</div>
					</div>

					<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
				</body>
				</html>
