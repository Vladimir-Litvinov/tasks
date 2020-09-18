<?php

include_once 'connection.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "DELETE FROM task8 WHERE id=$id";
    mysqli_query($link,$query) or die (mysqli_error($link));

}