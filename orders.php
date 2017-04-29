<title>Hunger</title>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css"  rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script src="script.js"></script>
</head>

<body ng-controller="mainController">
<nav class="navbar navbar-light bg-faded">
  <div class="nav navbar-nav">
    <a class="nav-item nav-link active" href="index.html">Home</a>
    <a class="nav-item nav-link" href="#/orders">Orders</a>
  </div>
</nav>
<div class="hungerlogo">
</br><img src="img/cutlery.png" alt="logo">
  <h1>HUNGER</h1></br>
</div>
<div class="container">

  <?php

  // $servername = "localhost";
  // $username = "id305918_mleegina";
  // $password = "itwsfinal";
  // $dbname = "id305918_orders";

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "orders";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }

  $varToken = $_POST['token'];

  // For chipotle
  $sql = "SELECT name, meal_type, meat_type, toppings, instructions FROM chipotle WHERE token='$varToken'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       echo "<h3>Orders for Chipotle</h3></br><table class='table table-hover'><thead><tr><th>Name</th><th>Meal</th><th>Meat</th><th>Toppings</th><th>Additional Notes</th></tr></thead>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["name"]. "</td><td>" . $row["meal_type"]. "</td><td>" . $row["meat_type"]. "</td><td>" . $row["toppings"]. "</td><td>" . $row["instructions"]. "</td></tr>";
       }
       echo "</table>";
  } else {
       echo "";
  }

  // For Mod Pizza
  $sql = "SELECT name, crust_type, sauce_type, toppings, instructions FROM modpizza WHERE token='$varToken'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       echo "<h3>Orders for Mod Pizza</h3></br><table class='table table-hover'><thead><tr><th>Name</th><th>Crust</th><th>Sauce</th><th>Toppings</th><th>Additional Notes</th></tr></thead>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["name"]. "</td><td>" . $row["crust_type"]. "</td><td>" . $row["sauce_type"]. "</td><td>" . $row["toppings"]. "</td><td>" . $row["instructions"]. "</td></tr>";
       }
       echo "</table>";
  } else {
       echo "";
  }

  // For Blue Bottle
  $sql = "SELECT name, drink, instructions FROM bluebottle WHERE token='$varToken'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       echo "<h3>Orders for Blue Bottle</h3></br><table class='table table-hover'><thead><tr><th>Name</th><th>Beverages</th><th>Additional Notes</th></tr></thead>";
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<tr><td>" . $row["name"]. "</td><td>" . $row["drink"]. "</td><td>" . $row["instructions"]. "</td></tr>";
       }
       echo "</table>";
  } else {
       echo "";
  }

  $conn->close();
  ?>

</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script src="js/random.js"></script>
  </body>
  </html>
