<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


if(isset($_GET['filter']) && $_GET['filter']=='all'){
    $stmt = $conn->query("SELECT * FROM contacts");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th></th>
        </tr>";
        
    foreach ($results as $row)
    echo"<tr> 
        <td><a href=notesload.php?note=".$row['id'].">" . $row['title'] .' '. $row['firstname'] .' '. $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['company'] . "</td>
        <td>" . $row['type'] . "</td>
        <td><a href=notesload.php?note=".$row['id'].">View</a></td>
        </tr>";
}
else if(isset($_GET['filter']) && $_GET['filter']=='sales'){
    $stmt = $conn->query("SELECT * FROM contacts WHERE type='SALES LEAD'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th></th>
        </tr>";
        
    foreach ($results as $row)
    echo"<tr> 
    <td><a href=notesload.php?note=".$row['id'].">" . $row['title'] .' '. $row['firstname'] .' '. $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['company'] . "</td>
        <td>" . $row['type'] . "</td>
        <td><a href=notesload.php?note=".$row['id'].">View</a></td>
        </tr>";
}
else if(isset($_GET['filter']) && $_GET['filter']=='support'){
    $stmt = $conn->query("SELECT * FROM contacts WHERE type='SUPPORT'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th></th>
        </tr>";
        
    foreach ($results as $row)
    echo"<tr> 
    <td><a href=notesload.php?note=".$row['id'].">" . $row['title'] .' '. $row['firstname'] .' '. $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['company'] . "</td>
        <td>" . $row['type'] . "</td>
        <td><a href=notesload.php?note=".$row['id'].">View</a></td>
        </tr>";
}
else if(isset($_GET['filter']) && $_GET['filter']=='mine'){
    session_start();
    $created_by = $_SESSION['id'];
    $stmt = $conn->query("SELECT * FROM contacts WHERE assigned_to='$created_by'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th></th>
        </tr>";
        
    foreach ($results as $row)
    echo"<tr> 
    <td><a href=notesload.php?note=".$row['id'].">" . $row['title'] .' '. $row['firstname'] .' '. $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['company'] . "</td>
        <td>" . $row['type'] . "</td>
        <td><a href=notesload.php?note=".$row['id'].">View</a></td>
        </tr>";
}
else{
    $stmt = $conn->query("SELECT * FROM contacts");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Type</th>
        <th></th>
        </tr>";
        
    foreach ($results as $row)
    echo"<tr> 
    <td><a href=notesload.php?note=".$row['id'].">" . $row['title'] .' '. $row['firstname'] .' '. $row['lastname'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['company'] . "</td>
        <td>" . $row['type'] . "</td>
        <td><a href=notesload.php?note=".$row['id'].">View</a></td>
        </tr>";
}
?>