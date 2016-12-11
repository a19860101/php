<?php
    require_once("connDB.php");
    $id = $_GET["sid"];
    $sql = "DELETE FROM `students` WHERE id=$id";
//    $sql = "DELETE FROM `students` WHERE id=".$id;
//    $sql = "DELETE FROM `students` WHERE id=".$_GET["sid"];
    mysql_query($sql);
    header("Location:list.php");
?>
