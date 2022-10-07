<?php
    include 'connection.php';
    session_start();
    $password = $_SESSION['password'];
    $username = $_SESSION['username'];
    unset($_SESSION['username']);
    unset($_SESSION['password']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Successful</title>
</head>
<body>
  <?php include 'header.php';?>
  <main>
    <div class="success-container">
    <img class="success-img" src="img/Success.png">
    <h1 class="success-main-text"><b>DO NOT RE-REGISTER AGAIN<b></h1>
    <!-- <h1 class="success-text">You will be registered soon</h1>
    <p class="success-text">NOTE: When logging in<br>Username = <?php echo "$username"  ?>
    <br>password = <?php echo "$password"  ?></p> -->
    </div>
  </main>

    <?php include 'scripts.php'; ?>
</body>
</html>