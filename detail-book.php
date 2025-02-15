<?php
  session_start();
  $booklist=$_SESSION['BOOKLIST'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Book Details</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <h1>Book Details</h1>
    <div id="bookDetails">
        <?php
        $bookId = isset($_GET['id']) ? $_GET['id'] : null;
        if($bookId === null) {
            echo "Book not found";
        }else{
            $book = null;
            foreach($booklist as $b) {
                if($b['id'] == $bookId) {
                    $book = $b;
                    break;
                }
            }
            if($book === null) {
                echo "Book not found";
            }else{
                echo "<p><strong>ID: </strong> " . $book['id'] . "</p>";
                echo "<p><strong>Title: </strong> " . $book['title'] . "</p>";
                echo "<p><strong>Author: </strong> " . $book['author'] . "</p>";
                echo "<p><strong>Publisher: </strong> " . $book['publisher'] . "</p>";
                echo "<p><strong>Number of Page: </strong> " . $book['number_of_page'] . "</p>";
            }
        }
        ?>
    </div>
    <button onclick="window.location.href='dashboard.php'">Back to Dashboard</button>
  </body>
</html>
