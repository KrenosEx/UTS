<?php
  session_start();
  $error = isset($error)?$_SESSION['ERROR']:" ";
  unset($_SESSION['ERROR']);
?>

<!DOCTYPE html>
  <head>
    <title>Login</title>
    <script defer src="login.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Login</h1>
    <form action="UserController.php" id="loginForm" method="POST">
      <input type="hidden" name="action" value="/auth/login"><br><br>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>

      <button type="submit">Login</button>
    </form>
    <?php if(isset($error)): ?>
      <h5><?= $error ?></h5><br><br> 
    <?php endif; ?>
    <p>Tidak Punya Akun? <a href="register.php">Register</a></p>
  </body>
</html>
