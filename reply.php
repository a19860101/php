<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO `students`(name,phone)VALUES('$name','$phone')";
    mysql_query($sql);
    header("Location:list.php");
?>