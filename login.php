<?php
// Start a session
session_start();

// Process login form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password are correct (You'll need to implement your own logic here)

    // For this example, we'll use a hardcoded username and password
    if ($username === $_SESSION["username"] && $password === $_SESSION["password"]) {
        // Set a cookie to remember the login
        setcookie("loggedin", "true", time() + (86400 * 30), "/"); // Cookie expires in 30 days

        // Redirect to the home page
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
