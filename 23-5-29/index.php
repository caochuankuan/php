<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" class="tx1">
    <br>
    <input type="password" class="pw1">
    <br>
    <button class="bt1">注册</button>

    <script src="jquery-3.6.0.js"></script>
    <script>
        $(".bt1").click(function(){
            $.post("read.php",{"tx1":$(".tx1").val(),"pw1":$(".pw1").val()},function(data){
                alert(data);
            });
        })
    </script>
</body>
</html>