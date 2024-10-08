<?php
include_once('../includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission to update the user
    $userID = $_POST['userID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];   
    $phone = $_POST['number'];
    $address = $_POST['address'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    
    $query = "UPDATE user SET username = '$username', email = '$email', password = '$password',role = '$role',fname = '$fname',lname = '$lname',address = '$address',dob = '$birth',phone='$phone',gender = '$gender' WHERE user_id = '$userID'";
    
    if ($conn->query($query) === TRUE) {
        header('Location:users.php');
    } else {
        echo "Error updating user: " . $conn->error;
    }
    
   
} else {
    
    $userID = $_GET['id'];

   

    $query = "SELECT * FROM user WHERE user_id = $userID";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lname = $row['lname'];
        $fname = $row['fname'];
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $birth = $row['dob'];
        $password = $row['password'];
        $role = $row['role'];


    }
    
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/table.css">
    <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="edit_user.php">
        <input type="hidden" name="userID" value="<?php echo $userID; ?>">
        <label>First Name:<input type="text" name="fname" value="<?php echo $fname;?>"></label><br><br>
        <label>Last Name:<input type="text" name="lname" value="<?php echo $lname;?>"></label><br><br>
        <label>Username: <input type="text" name="username" value="<?php echo $username; ?>" required></label><br><br>
        <label>Gender: <input type="radio" name="gender" value="male" checked>male
                        <input type="radio" name="gender" value="female">female
        </label><br><br>
        <label>Phone Number: <input type="text" name="number" value="<?php echo $phone; ?>" required></label><br><br>
        <label>Email:<input type="email" name="email" value="<?php echo $email;?>"></label><br><br>
        <label>Address:<input type="text" name="address" value="<?php echo $address;?>"></label><br><br>
        <label>Date of Birth:<input type="text" name="birth" value="<?php echo $birth;?>"></label><br><br>
        <label>Password: <input type="password" name="password" placeholder="New Password (leave blank to keep current)"></label><br><br>
        <label>Role:<select name="role">
                        <option><?php echo $role; ?></option>
                        <option>admin</option>
                        <option>user</option>
                    </select>   
        </label><br><br>

        <input type="submit" value="Update User">
    </form>
</body>
</html>
