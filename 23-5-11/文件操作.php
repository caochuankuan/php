<?php
    // 剪切
    // copy("qqq.txt","F://aaa.txt");
    // unlink("qqq.txt");

    // 读到数组
    var_dump(file("qqq.txt"));
    echo "<br>";

    // 读到一个字符串
    echo file_get_contents("qqq.txt");