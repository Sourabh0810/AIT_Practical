Register.php 
<?php
// Start a session
session_start();

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_id = $_POST["student_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $mobile_no = $_POST["mobile_no"];
    $address = $_POST["address"];
	$username= $_POST["username"];
	$password=$_POST["password"];
	

    // Store form data in session variables
    $_SESSION["student_id"] = $student_id;
    $_SESSION["first_name"] = $first_name;
    $_SESSION["last_name"] = $last_name;
    $_SESSION["mobile_no"] = $mobile_no;
    $_SESSION["address"] = $address;
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>
