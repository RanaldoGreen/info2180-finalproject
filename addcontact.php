<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

$title = filter_var($_POST['title'],FILTER_SANITIZE_STRING);
$fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
$lname = filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
$telephone = filter_var($_POST['telephone'],FILTER_SANITIZE_STRING);
$company = filter_var($_POST['company'],FILTER_SANITIZE_STRING);
$type = filter_var($_POST['type'],FILTER_SANITIZE_STRING);
$assigned_to = filter_var($_POST['assigned-to'],FILTER_SANITIZE_STRING);

session_start();
$created_by = $_SESSION['id'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$conn->beginTransaction();
$conn->exec("INSERT INTO contacts (title, firstname, lastname, email, telephone, company, type, assigned_to, created_by, created_at)
                        VALUES ('$title','$fname','$lname','$email','$telephone','$company','$type','$assigned_to','$created_by',Current_Timestamp)");
$conn->commit();

echo '<script type="text/javascript"> window.open("newcontact.php","_self");</script>';
?>