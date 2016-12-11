<?php
    require_once("connDB.php");

    $sql = "SELECT * FROM `students`";
    $result = mysql_query($sql);
    $total = mysql_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LIST</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div>
           <div>共有<?php echo $total;?>筆資料</div>
            <table class="table">
                <tr>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>Mail</th>
                    <th></th>
                </tr>
                <?php while($row=mysql_fetch_assoc($result)){ ?>
                    <tr>
                        <td>
                            <?php echo $row["name"]; ?>
                        </td>
                        <td>
                            <?php echo $row["phone"]; ?>
                        </td>
                        <td>
                            <?php echo $row["mail"]; ?>
                        </td>
                        <td>
                            <a href="javascript:;" id="<?php echo $row["id"];?>" class="fa fa-trash-o fa-2x del"></a>
                        </td>
                        <td>
                            <a href="edit.php?sid=<?php echo $row["id"];?>" class="fa fa-pencil fa-2x"></a>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
        <a href="add.php" class="fa fa-plus fa-2x"></a>
    </div>
    <script>
        $(function () {
            $(".del").click(function () {
                var el = $(this);
                var id = el.attr("id");
                var info = "sid="+id;
                console.log(info);
                if(confirm("確認刪除？")){
                    $.ajax({
                        url:"delete.php",
                        type:"get",
                        data:info,
                        success:function(e){
//                            alert("success")
                             el.parent().parent().fadeOut();
                        },
                        error:function(e){
                            alert("ERROR");
                        }
                    });
                   
                   
                }
                return false;
            })
        })
    </script>
</body>

</html>