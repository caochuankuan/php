<?php
    header('Content-type:text/html;charset=utf-8');
    
    $link=@mysqli_connect('localhost','root','','',3306);
    
    mysqli_set_charset($link,'utf8');
    
    mysqli_select_db($link,"fly_bird");
    
    $query1 = 'select * from score order by score desc limit 2 ';

    $result1 = mysqli_query($link,$query1);

    $tmp = [];

    for($i=0;$i<mysqli_num_rows($result1);$i++){
        $tmp[$i] = mysqli_fetch_assoc($result1);
    }
    echo json_encode($tmp);

    mysqli_close($link);