<?php
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_COOKIE["loggedin"])) {
    // Redirect to the login page if not logged in
    header("Location: loginform.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?></h2>
    <p>Student ID: <?php echo $_SESSION["student_id"]; ?></p>
    <p>Mobile No: <?php echo $_SESSION["mobile_no"]; ?></p>
    <p>Address: <?php echo $_SESSION["address"]; ?></p>

    <form method="post" action="logout.php">
        <input type="submit" value="Sign Out">
    </form>
</body>
</html>
