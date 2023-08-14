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
        // 3.判断cookie数据是否和服务器session id一致，是就跳转到登陆后234.php
        $(function(){

            // $(".aa").click(function(){
            //     // location.href = "123.php";
            //     $(location).attr("href","123.php");
            // })

            <?php
                session_id($_COOKIE["sessionID"]);
                session_start();
                if($_SESSION["tx1"]){
                    echo '$(location).attr("href","234.php");';
                }
            ?>
        })
    </script>
</head>
<body>
    <!-- <div class="aa">aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div> -->
    <form action="123.php" method="POST">
        账号：<input type="text" name="tx1">
        <br>
        密码：<input type="password" name="pw1">
        <br>
        <input type="submit">
    </form>

    <?php
        // echo $_COOKIE["sessionId"];
        // session_id($_COOKIE["sessionId"]);
        // session_start();
        // echo "<br>";
        // echo $_SESSION["zh1"];
        // echo "<br>";
        // echo $_SESSION["pw1"]
    ?>

    <script>
        <?php
            // if ($_SESSION["zh1"]) {
            //     echo '$(location).attr("href","234.php");';
            // }
        ?>
        // setTimeout("")
    </script>
</body>
</html>