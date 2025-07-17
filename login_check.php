<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Debugging: output values
    // echo $username;
    // echo $password;
    // exit;

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Username and password are required.";
        header("Location: index.php");
        exit;
    }

    // Escape inputs to prevent SQL injection
    $username = mysqli_real_escape_string($con, $username);

    $query = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
	echo $query;
    $result = mysqli_query($con, $query);
    $result1 = mysqli_num_rows($result);
	echo $result1;
	//exit();
    if ($result1 > 0) 
	{
        $user = mysqli_fetch_assoc($result);

        // Use password_verify if passwords are hashed
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
			//echo $_SESSION['name'];
			//exit();
            header("Location: register.php");
            exit;
    }
    

    $_SESSION['error'] = "Invalid username or password.";
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
