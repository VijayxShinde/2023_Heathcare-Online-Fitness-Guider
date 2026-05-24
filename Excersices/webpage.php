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
	<style>
        table {
            border-collapse: collapse;
            border: 2px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }

				.btn,
.btn:link,
.btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  padding: 1.5rem 4rem;
  display: inline-block;
  border-radius: 2rem;
  transition: all 0.2s;
  position: relative;
  font-size: 10px;
  border: none;
  cursor: pointer;
}

.btn:hover {
  transform: translateY((-3px));
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
}
.btn:hover::after {
  transform: scaleX(1.4) scaleY(1.6);
  opacity: 0;
}
.btn:active,
.btn:focus {
  outline: none;
  transform: translateY(-1px);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}
.btn--white {
  background-color: #fff;
  color: #777;
}
.btn--white::after {
  background-color: #fff;
}
.btn::after {
  content: "";
  display: inline-block;
  height: 100%;
  width: 100%;
  border-radius: 10rem;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all 0.4s;
}

.btn--animated {
  animation: moveInBottom 0.5s ease-out 0.75s;
  animation-fill-mode: backwards;
}

    </style>
</head>
<body>
  <header>
    <h1>Daily Exercises</h1>
    <nav>
      <ul>
        <li><a href="../home-page/home-page.php" class="btn btn--white btn--animated">Home</a></li>
        <li><a href="../workoutplan/workoutPlan.php" class="btn btn--white btn--animated">Exercise Plan</a></li>
        <li><a href="../Excersices/Exercises.php" class="btn btn--white btn--animated">Some More Exercise !!</a></li>
			</nav>
			<h2 class="h3">Full Body Workout</h2>
      </ul>
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
    <div class="row1">
      <div class="column1">
        <div class="box-1">
          <div class="btn btn-one" onclick="history.back()">
            <span>BACK</span>
          </div>
        </div>
       
        </div>
      </div>
    </section>
  </main>

  
  <footer>
    <p>Copyright &copy;2022-2023 Computer Engineering Group, All Rights Reserved</p>
  </footer>
</body>
<script src="webpage.js"></script>
</html>