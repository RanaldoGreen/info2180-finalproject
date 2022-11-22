<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

if(isset($_POST['login'])){
    $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $userpassword = $_POST['password'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->query("SELECT * FROM users WHERE email='$email' and password='$userpassword'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if(!empty($results)){
      session_start();
      $_SESSION['id']=$results[0]['id'];
      echo '<script type="text/javascript"> window.open("dashboard.php","_self");</script>';
    }
    else{
      echo '<script type="text/javascript"> window.open("index.php","_self"); alert("Invalid email or password");</script>';
    }
} 
?>