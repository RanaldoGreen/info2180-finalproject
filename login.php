<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
$userpassword = $_POST['password'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM users WHERE email='$email' and password='$userpassword'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
if(count($results)>0){
  session_start();
  $_SESSION['id']=$results[0]['id'];
  $_SESSION['user']=$results[0]['firstname'];
  header('location:dashboard.php');
}
else if(count($results)==0){
  $msg= "Invalid";
  session_start();
  $_SESSION['invalid']=$msg;
  header('location:index.php');    
}
?>