<?php
    session_start();
    $username = $_SESSION['USERNAME'];
    $booklist = $_SESSION['BOOKLIST'];
    $bookData = json_decode($_GET['book'], true);
    if (isset($bookData)) {
      $_SESSION["BOOKLIST"][] = $bookData;
    }
?>

<!DOCTYPE html>
  <head>
    <title>Dashboard</title>
    <script defer src="dashboard.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <nav>
        <a href="dashboard.php">Dashboard</a>
        <button id="logout">Logout</button>
      </nav>
    </header>

    <?php
      if(isset($username)){
        echo "<h1>$username's Books</h1>";
      }else{
        echo "<h1>My Books</h1>";
      }
    ?>
    <!-- <h1>My Books</h1> -->
    <button onclick="window.location.href='create-book.php'">Add New Book</button>
    <table id="bookTable">
      <thead>
        <tr>
          <th>ID Buku</th>
          <th>Foto</th>
          <th>Judul Buku</th>
          <th>Author</th>
          <th>Publisher</th>
          <th>Number of Page</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_SESSION["BOOKLIST"]) && !empty($_SESSION["BOOKLIST"])) {
            echo "<tr>";
            foreach($booklist as $book) {
              echo "<th>" . $book['id'] . "</th>";
              echo "<th>FOTO?</th>";
              echo "<th>" . $book['title'] . "</th>";
              echo "<th>" . $book['author'] . "</th>";
              echo "<th>" . $book['publisher'] . "</th>";
              echo "<th>" . $book['number_of_page'] . "</th>";
            }
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>

    <footer>
      IniEy x ExKrenos
    </footer>
  </body>
</html>
