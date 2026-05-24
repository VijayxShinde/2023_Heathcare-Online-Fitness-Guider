<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'fitness_guide');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

global $user_ID;
$user_ID = $_SESSION['user_id'];	

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user_ID = $_SESSION['user_id'];

	$activity_lvl = $_POST['activity_lvl'];
	$email = $_POST['email'];
	$goal = $_POST['goal'];
	$current_day = date('l');
	
	if($activity_lvl === "Beginner"){
		
		header("Location: WORKOUT_DATA/Beginner/begg_$current_day.php");
	
	} else if($activity_lvl === "Advanced"){

		header("Location: WORKOUT_DATA/Advanced/Advan_$current_day.php");

	} else if($activity_lvl === "Intermidiate") {

		header("Location: WORKOUT_DATA/Intermidiate/Inter_$current_day.php");

}

$sql = "SELECT * FROM workout_plan WHERE user_id = '$user_ID' AND email='$email' AND activity_level='$activity_lvl' AND goal='$goal'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // Duplicate record found
} else {
    // No duplicate record found, insert the new record
    $sql = "INSERT INTO workout_plan (user_id, email, activity_level, goal) 
            VALUES ('$user_ID', '$email', '$activity_lvl', '$goal')";
    $result = mysqli_query($conn, $sql);
}


	$sqlRec = "INSERT INTO user_workout_record (user_id, activity_level, goal) VALUES ('$user_ID', '$activity_lvl', '$goal')";
	$resultRec = mysqli_query($conn, $sqlRec);
				
}	
?>
