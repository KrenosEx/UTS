<!-- menyimpan booklist dari "create-book.php" -->
<?php
    session_start();
    //$_SESSION()["BOOKLIST"][] = $_POST['???'];
    $id = 0;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $book[$id] = [
            'id' => $id++,
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'publisher' => $_POST['publisher'],
            'pages' => $_POST['pages']
        ];

        // Redirect to the current page with the book data
        header("Location: " . $_SERVER['PHP_SELF'] . "?book=" . json_encode($book));
        exit;
    }

    header("Location: dashboard.php");
?>