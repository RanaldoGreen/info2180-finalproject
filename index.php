<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project 2</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="styles.css">
		<script src="sweetalert.min.js"></script>
	</head>

	<body>
		<?php include 'header.php';?>
		<main>
            <h1>Login</h1>
            <form method="post" id="controls" action="login.php"> 
				<?php
					session_start();
					if(isset($_SESSION['invalid'])){
				?>
						<script>
							swal({
								icon: "error",
								title: "Authentication Error!",
								text: "Email or password is invalid!",
							});
						</script>
				<?php	
						unset($_SESSION['invalid']);
					} 
				?>
				<div class="input-container">					
					<i class="fa fa-envelope icon"></i>
					<input type="email" id="email" name="email" placeholder="Email address" required/>
                </div>
				<br><br>
				<div class="input-container">
					<i class="fa fa-key icon"></i>
					<input type="password" name="password" id="password" placeholder="Password" required/>
				</div>
                <br><br>
				<div class="button">
					<button type="submit" name="login" id="login">Login</button>
				</div>
            </form>
		</main>
        <footer>
            <p>Copyright &copy; 2020 Dolphin CRM</p>
            <img src="dolphin.png" alt="">
        </footer>
	</body>
</html>