<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $inquiryID = $_GET['id'];
   
    include_once('../includes/connect.php');

    // Perform the deletion
    $query = "DELETE FROM help WHERE msg_id = $inquiryID";
    if ($conn->query($query) === TRUE) {
       
        header("Location: inquiries.php");
    } else {
        echo "Error deleting Inquiry: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing Inquiry ID.";
}
?>