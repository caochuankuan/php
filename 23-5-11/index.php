<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .aa{
            width: 400px;
            height: 200px;
            background-color:aqua
        }
    </style>
    <script src="jquery-3.6.0.js"></script>
    <script>
        $(function(){

            $(".aa").click(function(){
                $.post("abc.php",{"cmd":"1"},function(data){
                    $(".aa").html(data);
                })
            })

            $(".b2").click(function(){
                $.post("abc.php",{"cmd":"2","str":$(".b1").val()},function(data){
                    alert(data);
                })
            })

        })
    </script>
</head>
<body>
    <div class="aa"></div>
    <textarea class="b1"></textarea>
    <input class="b2" type="button" value="提交">
</body>
</html>