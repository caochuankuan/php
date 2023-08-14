<?php
    header("Content-type:text/html;charset=utf-8");
    $link = @mysqli_connect("localhost","root","","",3306);
    mysqli_set_charset($link,"utf8");
    mysqli_select_db($link,"db1");

    // $query = "insert into tb1(name,password) values('世界','12345');insert into tb1(name,password) values('编程','1111111');";
    // mysqli_multi_query($link,$query);

    $query = "insert into tb1(name,password) values(?,'123');";
    $stmt = mysqli_prepare($link,$query);
    mysqli_stmt_bind_param($stmt,"s",$val);

    for($i=0;$i<10;$i++){
        $val = "test".$i;
        mysqli_stmt_execute($stmt);
    }

    mysqli_close($link);
