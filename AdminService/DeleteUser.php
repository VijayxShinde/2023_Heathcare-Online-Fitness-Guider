<?php
include('../connection.php');


if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];
    
    // Prompt user for confirmation
  

    try {
        echo "<script>alert('User Deleted!!!')</script>";
			// Delete the user
        $sql = "DELETE FROM users WHERE user_id = :deleteid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':deleteid', $deleteid);
        $stmt->execute();
        echo "User deleted successfully.";
    } catch(PDOException $e) {
        echo "Error deleting user: " . $e->getMessage();
    }
} else {
    echo "No user ID specified.";
}
?>
