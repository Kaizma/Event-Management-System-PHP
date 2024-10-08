<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $feedbackID = $_GET['id'];
   
    include_once('../includes/connect.php');

    // Perform the deletion
    $query = "DELETE FROM feedback WHERE feedback_id = $feedbackID";
    if ($conn->query($query) === TRUE) {
       
        header("Location: feedbacks.php");
    } else {
        echo "Error deleting party: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing Feedback ID.";
}
?>