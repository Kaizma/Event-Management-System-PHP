<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $partyID = $_GET['id'];
   
    include_once('../includes/connect.php');

    // Perform the deletion
    $query = "DELETE FROM party WHERE party_id = $partyID";
    if ($conn->query($query) === TRUE) {
       
        header("Location: parties.php");
    } else {
        echo "Error deleting party: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request or missing Party ID.";
}
?>
