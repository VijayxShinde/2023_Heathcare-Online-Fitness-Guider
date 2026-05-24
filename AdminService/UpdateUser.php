<?php


use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';		

// Connect to database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness_guide";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get user ID from query string parameter
$user_id = $_GET['user_id'];

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Update user data in database
  $sql = "UPDATE users SET name='$name', surname='$surname', gender='$gender', email='$email', password='$password' WHERE user_id=$user_id";

  if (mysqli_query($conn, $sql)) {
    echo "User data updated successfully";



$mail = new PHPMailer();


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'vijayxshinde@gmail.com';
$mail->Password = 'izquwbmmwhyqsgeh';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('vijayxshinde@gmail.com', 'Vijay Shinde');
$mail->addAddress($email, $name . " " . $surname);
$mail->Subject = 'Updating Your Data';
$mail->Body = "Hello Dear User, Your account data has changed and updated. The details that has been changed and unchanged are Same: $name, Surname: $surname, Gender: $gender, Email: $email, password: $password. Your user_id hasn't been changed your user_id: " . $user_id ;
// Send the email
if(!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
}
		echo "<script>alert('User Data Updated');</script>";
		header('Location: ../adminpage.php');
  } else {
    echo "Error updating user data: " . mysqli_error($conn);
  }
}

// Retrieve user data from database
$sql = "SELECT * FROM users WHERE user_id=$user_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output form with user data
  $row = mysqli_fetch_assoc($result);
  ?>
  <form method="post">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>

    <label>Surname:</label>
    <input type="text" name="surname" value="<?php echo $row['surname'] ?>"><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="male" <?php if ($row['gender'] === 'male') echo 'checked' ?>> Male
    <input type="radio" name="gender" value="female" <?php if ($row['gender'] === 'female') echo 'checked' ?>> Female
    <br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>

    <label>Password:</label>
    <input type="password" name="password" value="<?php echo $row['password'] ?>"><br>

    <button type="submit">Update</button>
  </form>
  <?php
} else {
  echo "User not found";
}

mysqli_close($conn);
?>
