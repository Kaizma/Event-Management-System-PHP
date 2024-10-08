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
            <a href="parties.php" class="nav-active">Parties</a>
            <a href="feedbacks.php">Feedbacks</a>
            <a href="inquiries.php">Inquiries</a>
        </div>
        <div class = "nav-bar-right">
            <a href="../logout.php">Log Out</a>
           
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <div class="body-content">
        <h2>Manage Parties</h2>

        <div class="table-container">

        <table class="table" >
            <thead>
                <tr>
                <th>Party ID</th>
                <th>User ID</th>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Time</th>
                <th>Location</th>
                <th>No Guests</th>
                <th>Actions</th>
                 </tr>
            </thead>
         
        <?php
            $query = "SELECT * FROM party";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['party_id']."</td>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['type']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['time']."</td>";
                echo "<td>".$row['location']."</td>";
                echo "<td>".$row['no_guests']."</td>";
                
                echo "<td><a href='edit_party.php?id=".$row['party_id']."'><button>Edit</button></a><br/> <a href='delete_party.php?id=".$row['party_id']."'><button id='del' onclick='deleteItem()'>Delete</button></a></td>";
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

