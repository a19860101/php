<?php
    require_once("connDB.php");
    $id = $_GET["sid"];
    $sql = "SELECT * FROM `students` WHERE id=$id";
    $result = mysql_query($sql);
    $row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <h1>修改資料</h1>
    <form action="update.php" method="post">
        <input type="text" name="name" value="<?php echo $row["name"];?>">
        <input type="text" name="phone" value="<?php echo $row["phone"];?>">
        <input type="text" name="mail" value="<?php echo $row["mail"];?>">
        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        <input type="submit">
    </form>
</body>
</html>