<?php
    $dailyworkout = array(
        array(1, "Pull", "Monday", "Flat Bench Press 4 sets and 10 reps", "Overhead Tricep Press 4 sets and 10 reps", 
              "Side Lateral Raises 4 sets and 10 reps", "Decline Bench Press 4 sets and 8 reps", "Stretching and cycle 10 mins",
              "Triceps Pressdown 4 sets and 10 reps", "Shoulder Press 4 sets and 10 reps"),
        
        array(2, "Pull", "Tuesday", "Bent Over rows 4 sets and 10 reps", "Barbells Shrugs 4 sets and 10 reps",
              "Dumbbell Hammer Curl 4 sets and 10 reps", "Pull Ups 4 sets and 10 reps", "Stretching and cycle 10 mins",
              "Biceps Barbell Curl 4 sets and 10 reps", "Face Pulls 4 sets and 10"),
        
        array(3, "Pull", "Wednesday", "Weighted Squats/ Sumo Squats 4 sets and 10 reps", "Leg Press 4 sets and 10 reps",
             "Calves 4 sets and 15 reps", "Lunges 4 sets and 12 reps", "Streteching and cycle 10 min",
             "Barbell Hamstring /  Dumbel Hamstring 4 sets and 10 reps", "Leg Pull String 4 sets and 10 reps"),
        
        array(4, "Pull", "Thursday", "Rest", "Rest", "Rest", "Rest", "Rest", "Rest" ,"Rest"),
        
        array(5, "Pull", "Friday", "Barbell Landmine Press 4 sets and 10 reps", "Shoulder barbell Press 4 sets and 10 reps",
             "Plank with alternative leg raise 4 sets and 10 reps", "Tricep Pushdowns 4 sets and 10 reps", "Stretching and cycle 10 min",
             "Front Raises 4 sets and 10 reps", "Chest fly 4 sets and 12 reps"),

        array(6, "Pull", "Saturday", "Deadlift 4 sets and 6-8 reps", "Seated Cable Crunch 4 sets and 10 reps",
              "Reverse Fly 4 sets and 10 reps", "Chinups 4 sets and 10 reps", "Stretching and cycle 10 mins",
              "Concentration Curls 4 sets and 10 reps", "EZ - Bar Biceps Curl 4 sets and 10 reps"),

        array(7, "Pull", "Sunday", "Weighted Squats", "Sumo Squat 4 sets and 10 reps", "Leg Press 4 sets and 10 reps",
              "No Exercise", "Lunges 4 sets and 10 reps", "Cycle 10 min", 
              "Calves 4 sets and 15 reps")
    );
   

		$dsn = 'mysql:host=localhost;dbname=fitness_guide';

		// get the form data
	
	$username = 'root';
	$password = '';
			try {
				$pdo = new PDO($dsn, $username, $password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				$stmt = $pdo->prepare('INSERT INTO pull_workout (workout_id,	workout_type,	day,	first_Exercise,	second_exercise,	third_exercise,	fourth_exercise,	fifth_exercise,	sixth_exercise,	seventh_exercise) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			
			foreach($dailyworkout as $row){
				$stmt->execute($row);
			}
				$response = ['success' => true, 'message' => 'Form data submitted successfully.'];
				echo json_encode($response);
				echo "Form submitted";
			} catch (PDOException $e) {
				$response = ['success' => false, 'message' => 'Error submitting form data: ' . $e->getMessage()];
				echo json_encode($response);
			}

?>