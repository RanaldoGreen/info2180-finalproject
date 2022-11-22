<?php session_start();
	if(isset($_SESSION['id'])){
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project 2</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="dashboard.css">
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
					<div><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
				</div>
			</div>	
			<div class="background">
				<div class="records">
					<h1>New Contact</h1>
					<div class="record2">
						<form method="post" id="form" onsubmit="popup()" action="addcontact.php"> 
							<div class="cell">	
								<label for="title">Title</label><br>
								<select id="title" name="title">
									<option value="Mr.">Mr</option>
									<option value="Mrs.">Mrs</option>
									<option value="Ms.">Ms</option>
									<option value="Dr.">Dr</option>
									<option value="Prof.">Prof</option>
								</select>
							</div>
							<div class="table">
								<div class="cell">
									<label for="fname">First Name</label>
									<input type="text" name="fname" id="fname" required/>
								</div>
								<div class="cell">
									<label for="lname">Last Name</label>
									<input type="text" name="lname" id="lname" required/>
								</div>
							</div>
							<div class="table">
								<div class="cell">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" required/>
								</div>
								<div class="cell">
									<label>Telephone</label>
									<input type="text" name="telephone" id="telephone" required/>
								</div>
							</div>
							<div class="table">
								<div class="cell">
									<label for="company">Company</label>
									<input type="text" name="company" id="company" required/>
								</div>
								<div class="cell">
									<label for="type">Type</label>
									<input type="text" name="type" id="type" required/>
								</div>
							</div>
							<div class="cell">
								<label for="assigned-to">Assigned To</label><br>
								<select id="assigned-to" name="assigned-to">
									<option value="2">Ranaldo Green</option>
									<option value="3">Nicholas Joiles</option>
									<option value="4">Natonya Stewart</option>
									<option value="5">Britney Hemmings</option>
									<option value="6">Jamila McGowan</option>
								</select>
							</div><br>
							<div class="save-button">
								<button type="submit" id="save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }?>