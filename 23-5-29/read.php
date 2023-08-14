<?php
    header("Content-type:text/html;charset=utf-8");

    $link = @mysqli_connect("localhost","root","","",3306);
    mysqli_set_charset($link,"utf8");
    mysqli_select_db($link,"db1");

    $query1 = 'select name from tb1 where name="'.$_POST["tx1"].'"';
    $result1 = mysqli_query($link,$query1);

    // var_dump(mysqli_fetch_assoc($result));
    // echo "<br>";
    // var_dump(mysqli_fetch_assoc($result));
    // echo "<br>";
    // var_dump(mysqli_fetch_assoc($result));
    // echo mysqli_num_rows($result);

    if(mysqli_num_rows($result1) >= 1){
        echo "注册失败，账户已存在";
    } else {
        if($_POST["pw1"] == ""){
            echo "注册失败，密码为空 ";
        } else {
            $query2 = 'insert into tb1(name,password) values('.$_POST["tx1"].','.$_POST["pw1"].')';
            if(mysqli_query($link,$query2) != null){
                echo "注册成功";
            }else {
                echo "写不如数据库";
            }
        }
    }

    mysqli_close($link);