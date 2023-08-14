<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.cookie.js"></script>
    <script>

        // 2、2秒后自动跳转登陆后页面
        $(function(){
            setTimeout(function(){
                $(location).attr("href","234.php");
            }, 2000);
        })

    </script>
</head>
<body>
    处理session和cookie页面
    <br>

    <!-- 获取账号密码数据，生成随机session id，写入session -->
    <?php
        session_start();
        $_SESSION["tx1"] = $_POST["tx1"];
        $_SESSION["pw1"] = $_POST["pw1"];
    ?>


</body>
</html>