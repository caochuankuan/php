<?php
    header("Content-type:text/html;charset=utf-8");

    $link = mysqli_connect("127.0.0.1","root","123456","db1",3306);

    mysqli_set_charset($link,"utf8");

    $result = mysqli_query($link,"select * from tb1");

    $text = mysqli_fetch_assoc($result);

    echo "账户：".$text["name"]."<br>";
    echo "密码：".$text["password"];

    mysqli_close($link);