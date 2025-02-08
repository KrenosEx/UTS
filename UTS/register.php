<?php

?>
<!DOCTYPE html>
  <head>
    <title>Register</title>
    <script defer src="register.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Register</h1>
    <form action="UserController.php" id="registerForm">
      <input type="hidden" name="action" value="register"><br><br>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label> 
      <input type="password" id="password" name="password" required minlength="8"><br><br>
      <button type="submit">Register</button>
    </form> 
    <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
  </body>
</html>
