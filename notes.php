<?php
    $host = 'localhost';
	$username = 'project2_user';
	$password = 'password123';
	$dbname = 'dolphin';
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if(isset($_GET['to-me'])){
        session_start();
        $assigned_to = $_SESSION['id'];
        $id = $_GET['to-me'];

        $conn->beginTransaction();
        $conn->exec("UPDATE contacts SET assigned_to='$assigned_to' WHERE id='$id'");
        $conn->commit();
    
        $stmt = $conn->query("SELECT * FROM users WHERE id='$assigned_to'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $results[0]['firstname'].' '.$results[0]['lastname'];
    }    
    if(isset($_GET['type'])){
        $id = $_GET['type'];

        $stmt = $conn->query("SELECT * FROM contacts WHERE id='$id'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($results[0]['type']=="SUPPORT"){
            $type="SALES LEAD";
        }
        else if($results[0]['type']=="SALES LEAD"){
            $type="SUPPORT";
        } 

        $conn->beginTransaction();
        $conn->exec("UPDATE contacts SET type='$type' WHERE id='$id'");
        $conn->commit();
    
        $stmt = $conn->query("SELECT * FROM contacts WHERE id='$id'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if($results[0]['type']=="SUPPORT"){
            echo '<i class="fa fa-exchange" aria-hidden="true"></i>';
            echo "Switch to Sales Lead";
        }
        else if($results[0]['type']=="SALES LEAD"){
            echo '<i class="fa fa-exchange" aria-hidden="true"></i>';
            echo "Switch to Support";
        } 
    }
    if(isset($_GET['updated'])){
        $id = $_GET['updated'];

        $conn->beginTransaction();
        $conn->exec("UPDATE contacts SET updated_at=CURRENT_TIMESTAMP WHERE id='$id'");
        $conn->commit();

        $stmt = $conn->query("SELECT * FROM contacts WHERE id='$id'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "Updated on ".date('F j, Y',strtotime($results[0]['updated_at']));
    }
?>
