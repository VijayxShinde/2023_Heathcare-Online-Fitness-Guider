<?php

	session_start();

	$dsn = 'mysql:host=localhost;dbname=fitness_guide';

	// get the form data
	$userID = $_POST["userID"];
	$firstname = $_POST["firstN"];
	$lastname = $_POST["lastN"];
	$email = $_POST["emailID"];
	$passwordU = $_POST["passW"];
	$gender = $_POST['gender'];

$username = 'root';
$password = '';
		try {
			$pdo = new PDO($dsn, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			$stmt = $pdo->prepare('INSERT INTO users (user_id, name, surname, gender,email, password) VALUES (?, ?, ?, ?, ?, ?)');
			$stmt->execute([$userID, $firstname, $lastname, $gender, $email, $passwordU]);
		
			$response = ['success' => true, 'message' => 'Form data submitted successfully.'];
			echo json_encode($response);
			echo "Form submitted";
			$_SESSION['user_id'] = $userID;
			header('Location: Excersices/services.php');
		} catch (PDOException $e) {
			$response = ['success' => false, 'message' => 'Error submitting form data: ' . $e->getMessage()];
			echo json_encode($response);
			echo "<h2>There seem to error such as Duplicate User_ID in your provided information for registeration Please insert correct details and change user_id and re-register!!</h2>";
			echo "<h1>Thank You!</h1>";
		}

?>