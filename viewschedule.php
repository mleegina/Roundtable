<?php
session_start();
// User will not be able to see this page without being signed in due to the
// redirect back to the homepage. The following lines check the session variable
if(isset($_SESSION['usr_id'])=="") {
	header("Location: index.php");
}
include_once 'dbconnect.php';
$error = false;

// Deletes the users current availabitity--"resets" it so the user can enter updated info
if (isset($_POST['reset'])) {
	$varUserID = $_SESSION['usr_id'];
	$sql = "DELETE FROM availdates WHERE userid ='" .$varUserID. "'";
	$result = $con->query($sql);
	header("Location: userhome.php");
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
				<!-- If user is logged in, display the below navigation -->
				<?php if (isset($_SESSION['usr_id'])) { ?>
					<a class="nav-item nav-link navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></a>
					<a class="nav-item nav-link" href="userhome.php">Scheduler</a>
					<a class="nav-item nav-link" href="viewschedule.php">View Set Lunches</a>
					<a class="nav-item nav-link" href="logout.php">Log Out</a>
					<!-- If user is not logged in, display the below navigation -->
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
					<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="lunchschedule">
						<div class="form-group">
							<input type="submit" name="reset" value="Reset" class="btn btn-primary"/>
						</div>
					</form>
				</div>

				<?php
				$varUserID = $_SESSION['usr_id'];

				// Get Self-Availability & from there populate the corresponding fields
				$sql = "SELECT days FROM availdates where availdates.userid = '$varUserID'";
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
				$date = explode(",", $row["days"]);

				for($i = 0; $i < count($date); $i++) {
					if ($date[$i] == 'MonBring') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%MonBring%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Monday - Bringing Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					} elseif ($date[$i] == ' TueBring') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%TueBring%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Tuesday - Bringing Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					} elseif ($date[$i] == ' WedBring') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%WedBring%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Wednesday - Bringing Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					} elseif ($date[$i] == ' ThurBring') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%ThurBring%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Thursday - Bringing Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' FriBring') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%FriBring%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Friday - Bringing Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' MonBuy') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%MonBuy%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Monday - Buying Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' TueBuy') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%TueBuy%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Tuesday - Buying Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' WedBuy') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%WedBuy%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Wednesday - Buying Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' ThurBuy') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%ThurBuy%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Thursday - Buying Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}elseif ($date[$i] == ' FriBuy') {
						$sql = "SELECT name FROM users INNER JOIN availdates ON users.id = availdates.userid
										where availdates.days like '%FriBuy%' and users.id != '$varUserID'";
						$result = $con->query($sql);
						echo "<div class='panel panel-primary well'>
						<div class='panel-heading'>
						<h3 class='panel-title'>Friday - Buying Lunch</h3>
						</div>
						<div class='panel-body'>";
						if ($result->num_rows > 0) {
							echo "</br><table class='table table-hover'><thead><tr><th>Name</th></tr></thead>";
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>" . $row["name"]. "</td></tr>";
							}
							echo "</table>";
						} else {
							echo "";
						}
						echo"</div></div>";
					}
				}
				$con->close();
				?>
			</div>

			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		</body>
		</html>
