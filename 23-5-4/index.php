<?php
    echo __FILE__;
    echo "<br>";
    echo basename(__FILE__);
    echo "<br>";
    echo dirname(__FILE__);
    echo "<br>";

    // print_r(pathinfo(__FILE__));
    echo pathinfo(__FILE__)["extension"];
    echo "<br>";

    $dir ="aaa";
    if(is_dir($dir)){
        $dh = opendir($dir);
        while($rdir = readdir($dh)){
            echo $rdir."<br>";
        }

        rewinddir($dh);//重置句柄
        while($rdir = readdir($dh)){
            echo $rdir."<br>";
        }

        closedir($dh);//关闭句柄
        
        // echo readdir($dh)."<br>";//显示当前位置(.)
        // echo readdir($dh)."<br>";//显示上一级位置(..)
        // echo readdir($dh)."<br>";
        // echo readdir($dh)."<br>";
        // echo readdir($dh)."<br>";
        // var_dump(readdir($dh));//读取完之后再读取会返回false
    }

    print_r(scandir($dir));
    echo "<br>";
    for($i=0;$i<count(scandir($dir));$i++){
        echo scandir($dir)[$i]."<br>";
    }


?>