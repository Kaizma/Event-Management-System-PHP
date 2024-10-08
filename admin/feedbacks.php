<?php require_once('../includes/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Parties</title>
    <link rel="stylesheet" href="./styles/view.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/table.css">

    <script>
        // Disable the back button
        history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            history.pushState(null, null, document.URL);
        });
    </script>
</head>
<body>
      <!-- Navigation bar  -->
   
   <div class="nav-bar"> 
        <div class ="nav-bar-left"> 
            <a href="index.php"  >Home</a>
            <a href="users.php">Users</a>
            <a href="parties.php" >Parties</a>
            <a href="feedbacks.php" class="nav-active">Feedbacks</a>
            <a href="inquiries.php">Inquiries</a>
        </div>
        <div class = "nav-bar-right">
            <a href="../logout.php">Log Out</a>
           
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <div class="body-content">
        <h2>Feedbacks</h2>

        <div class="table-container">

        <table class="table" >
            <thead>
                <tr>
                <th>User ID</th>
                <th>Event Date</th>
                <th>Event Type</th>
                <th>Experience</th>
                <th>Food</th>
                <th>Entertainment</th>
                <th>Decoration</th>
                <th>Suggestion</th>
                <th>Future_Party</th>
                <th>Comment</th>
                <th>Action</th>
                 </tr>
            </thead>
         
        <?php
            $query = "SELECT * FROM feedback";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['type']."</td>";
                echo "<td>".$row['experience']."</td>";
                echo "<td>".$row['food']."</td>";
                echo "<td>".$row['entertaintment']."</td>";
                echo "<td>".$row['decoration']."</td>";
                echo "<td>".$row['suggestion']."</td>";
                echo "<td>".$row['future_party']."</td>";
                echo "<td>".$row['comment']."</td>";
                echo "<td><a href='delete_feedback.php?id=".$row['feedback_id']."'><button id='del' onclick='deleteItem()'>Delete</button></a></td>";
                
                echo "</tr>";
            }
            
        ?>
        </table>

        </div>
       
        
    <script>
         function deleteItem() {
            // Display a confirmation dialog
            if (confirm("Are you sure you want to delete this ?")) {
                // Perform the deletion (you can make an AJAX request here)

                // Show a notification
                showNotification("This deleted successfully.");
            }
            
        }

        function showNotification(message) {
            alert(message);
        }
        
    </script>
   
</body>
</html>

