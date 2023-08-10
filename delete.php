<?php

    include 'db.php';
    $id = $_GET['id'];
    $sql = "delete from tasks where id='$id'";
    $db->query($sql);
    header("location: index.php");

?>