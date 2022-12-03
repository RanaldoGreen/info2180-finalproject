<?php session_start();
	if(isset($_SESSION['id'])){
		$host = 'localhost';
		$username = 'project2_user';
		$password = 'password123';
		$dbname = 'dolphin';
		$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
		
		$id = $_GET['note'];
		$stmt = $conn->query("SELECT * FROM contacts WHERE id='$id'");
   		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$assigned_id = $results[0]['assigned_to'];
		$stmt = $conn->query("SELECT * FROM users WHERE id='$assigned_id'");
		$assigned = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$creator_id = $results[0]['created_by'];
		$stmt = $conn->query("SELECT * FROM users WHERE id='$creator_id'");
		$user = $stmt->fetchAll(PDO::FETCH_ASSOC);	

		$stmt = $conn->query("SELECT *FROM users, notes WHERE notes.contact_id='$id' AND notes.created_by=users.id");
        $contact = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project 2</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="notesload.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="notesload.js?v=1"></script>
		<script src="addnotes.js?v=1"></script>
		</head>
	<body>
		<?php include 'header.php';?>
		<div class="container">
			<div class="back">
				<div class="buttons">
					<div><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
					<div><a href="newcontact.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New Contact</a></div>
					<div><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i>Users</a></div>
					<hr>
					<div><a href="sure.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
				</div>
			</div>	
			<div class="background">
				<div class="overhead">
					<div class="t-o-p">
						<i class="fa fa-user-circle" aria-hidden="true"></i>
						<div class="cname">
							<h1>
								<?php 
								echo $results[0]['title']." ".$results[0]['firstname']." ".$results[0]['lastname'];
								?>
							</h1>
							<p>Created on
								<?php
								echo date('F j, Y',strtotime($results[0]['created_at']))." by ".$user[0]['firstname']." ".$user[0]['lastname'];
								?>
							</p>
							<div id="result2"><p><?php if(isset($results[0]['updated_at'])){?>Updated on
								<?php echo date('F j, Y',strtotime($results[0]['updated_at']));	?></p><?php } ?>
							</div>
						</div>
					</div>
					<div class="btns">
						<button value="<?php echo $results[0]['id'] ?>" class="btn" id="assign"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Assign to me</button>
						<button value="<?php echo $results[0]['id'] ?>" class="btn" id="sales"><div id="result1"><i class="fa fa-exchange" aria-hidden="true"></i>
						<?php if($results[0]['type']=="SALES LEAD"){ echo "Switch to Support"; }
						else if($results[0]['type']=="SUPPORT"){ echo "Switch to Sales Lead"; } ?></div></button>
					</div>	
				</div>
				<div class="container4">
					<div class="container2">
						<div class="info1">
							<b><p>Email</p></b>
							<?php echo $results[0]['email']; ?>
							<br><br>
							<b><p>Telephone</p></b>
							<?php echo $results[0]['telephone']; ?>
						</div>
						<div class="info2">
							<b><p>Company</p></b>
							<?php echo $results[0]['company']; ?>
							<br><br>
							<b><p>Assigned To</p></b>
							<div id="result"><?php echo $assigned[0]['firstname']." ".$assigned[0]['lastname']; ?></div>
						</div>
					</div>	
				</div>
				<div class="container4">
					<div class="container3">
						<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Notes</h3>
						<div id="loadnote">
							<?php foreach ($contact as $row)
								echo "<hr><br><b><p>".$row['firstname']." ".$row['lastname'].
								"</b><p>".$row['comment']."</p>".
								date('F j, Y',strtotime($row['created_at']))." at ".date("ha",strtotime($row['created_at'])).
								"<br><br>";
							?>
						</div>
					</div>
				</div>
				<div class="container4">
					<div class="container5">
						<div class="note">
							<p><b>Add a note about <?php echo $results[0]['firstname']; ?><b></p>
							<form method="get">
								<textarea id="area" name="area" placeholder="Enter details here" required></textarea>
								<div class="save-note">
									<button value="<?php echo $results[0]['id'] ?>" name="save" id="save">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'newscript.php';  ?>
	</body>
</html>
<?php }
else{
	header('location:filler.php');
}?>