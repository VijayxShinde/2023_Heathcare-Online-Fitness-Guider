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

	$weight = $_POST['weight'];
	$height = $_POST["height"];
	$bmi = $_POST['bmi'];
	$diet_preference = $_POST['diet_preference'];
	$goal = $_POST['goal'];
	
	$userEmail = "SELECT email FROM users WHERE user_id = $user_ID";
	$resultUser = mysqli_query($conn,$userEmail);
	$row = mysqli_fetch_assoc($resultUser);
	$email = $row['email'];

	if($diet_preference == 'VEG' and $goal == 'Weight Gain'){
		
		header("Location: DIET_DATA/VGWG.php");

	}
	else if($diet_preference == 'VEG' and $goal == 'Weight Loss'){
		
		header("Location: DIET_DATA/VGWL.php");
		
	} 
	else if($diet_preference == 'NON-VEG' and $goal == 'Weight Gain'){
		
		header("Location: DIET_DATA/NVWG.php");
		
	} 
	else if($diet_preference == 'NON-VEG' and $goal == 'Weight Loss'){
		
		header("Location: DIET_DATA/NVWL.php");
	
	}


$sql = "SELECT * FROM diet_plan WHERE user_id = '$user_ID' AND email = '$email' AND height = '$height' AND  weight = '$weight' AND diet_preference = '$diet_preference' AND goal = '$goal' AND bmi = '$bmi'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // Duplicate record found
} else {

	$sql = "INSERT INTO diet_plan (user_id, email, height, weight, diet_preference,goal, bmi) VALUES ('$user_ID', '$email', '$height', '$weight', '$diet_preference','$goal', '$bmi')";
	$result = mysqli_query($conn, $sql);

}
	$sqlRec = "INSERT INTO diet_plan_record (user_id, diet_preference, goal) VALUES ('$user_ID', '$diet_preference', '$goal')";
	$resultRec = mysqli_query($conn, $sqlRec);
				
}	
?>
