<?php
include_once('../includes/connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission to update the party
    $partyID = $_POST['partyID'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $no_guests = $_POST['no_guests'];

    $query = "UPDATE party SET type = '$type', date = '$date', time = '$time' , no_guests = $no_guests, location = '$location'  WHERE party_id = $partyID";
    
    if ($conn->query($query) === TRUE) {
        header('Location:parties.php');
    } else {
        echo "Error updating party: " . $conn->error;
    }
    
  
} else {
    // Display the form to edit the party details
    $partyID = $_GET['id'];

    

    $query = "SELECT * FROM party WHERE party_id = $partyID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $type = $row['type'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        $no_guests = $row['no_guests'];
    }
    
   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Party</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/table.css">
    <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
    <h1>Edit Party</h1>
    <form method="post">
        <input type="hidden" name="partyID" value="<?php echo $partyID; ?>">
        <label>Event Name: <input type="text" name="type" value="<?php echo $type; ?>" required></label><br><br>
        <label>Event Date : <input type="date" name="date" value="<?php echo $date; ?>" required></label><br><br>
        <label>Event Time : <input type="time" name="time" value="<?php echo $time; ?>" required></label><br><br>
        <label>Event Location: <input type="text" name="location" value="<?php echo $location; ?>" required></label><br><br>
        <label>Number of Guests: <input type="number" name="no_guests" value="<?php echo $no_guests; ?>" required></label><br><br>
        <input type="submit" value="Update Party">
    </form>
</body>
</html>
