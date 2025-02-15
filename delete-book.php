<?php
$bookId = isset($_GET["id"]) ? $_GET["id"] : null;
if($bookId === null){
    header("Location: dashboard.php");
    exit(0);
}
session_start();

$booklist = isset($_SESSION["BOOKLIST"]) ? $_SESSION["BOOKLIST"] : [];
$book = null;

foreach($booklist as $key => $b){
    if($b["id"] == $bookId){
        $book = $b;
        unset($booklist[$key]);
        break;
    }
}

$_SESSION["BOOKLIST"] = array_values($booklist);
header("Location: dashboard.php");
?>