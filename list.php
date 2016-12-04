<?php
    require_once("connDB.php");

    $sql = "SELECT * FROM `students`";
    $result = mysql_query($sql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>LIST</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="col-md-4 col-sm-5">
                <table class="table">
                    <tr>
                        <th>姓名</th>
                        <th>電話</th>
                    </tr>
                    <?php while($row=mysql_fetch_assoc($result)){ ?>
                        <tr>
                            <td>
                                <?php echo $row["name"]; ?>
                            </td>
                            <td>
                                <?php echo $row["phone"]; ?>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
            </div>
            <a href="add.php">增加資料</a>
        </div>
    </body>

    </html>