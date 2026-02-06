<?php
    include("registration_conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="REGI.css"> <!-- Link to your CSS -->
</head>
<body>
    
    <form method="POST" action="registration.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>
        <label>address :</label><br>
        <input type="text" name="address" required><br><br>


        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Register">
        <h4> i have account!!</h4><a href="login.php">log in</a>
    </form>
</body>
</html>
