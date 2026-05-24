<?php
    $dailyWorkout = array(
        array(1, "Complete", "Monday", "stretching and cycle for 10 mins", "Barbell bench press - 4 sets of 8 reps",
              "Lat pulldowns -4 sets of 10 reps", "Seated Dumbells Press -4 sets of 10 reps", "Leg Extensions -4 sets of 10 reps",
              "Barbell Bicep Curls -3 sets of 10 reps", "Triceps Rope Pushdowns -3 sets of 15 reps"),
        
        array(2, "Complete", "Tuesday", "Cycle for 10 mins", "Legs -legs Press machine -4 sets of 8 reps",
              "Overhead Bar Extension -3 sets of 20 reps", "EZ bar Curls -4 sets of 10 reps", "Machine Chest Press -4 sets of 10 reps",
              "T-bar Row -4 sets of 10 reps", "Lateral Raises -3 sets of 20 reps"),
        
        array(3, "Complete", "Wednesday", "Crosswalk for 10 mins", "EZ Bar Upright Rows -3 sets of 15 reps", 
              "Close-Grip Pulldowns -4 sets of 12 reps", "Cable fly -4 sets of 10 reps", "Lunges -3 sets of reps per leg",
              "Skullcrushers -3 sets of 15 reps", "Hammer Curls -3 sets of 12 reps"),
        
        array(4, "Complete", "Thursday", "Skipping for 10 mins", "Barbells Bench press -4 sets and 8 reps", 
             "incline Dumbbells Press -3 sets of 6-8 reps", "Dips -3 sets of 6-10 reps", "Pullups -3 sets of 5-8 reps",
             "Pendaly Rows -3 sets of 6-10 reps", "Pulldowns -3 sets of 6-10 reps"),
        

        array(5, "Complete", "Friday", "Cycling for 10 mins", "Squats work up 5 reps max and 9 reps", "Leg Press -3 sets of 6-10 reps",
             "Stiff legged Deadlift -5 sets of 5 reps", "Hamstring Curls -3 sets of 6-8 reps", "Call raise -5 sets of 10 reps",
             "No Exercise"),

        array(6, "Complete", "Saturday", "Crosswalk for 10 min", "Militry press -3 sets of 6-8 reps",
              "Dumbbells press -3 sets 6-8 reps", "Lateral Raises -5 sets of 1- reps", "Barbell Curls -5 sets of 6-10 reps",
              "Dumbbell Curls -3 sets of 6-10 reps", "Bench Dips -3 sets of 6-10 reps"),

        array(7, "Complete", "Sunday", "Rest", "Rest", "Rest", "Rest", "Rest", "Rest" ,"Rest")
    );
   

		$dsn = 'mysql:host=localhost;dbname=fitness_guide';

		// get the form data
	
	$username = 'root';
	$password = '';
			try {
				$pdo = new PDO($dsn, $username, $password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				$stmt = $pdo->prepare('INSERT INTO daily_workout (workout_id,	body_part,	day,	first_workout,	second_workout,	third_workout,	fourth_workout,	fifth_workout,	sixth_workout,	seventh_workout) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
			
			foreach($dailyWorkout as $row){
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