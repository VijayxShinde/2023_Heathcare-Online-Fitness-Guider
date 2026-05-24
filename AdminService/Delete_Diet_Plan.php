<?php
include('../connection.php');


if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    
  

    try {
        echo "<script>alert('User Deleted!!!')</script>";
			// Delete the user
        $sql = "DELETE FROM diet_plan WHERE user_id = :deleteid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':deleteid', $deleteid);
        $stmt->execute();
				header('Location: ../adminpage.php');
    } catch(PDOException $e) {
        echo "Error deleting user: " . $e->getMessage();
    }
} else {
    echo "No user ID specified.";
}
?>
