<?php
    session_start();
    //$_SESSION()["BOOKLIST"][] = $_POST['???'];
    $id = mt_rand(1, 100000000);
    $_POST = json_decode(file_get_contents("php://input"), true);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $book = [
            'id' => $id,
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'publisher' => $_POST['publisher'],
            'number_of_page' => $_POST['number_of_page']
        ];
        if(!isset($_SESSION['BOOKLIST']) || !is_array($_SESSION['BOOKLIST']) || empty($_SESSION['BOOKLIST'])) {
            $_SESSION['BOOKLIST'] = [];
        }
        $_SESSION['BOOKLIST'][] = $book;
        session_write_close();

        // Redirect to the current page with the book data
        header("Location: " . $_SERVER['PHP_SELF'] . "?book=" . json_encode($book));
        exit;
    }

    header("Location: dashboard.php");
?>