<?php

include("config.php");

// Get the username and password from the login form
$username = $_POST['logemail'];
$password = $_POST['logpass'];

// Set error message
$error = "Invalid username or password!";

// SQL query to check if the provided login credentials are valid
$sql = "SELECT * FROM user WHERE username='$username' AND pasword='$password'";
$result = $conn->query($sql);

// Check if a row is returned
if ($result->num_rows > 0) {
    // Verify the password (you should hash the password in the database and compare it here)
    // For example, assuming the hashed password is stored in the 'password' column
    $userData = $result->fetch_assoc();

    // Store user information in the session
    $_SESSION['user_id'] = $userData['user_id'];
    $_SESSION['username'] = $userData['username'];
    $_SESSION['user_name'] = $userData['name'];
    $_SESSION['user_surname'] = $userData['surname'];
    $_SESSION['user_role'] = $userData['role'];

    // Redirect the user to the desired page after successful login
    header('Location: homePage.php'); // Redirect to the home page or any other page
    exit();
} else {
    // User not found
    header("location: login.php?error=$error");
    exit();
}
// Close the database connection
$conn->close();
?>