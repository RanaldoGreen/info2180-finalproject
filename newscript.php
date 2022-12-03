<script src="sweetalert.min.js"></script>
<?php
  if(isset($_SESSION['user'])){
?>
    <script>
      <?php 
      $host = 'localhost';
      $username = 'project2_user';
      $password = 'password123';
      $dbname = 'dolphin';
      $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
      $id = $_SESSION['id'];
      $stmt = $conn->query("SELECT * FROM users WHERE id='$id'");
      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>

      var name = "<?php echo $user[0]['firstname']; ?>";
      swal({
          icon: "success",
          title: "Welcome!",
          text: "We missed you "+name,
      });
    </script>
<?php  
    unset($_SESSION['user']);
  }   
?>