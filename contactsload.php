<?php
$host = 'localhost';
$username = 'project2_user';
$password = 'password123';
$dbname = 'dolphin';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM contacts");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Company</th>
    <th>Type</th>
    </tr>";
    
foreach ($results as $row)
echo"<tr> 
    <td>" . $row['firstname'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['company'] . "</td>
    <td>" . $row['type'] . "</td>
    </tr>";
?>