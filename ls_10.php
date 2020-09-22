<?php
session_start();


$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=marlin;","root","");

$sql = "SELECT * FROM task10 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($task)) {
    $mess = "You should check in on some of those fields below.";
    $_SESSION['message'] = $mess;

    header("Location: /task_10.php" );
    exit;
}

$sql = "INSERT INTO task10 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: /task_10.php");
