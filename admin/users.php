<?php require_once('../includes/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- <link rel="stylesheet" href="./styles/view.css"> -->
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
            <a href="index.php" >Home</a>
            <a href="users.php" class="nav-active">Users</a>
            <a href="parties.php">Parties</a>
            <a href="feedbacks.php">Feedbacks</a>
            <a href="inquiries.php">Inquiries</a>
        </div>
        <div class = "nav-bar-right">
            <a href="../logout.php">Log Out</a>
           
        </div>
    </div>
    <!-- End of Navigation Bar -->   

    <div class="body-content">
        <h2>List of users</h2>
        <div class="table-container">       
        <table class="table">
            <thead>
            <tr>
                <th>User ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date of_Birth</th>
                <th>Role</th>
                <th>Actions</th>
             </tr>
            </thead>
        
        <?php
            $query = "SELECT * FROM user";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['user_id']."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['lname']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['role']."</td>";
                echo "<td><a href='edit_user.php?id=".$row['user_id']."'><button>Edit</button></a> <br/> <a  href='delete_user.php?id=".$row['user_id']."'><button id ='del' onclick='deleteItem()'>Delete</button></a></td>";
                echo "</tr>";
            }
            $conn->close();
        ?>
        </table>
        </div>
        
    </div>

   
    <script>
         function deleteItem() {
            
            if (confirm("Are you sure you want to delete this ?")) {
             
                showNotification("This deleted successfully.");
            }
            
        }

        function showNotification(message) {
            alert(message);
        }
        
    </script>
   
</body>
</html>

