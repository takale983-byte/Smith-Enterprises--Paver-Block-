<?php
session_start();

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registration_db";

$conn = mysqli_connect($host, $user, $pass, $dbname, 3307);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $_SESSION['error'] = "Email already registered!";
        header("Location: registration.php");
        exit();
    } else {
        $sql = "INSERT INTO users (name, email, phone, address, password) 
                VALUES ('$name', '$email', '$phone', '$address', '$password')";
        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Registration Successful!";
            // Redirect to homepage.html after successful registration
            header("Location: homepage.html");
            exit();
        } else {
            $_SESSION['error'] = "Error: " . mysqli_error($conn);
            header("Location: homepage.html");
            exit();
        }
    }
}
?>
