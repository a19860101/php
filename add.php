<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <style>
        @keyframes load{
            from {transform: rotate(0deg)}
            to {transform: rotate(360deg)}
        }
        .loading {
            width: 100px;
            height: 100px;
            background-color: #f00;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            display: none;
            animation: load 1s linear; 
        }
    </style>
</head>
<body>
    <div class="loading"></div>
    <h1>新增資料</h1>
    <form action="javascript:;" method="post">
        <input type="text" name="name" id="name">
        <input type="text" name="phone" id="phone">
        <input type="text" name="mail" id="mail">
        <input type="submit" id="submit">
    </form>
    <script>
        $(function(){
            $("#submit").click(function(){
                $.ajax({
                    url:"reply.php",
                    type:"post",
                    data:{
                        name: $("#name").val(),
                        phone: $("#phone").val(),
                        mail: $("#mail").val()
                    },
                    beforeSend:function(){
                        $(".loading").show();  
                    },
                    success:function(e){
                        location.href="list.php"
                    },
                    error:function(e){
                        alert("ERROR");
                    }
                })
            });
        })
    </script>
</body>
</html>