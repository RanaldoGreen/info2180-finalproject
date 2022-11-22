<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

$fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
$lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
$userpassword = $_POST['password'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$role = filter_var($_POST['role'], FILTER_SANITIZE_STRING);

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->beginTransaction();
$conn->exec("INSERT INTO users (firstname, lastname, password, email, role, created_at)
                        VALUES ('$fname','$lname','$userpassword','$email','$role',Current_Timestamp)");
$conn->commit();

echo '<script type="text/javascript"> window.open("newuser.php","_self");</script>';
?>