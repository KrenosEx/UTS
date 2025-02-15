<?php
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 0;
    $booklist = isset($_SESSION['BOOKLIST']) ? $_SESSION['BOOKLIST'] : [];
    $bookData = @json_decode($_GET['book'], true);
    if ($bookData !== false && isset($bookData)) {
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
            foreach($booklist as $book) {
                echo "<tr>";
                  echo "<td>" . $book['id'] . "</td>";
                  echo "<td>FOTO?</td>";
                  echo "<td>" . $book['title'] . "</td>";
                  echo "<td>" . $book['author'] . "</td>";
                  echo "<td>" . $book['publisher'] . "</td>";
                  echo "<td>" . $book['number_of_page'] . "</td>";
                  echo "<td>
<b><a href='detail-book.php?id=" . $book['id'] . "'>[Detail]</a>
<a style='color: #cb0000' href='delete-book.php?id=" . $book['id'] . "'>[Delete]</a></b>
</td>";
                echo "</tr>";
            }
          }
        ?>
      </tbody>
    </table>

    <footer>
      IniEy x ExKrenos
    </footer>
  </body>
</html>
