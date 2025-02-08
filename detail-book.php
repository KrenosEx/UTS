<?php
  session_start();
  $booklist=$_SESSION['BOOKLIST'];
?>

<!DOCTYPE html>
  <head>
    <title>Book Details</title>
    <script defer src="book-details.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Book Details</h1>
    <div id="bookDetails"></div>
    <button onclick="window.location.href='dashboard.php'">Back to Dashboard</button>
  </body>
</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
