
<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];

 

  $conn = mysqli_connect('localhost', 'root', '', 'fitness_guide');

  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  
  $sql = "SELECT * FROM users WHERE user_id='$user_id' LIMIT 1";
  $result = mysqli_query($conn, $sql);

 
  if (mysqli_num_rows($result) == 1) {

			$_SESSION['user_id'] = $user_id;
      header("Location: Excersices/services.php");
     
     
    } else {
     
      $error = 'Invalid user_id or password';
			echo $error;
    }
  } 
  
  mysqli_close($conn);

?>
