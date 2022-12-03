<?php session_start();
	if(isset($_SESSION['id'])){
?>
<html>
	<div id="load">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Dashboard</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="dashboard.css">
			<script src="dashboard.js?v=1"></script>
		</head>
		<body>
			<?php include 'header.php';?>
			<div class="container">
				<div class="back">
					<div class="buttons">
						<div id="dashboard"><a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
						<div id="newcontact"><a href="newcontact.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i>New Contact</a></div>
						<div id="users"><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i>Users</a></div>
						<hr>
						<div><a href="sure.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
					</div>
				</div>
				<div class="background">
					<div class="records">
						<div class="top-button">
							<h1>Dashboard</h1>
							<div><a href="newcontact.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Contact</a></div>
						</div>	
						<div class="record2">
							<div class="tables">
								<div class="db">
									<div class="filter-by">
										<h3><i class="fa fa-filter" aria-hidden="true"></i>Filter by:</h3>
										<button class="btn" id="all">All</button>
										<button class="btn" id="sales">Sales Lead</button>
										<button class="btn" id="support">Support</button>
										<button class="btn" id="to-me">Assigned to me</button>
									</div>
									<div class="us">
										<div id="result">
											<?php include 'contactsload.php';?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include 'newscript.php';?>
		</body>
	</div>
</html>
<?php }
else{
	header('location:filler.php');
}?>