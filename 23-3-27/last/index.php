<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.cookie.js"></script>
    <script>

        // 1、判断cookie数据sessionID是否存在，是就判断和服务器session ID一致，是就跳转到登录后234.php
        //不存在就记录phpsessid到sessionID
        $(function(){
            <?php
                if($_COOKIE["sessionID"]){
                    session_id($_COOKIE["sessionID"]);
                    session_start();
                    if($_SESSION["tx1"]){
                        echo '$(location).attr("href","234.php");';
                    }
                }else{
                    setcookie("sessionID",$_COOKIE["PHPSESSID"],time()+10000000);
                    // $.cookie("sessionID",$.cookie("PHPSESSID"),{expires : 7});
                }
            ?>            
        })

    </script>
</head>
<body>
    这是主页
    <form action="123.php" method="POST">
        账号：<input type="text" name="tx1">
        <br>
        密码：<input type="password" name="pw1">
        <br>
        <input type="submit">
    </form>
</body>
</html>