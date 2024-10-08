<?php
include_once('../includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $userID = $_GET['id'];

    

    // Perform the deletion
    $query = "DELETE FROM user WHERE user_id = $userID";
    if ($conn->query($query) === TRUE) {
        header("Location: users.php");
    } else {
        echo "Error deleting user: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing UserID.";
}
?>
