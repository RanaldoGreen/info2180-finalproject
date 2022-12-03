<?php session_start();
	if(isset($_SESSION['id'])){
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>New User</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="dashboard.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="password.js?v=1"></script>
		<script src="adduser.js?v=1"></script>
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
				<div class="records">
					<h1>New User</h1>
					<div id="loadnote"></div>
					<div class="record2">
						<form method="post" id="form" action=""> 
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
									<label for="password">Password</label>
									<input type="password" name="password" id="password" 
									pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
									title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
									required/>
									<div id="message">
										<h3>Password must contain the following:</h3>
										<p id="number" class="invalid">A <b>number</b></p>
										<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
										<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
										<p id="length" class="invalid">Minimum <b>8 characters</b></p>
									</div>
								</div>
							</div>
							<div class="table">
								<div class="cell">
									<label for="role">Role</label><br>
									<select id="role" name="role">
										<option value="Member">Member</option>
										<option value="Admin">Admin</option>
									</select>
								</div><br>
								<div class="cell"></div>
							</div><br>
							<div class="save-button">
								<button id="save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'newscript.php';?>
	</body>
</html>
<?php }
else{
	header('location:filler.php');
}?>