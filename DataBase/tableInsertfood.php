<?php
  $foodtbl = array(
    array(1, 1, "VEG", "Pomegrant Oatmeal Snak Cups", 200, 6, 26, 8, "Breakfast"),
    array(2, 2, "VEG", "Peanut Butter Breakfast", 299, 11, 34, 15, "Breakfast"),
    array(3, 3, "VEG", "Protein-pavcked overnight oats", 438, 21, 58, 16, "Breakfast"),
    array(4, 4, "VEG", "High-protein chai smoothie bowl", 263, 17, 38, 6, "Breakfast"),
    array(5, 5, "VEG", "Black bean & Corn taco salad", 278, 12, 45, 7, "Snack"),
    array(6, 6, "VEG", "Quick black bean chili over lime couscous", 435, 21, 88, 4, "Lunch"),
    array(7, 7, "VEG", "Butternut squash and white bean chili", 265, 14, 42, 6, "Lunch"),
    array(8, 8, "VEG", "Butternut squash and white bean chili", 265, 14, 42, 6, "Dinner"),
    array(9, 9, "VEG", "Chickpea vegetable curry", 385, 16, 58, 11, "Dinner"),
    array(10, 10, "VEG", "Quick Black Bean Chili Over Lime Couscous", 435, 21, 88, 4, "Lunch"),
    array(11, 11, "VEG", "Instant Pot Chickpea Tikka Masala", 317, 11, 60, 5, "Dinner"),
    array(12, 12, "VEG", "Instant Pot Chickpea Tikka Masala", 317, 11, 60, 5, "Lunch"),
    array(13, 13, "VEG", "Instant Pot Tofu and Vegetable Fried Rice", 386, 14, 54, 13, "Dinner"),
    array(14, 14, "VEG", "Pumpkin Soup with Crispy Sage Leaves", 133, 4, 21, 5, "Dinner"),
    array(15, 15, "VEG", "Chipotle Black Bean Nachos With Greek Yogurt", 325, 17, 51, 8, "Snack"),
    array(16, 16, "VEG", "Cauliflower Black Bean Tacos", 286, 13, 52, 4, "Breakfast"),
    array(17, 17, "VEG", "Mushroom-Quinoa Burger", 495, 9, 49, 31, "Lunch"),
    array(18, 18, "VEG", "Beet Mushroom and Avocado Salad", 370, 7, 32, 26, "Snack"),
    array(19, 19, "VEG", "Peanuty Edamame and Noodle Salad", 455, 22, 50, 22, "BreakFast"),
    array(20, 20, "VEG", "Grilled Asparagus and Shiitake Tacos", 350, 7, 36, 21, "Snack"),
    array(21, 21, "VEG", "Vegan Breakfast Burrito", 713, 19, 131, 14, "Breakfast"),    //calories   protein carbs fats meal
		array(22, 22, "NON-VEG", "Chicken breast", 165, 31, 0, 4, "Lunch"),
    array(23, 23, "NON-VEG", "Turkey breast", 135, 29, 0, 3, "Lunch"),
    array(24, 24, "NON-VEG", "Salmon", 208, 20, 0, 13, "Dinner"),
    array(25, 25, "NON-VEG", "Tuna", 132, 28, 0, 1, "Lunch"),
    array(26, 26, "NON-VEG", "Shrimp", 84, 24, 0, 0,"Breakfast"),
    array(27, 27, "NON-VEG", "Crab", 84, 175, 2, 2, "Breakfast"),
    array(28, 28, "NON-VEG", "Lobster", 128, 27, 0, 1, "Lunch"),
    array(29, 29, "NON-VEG", "Clams", 73, 12, 1, 1, "Lunch"),
    array(32, 32, "NON-VEG", "Venison", 158, 30, 0, 3, "Dinner"),
    array(38, 38, "NON-VEG", "Mussels", 149, 12, 5, 0, "Lunch"),
    array(39, 39, "NON-VEG", "Sardines", 191, 22, 0, 15,"Dinner"),
    array(40, 40, "NON-VEG", "Anchovies", 210, 29, 0, 10, "Dinner"),
    array(41, 41, "NON-VEG", "Eggs", 155, 13, 2, 11, "Snack"),
  );

	$dsn = 'mysql:host=localhost;dbname=fitness_guide';

	// get the form data

$username = 'root';
$password = '';
		try {
			$pdo = new PDO($dsn, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			$stmt = $pdo->prepare('INSERT INTO food_table (food_id,	diet_id,	diet_preference,	dish,	calories,	protein,	carbs,	fats,	meal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
		
		foreach($foodtbl as $row){
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