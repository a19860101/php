<?php
    require_once("connDB.php");
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $sql = "UPDATE `students` SET name='$name',phone='$phone',mail='$mail' WHERE id=$id";
    mysql_query($sql);
    header("Location:list.php");
?>