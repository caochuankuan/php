<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211曹传宽03</title>
</head>
<body>
    <form action="123.php" method="GET">
        姓名：<input type="text" name="tx1" <?php
        session_id("1234");
        session_start();
        echo "value=".$_SESSION["姓名"];
        ?>>
        <br>
        学号：<input type="number" name="nu1" value=<?php
        echo '"'.$_SESSION["学号"].'"';
        ?>>
        <br>
        <input type="submit">
    </form>
</body>
</html>