<?php
    // mkdir("123/456",0777,true);
    // sleep(3);
    // rmdir("123/456");
    // sleep(3);
    // rmdir("123");
    // var_dump(is_dir("123/456"));
    echo substr(filesize("111.ppt")/1024/1024,0,4)."MB";
    echo "<br>";
    echo date("Y-m-d H:i:s",filectime("111.ppt"));
    echo "<br>";
    echo date("Y-m-d H:i:s",filemtime("111.ppt"));
    echo "<br>";
    echo date("Y-m-d H:i:s",fileatime("111.ppt"));
    echo "<br>";
    print_r(stat("111.ppt"));