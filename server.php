<?php
session_start();

$name = "";
$email = "";
$password = "";
$passwordconf = "";
// keep track of registration errors 
$errors = array();

// Connect to the database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE", "sn_db");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


//capture the value from the form
if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordconf = mysqli_real_escape_string($conn, $_POST['passwordconf']);

    // TODO: backend validation

    // check if user email is used
    $user_email_check = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_email_check);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push($error, "email already exists");
        }
    }

    // if there is no errors during the process then insert the user to db
    if (count($errors) == 0) {
        $password = md5($password);
        $insert_usr = "INSERT INTO users(name,email,password)  VALUES('$name', '$email', '$password') ";
        mysqli_query($conn, $insert_usr);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
