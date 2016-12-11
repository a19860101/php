<?php
    require_once("connDB.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $sql = "INSERT INTO `students`(name,phone,mail)VALUES('$name','$phone','$mail')";
    mysql_query($sql);
//    header("Location:list.php");
?>