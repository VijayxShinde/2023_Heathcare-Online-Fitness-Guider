<?php 
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'fitness_guide');


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$sqlforuser = "SELECT name FROM users WHERE user_id=$user_id";
$result = mysqli_query($conn, $sqlforuser);
$row = mysqli_fetch_assoc($result);
$username = $row['name'];
$_SESSION['user_id'] = $user_id;
$_SESSION['username'] = $username;
echo "<h1 style='color: white;'>Welcome $username!!!</h1>";

?>
<!DOCTYPE html>
<html>
<head>
  <title>Daily Exercises</title>
  <link rel="stylesheet" href="webpage.css">
</head>
<body>
  <header>
  <nav class="nav">
      <ul>
        <li class="li"><a href="../home-page/home-page.php" class="btn btn--white btn--animated">Home</a></li>
        <li class="li"><a href="../workoutplan/workoutPlan.php" class="btn btn--white btn--animated">Exercise Plan</a></li>
        <li class="li"><a href="../Excersices/Exercises.php" class="btn btn--white btn--animated">Some More Exercise !!</a></li>
			</nav>
      <br>
      </ul>
    <h1>Daily Exercises</h1>
    <h2 class="h3">Full Body Workout</h2>

   
  </header>
  
		<?php
$conn = mysqli_connect('localhost', 'root', '', 'fitness_guide');
$dsn = 'mysql:host=localhost;dbname=fitness_guide';

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

	$sql = "SELECT * FROM daily_workout";
	$result = mysqli_query($conn, $sql);
	echo "<table>";
	echo "<tr><th>Sr No</th><th>Body Part</th><th>Day</th><th>First Workout</th><th>Second Workout</th><th>Third Workout</th><th>Fourth Workout</th><th>Fifth Workout</th><th>Sixth Workout</th><th>Seventh Workout</th></tr>";
	
	while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			foreach($row as $value){
					echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
	}
	
	echo "</table>";
	echo "<h2 class='h3'>Pull Workout</h2>";
	$sql = "SELECT * FROM pull_workout";
	$result = mysqli_query($conn, $sql);
	echo "<table>";
	echo "<tr><th>Sr No</th><th>Body Part</th><th>Day</th><th>First Workout</th><th>Second Workout</th><th>Third Workout</th><th>Fourth Workout</th><th>Fifth Workout</th><th>Sixth Workout</th><th>Seventh Workout</th></tr>";
	
	while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			foreach($row as $value){
					echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
	}
	
	echo "</table>";

	echo "<h2 class='h3'>Women's Workout</h2>";
	$sql = "SELECT * FROM women_workout";
	$result = mysqli_query($conn, $sql);
	echo "<table>";
	echo "<tr><th>Sr No</th><th>Body Part</th><th>Day</th><th>First Workout</th><th>Second Workout</th><th>Third Workout</th><th>Fourth Workout</th><th>Fifth Workout</th><th>Sixth Workout</th></tr>";
	
	while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			foreach($row as $value){
					echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
	}
	
	echo "</table>";
	mysqli_close($conn);

	?>
  <br>
    <div class="row1">
      <div class="column1">
        <div class="box-1">
          <div class="btn btn--white btn--animated" onclick="history.back()">
            <span>BACK</span>
          </div>
        </div>
       
        </div>
      </div>
    </section>
  </main>

  
  <footer>
    <p class="copy-right">Copyright &copy;2022-2023 Computer Engineering Group, All Rights Reserved</p>
  </footer>
</body>
<script src="webpage.js"></script>
</html>