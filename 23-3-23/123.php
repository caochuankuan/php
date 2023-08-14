<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211曹传宽03</title>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.cookie.js"></script>
    <script>
        $(function(){
            $.cookie("sessionId",$(".cc").attr("cc"),{expires:7});
            $(".cc").html($.cookie("sessionId"));
        })
    </script>
</head>
<body>
    处理session和cookie页面
    <!-- 1.获取账号密码数据，生成随机session_id,写入session -->
    <?php
    session_start();
    $_SESSION["tx1"] = $_POST["tx1"];
    $_SESSION["pw1"] = $_POST["pw1"];
    ?>

    <script>
        // 2.给浏览器写入cookie
        $.cookie("sessionID",<?php echo '"'.session_id().'"' ?>,{expires:9999});
        $.cookie("tx1",<?php echo '"'.$_SESSION['tx1'].'"' ?>);
        $.cookie("pw1",<?php echo '"'.$_SESSION['pw1'].'"' ?>);

        setTimeout(function(){
            $(location).attr("href","234.php");
        },5000);
    </script>

</body>
</html>