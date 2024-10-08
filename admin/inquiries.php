<?php require_once('../includes/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inquiries</title>
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
            <a href="feedbacks.php">Feedbacks</a>
            <a href="inquiries.php"  class="nav-active">Inquiries</a>
        </div>
        <div class = "nav-bar-right">
            <a href="../logout.php">Log Out</a>
           
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <div class="body-content">
        <h2>inquiries</h2>

        <div class="table-container">

        <table class="table" >
            <thead>
                <tr>
                <th>Message ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
                </tr>
            </thead>
         
        <?php
            $query = "SELECT * FROM help";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['msg_id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "<td><a href='delete_inquiry.php?id=".$row['msg_id']."'><button id='del' onclick='deleteItem()'>Delete</button></a></td>";
                
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

