<?php

$host = 'localhost';
$database = 'marlin';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, $database)
 or die("Ошибка" . mysqli_error($link));

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query)
    or die ("Ошибка" . mysqli_error($link));
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
