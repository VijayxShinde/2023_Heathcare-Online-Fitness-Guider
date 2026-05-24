<?php 
$users = array(
	array(12112, "test1", "test1", "male", "test1@gmail.com", "test1"),
	array(21112, "test2", "test2", "male", "test2@gmail.com", "test2"),
	array(34412, "test3", "test3", "female", "test3@gmail.com", "test3"),
	array(44478, "test4", "test4", "female", "test4@gmail.com", "test4"),
	array(59877, "test5", "test5", "male", "test5@gmail.com", "test5"),
	array(61234, "test6", "test6", "male", "test6@gmail.com", "test6"),
	array(75671, "test7", "test7", "female", "test7@gmail.com", "test7"),
	array(81567, "test8", "test8", "female", "test8@gmail.com", "test8"),
	array(98761, "test9", "test9", "male", "test9@gmail.com", "test9"),
	array(10132, "test10", "test10", "male", "test10@gmail.com", "test10"),
	array(11671, "test11", "test11", "female", "test11@gmail.com", "test11"),
	array(12313, "test12", "test12", "male", "test12@gmail.com", "test12"),
	array(13676, "test13", "test13", "male", "test13@gmail.com", "test13"),
	array(14878, "test14", "test14", "male", "test14@gmail.com", "test14"),
	array(15001, "test15", "test15", "female", "test15@gmail.com", "test15"),
	array(16097, "test16", "test16", "male", "test16@gmail.com", "test16"),
	array(17122, "test17", "test17", "male", "test17@gmail.com", "test17"),
	array(18565, "test18", "test18", "female", "test18@gmail.com", "test18"),
	array(19091, "test19", "test19", "male", "test19@gmail.com", "test19"),
	array(20043, "test20", "test20", "male", "test20@gmail.com", "test20"),
	array(21091, "test21", "test21", "female", "test21@gmail.com", "test21"),
	array(22121, "test22", "test22", "male", "test22@gmail.com", "test22"),
	array(23547, "test23", "test23", "female", "test23@gmail.com", "test23"),
	array(28564, "test24", "test24", "male", "test24@gmail.com", "test24"),
	array(25976, "test25", "test25", "female", "test25@gmail.com", "test25"),
	array(26345, "test26", "test26", "female", "test26@gmail.com", "test26"),
	array(27654, "test27", "test27", "male", "test27@gmail.com", "test27"),
	array(28989, "test28", "test28", "male", "test28@gmail.com", "test28"),
	array(29123, "test29", "test29", "male", "test29@gmail.com", "test29"),
	array(30345, "test30", "test30", "female", "test30@gmail.com", "test30"),
	array(31534, "test31", "test31", "male", "test31@gmail.com", "test31"),
	array(32678, "test32", "test32", "male", "test32@gmail.com", "test32"),
	array(33979, "test33", "test33", "female", "test33@gmail.com", "test33"),
	array(34123, "test34", "test34", "male", "test34@gmail.com", "test34"),
	
);

$dsn = 'mysql:host=localhost;dbname=fitness_guide';

// get the form data

$username = 'root';
$password = '';
	try {
		$pdo = new PDO($dsn, $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$stmt = $pdo->prepare('INSERT INTO users (user_id,	name,	surname,	gender,	email,	password) VALUES (?, ?, ?, ?, ?, ?)');
	
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