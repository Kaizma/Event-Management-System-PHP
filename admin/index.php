<?php require_once('../includes/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./styles/view.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="">

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
            <a href="index.php" class="nav-active" >Home</a>
            <a href="users.php">Users</a>
            <a href="parties.php">Parties</a>
            <a href="feedbacks.php">Feedbacks</a>
            <a href="inquiries.php">Inquiries</a>
        </div>
        <div class = "nav-bar-right">
            <a href="../logout.php">Log Out</a>
           
        </div>
    </div>
    <!-- End of Navigation Bar -->   

   
</body>
</html>

