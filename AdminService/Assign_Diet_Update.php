<?php


use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';		


global $pdfName;
global $pdfpath;

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
	
  $sqlU = "SELECT * FROM diet_plan WHERE user_id=$user_id";
	$result = mysqli_query($conn,$sqlU);
	$row = mysqli_fetch_assoc($result);
	$email = $row['email'];
	$goal = $row['goal'];
	echo $email;

  if($goal === "Weight Loss") {
    $pdfpath = "/AdminService/weight_loss.pdf";
    $pdfName = "weight_loss.pdf";
} else if($goal === "Weight Gain") {
    $pdfpath = "/AdminService/weight_gain.pdf";
    $pdfName = "weight_gain.pdf";
}


  if (mysqli_query($conn, $sqlU)) {
    echo "query executed successfully!!!";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'vijayxshinde@gmail.com';
    $mail->Password = 'izquwbmmwhyqsgeh';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('vijayxshinde@gmail.com', 'Admin');
    $mail->addAddress($email, $user_id);
		// $mail->addAttachment("/AdminService/Modern city at night.png","Modern city at night.png"); 
		// $mail->addAttachment("/AdminService/weight_gain.pdf", "weight_gain.pdf"); 
    $mail->isHTML(true);
		$mail->Subject = "Your Diet Plan!";
    $mail->Body = "Hello Dear User, To achieve your goal, Admin has assigned you information about diet, etc., in PDF format. Take a look and feel free to give us feedback!";

    if(!$mail->send()) {
        echo 'Error: ' . $mail->ErrorInfo;
    } else {
    	echo "<script>alert('User Data Updated');</script>";
    }
		header('Location: ../adminpage.php');
  } 
mysqli_close($conn);

?>
