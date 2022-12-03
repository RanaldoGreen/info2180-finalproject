<?php 
    $host = 'localhost';
	$username = 'project2_user';
	$password = 'password123';
	$dbname = 'dolphin';
	$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if(isset($_POST['view']) && isset($_POST['comment'])){
        $id = $_POST['view'];
        $note = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

        session_start();
        $created_by = $_SESSION['id'];

        $conn->beginTransaction();
        $conn->exec("INSERT INTO notes (contact_id, comment, created_by, created_at)
                                VALUES ('$id','$note','$created_by',Current_Timestamp)");
        $conn->commit();

        $stmt = $conn->query("SELECT *FROM users, notes WHERE notes.contact_id='$id' AND notes.created_by=users.id");
        $contact = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($contact as $row)
            echo "<hr><br><b><p>".$row['firstname']." ".$row['lastname'].
            "</b><p>".$row['comment']."</p>".
            date('F j, Y',strtotime($row['created_at']))." at ".date("ha",strtotime($row['created_at'])).
            "<br><br>";
    }
?>