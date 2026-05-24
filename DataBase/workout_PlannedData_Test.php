<?php 
$users = array(

	array(12112, "test1@gmail.com", "Beginner","Weight Gain"),
array(21112,  "test2@gmail.com", "Beginner","Weight Gain"),
array(34412,  "test3@gmail.com", "Beginner","Weight Gain"),
array(44478,  "test4@gmail.com", "Beginner","Weight Gain"),
array(59877,  "test5@gmail.com", "Beginner","Weight Gain"),
array(61234,  "test6@gmail.com", "Beginner","Weight Gain"),
	array(75671,  "test7@gmail.com", "Beginner","Weight Gain"),
	array(81567,  "test8@gmail.com","Beginner","Weight Gain"),
	array(98761,  "test9@gmail.com", "Beginner","Weight Gain"),
	array(10132,  "test10@gmail.com", "Beginner","Weight Gain"),
	array(11671,  "test11@gmail.com", "Beginner","Weight Gain"),
	array(12313,  "test12@gmail.com", "Beginner","Weight Gain"),
	array(13676,  "test13@gmail.com", "Beginner","Weight Gain"),
	array(14878,  "test14@gmail.com", "Beginner","Weight Gain"),
	array(15001,  "test15@gmail.com", "Beginner","Weight Gain"),
	array(16097,  "test16@gmail.com", "Beginner","Weight Gain"),

);
	

$dsn = 'mysql:host=localhost;dbname=fitness_guide';

// get the form data

$username = 'root';
$password = '';
	try {
		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$stmt = $pdo->prepare('INSERT INTO workout_plan (user_id,	email,	activity_level,	goal) VALUES (?, ?, ?, ?)');
	
	foreach($users as $row){
		$stmt->execute($row);
		// print_r($row);
	}
		$response = ['success' => true, 'message' => 'Form data submitted successfully.'];
		echo "Hello";
		echo json_encode($response);
		echo "Form submitted";
	} catch (PDOException $e) {
		$response = ['success' => false, 'message' => 'Error submitting form data: ' . $e->getMessage()];
		echo json_encode($response);
	}

?>