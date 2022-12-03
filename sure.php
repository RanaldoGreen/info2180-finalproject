<?php session_start();
	if(isset($_SESSION['id'])){
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Project 2</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="styles.css">
        <script src="sure.js"></script>
	</head>

	<body>
		<?php include 'header.php';?>
		<main>
            <h1>Do you really want to logout?</h1>
			<div class="button">
				<button id="confirm">Confirm</button>
                <button id="cancel">Cancel</button>
			</div>
		</main>
        <footer>
            <p>Copyright &copy; 2020 Dolphin CRM</p>
            <img src="dolphin.png" alt="">
        </footer>
	</body>
</html>
<?php }
else{
	header('location:filler.php');
}?>