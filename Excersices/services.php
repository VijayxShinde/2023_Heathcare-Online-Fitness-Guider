<?php 
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'fitness_guide');

  
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['user_id'];
$sqlforuser = "SELECT name,surname FROM users WHERE user_id=$user_id";
$result = mysqli_query($conn, $sqlforuser);
$row = mysqli_fetch_assoc($result);
$username = $row['name'];
echo "<h1 style='color: white;'>Welcome $username!!!</h1>";
$_SESSION['user_id'] = $user_id;
$_SESSION['username'] = $username;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link rel="stylesheet" href="services.css" />
  </head>
  <body>
    <div class="main">
      <div class="navbar">
          <h2 class="icon">Present Services</h2>
        </div>
        <div class="menu">
          <ul>
            <li><a href="../DAILY_WORKOUT_PAGE/webpage.php">DAILY WORKOUT</br></a></li>
            <li><a href="bmi.php">KNOW MORE ABOUT YOU (BMI Calculator)</a></li>
						<li><a href="../workoutplan/workoutPlan.php">CUSTOMIZE WORKOUT</a></li>
            <li><a href="../diet-plan.php">CUSTOMIZE DIET</a></li>
            <li><a href="../open-page.php">ABOUT US</a></li>
						<li><a href="../home-page/home-page.php">HELP</a></li>
          </ul>
      </div>
    </div>
 </body>
</html>
