<?php
    $womenWorkout = array(
        array(1, "Complete", "Monday", "3 sets of pushups 15 reps", "Leg raise 4 sets and 12 reps",
              "Planks 3 or 4 sets --> 45 sec", "Crunches 4 sets and 15 reps", "Treadmil for 15 min",
              "Free Squat 4 sets and 12 reps"),
        
        array(2, "Complete", "Tuesday", "Pushups 4 sets and 10 reps", "Flutter Kicks 4 sets and 12 reps",
             "Planks 3 sets same 45 sec", "Moutain climbing for 20 reps fro  on leg",
             "Skipping for 15 min", "Burpess 4 sets and 15 reps"),
        
        array(3, "Complete", "Wednesday", "4 sets plank 45 sec", "Lunges 3 sets and 12 reps",
              "Calves Exercise for 15 reps and 4 sets" ,"4 sets of side planks 30 sec duration",
              "Crosswalk 15 min", "Forarm plank to Dolphin 4 sets and 15 reps"),
        
        array(4, "Complete", "Thursday", "Squats 4 sets and 15 reps", "Jumping jacks 25 reps and 4 sets",
              "Tricep dip for ladies 4 sets and 10 reps", "Pushups 4 sets and 12 reps",
              "Treadmil for 10 mins and skipping 5 mins", "Reverse Crunches 4 sets and 15 reps"),
        
        array(5, "Complete", "Friday", "Flutter Kicks 4 sets 12 reps", "Bicep curl with brick 3 sets 12 reps",
              "Skipping for 12 min", "Burpees 4 sets 10 reps",
              "Sumo Squat 4 sets and 15 reps", "Mountain Climbing 4 sets 22 reps as per leg"),

        array(6, "Complete", "Saturday", "3 sets of Pushups", "Leg raises 4 sets and 12 reps",
              "Planks 3 sets 45 sec", "Crunches 4 sets and 15 reps",
              "Treadmil for 15 min", "Free Squat 4 sets and 12 reps"),

        array(7, "Complete", "Sunday", "Rest", "Rest", "Rest", "Rest", "Rest", "Rest")
    );
   

		$dsn = 'mysql:host=localhost;dbname=fitness_guide';

		// get the form data
	
	$username = 'root';
	$password = '';
			try {
				$pdo = new PDO($dsn, $username, $password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
				$stmt = $pdo->prepare('INSERT INTO women_workout (workout_id,	body_part,	day,	first_workout,	second_workout,	third_workout,	fourth_workout,	fifth_workout,	sixth_workout) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
			
			foreach($womenWorkout as $row){
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