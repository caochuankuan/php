<?php

    header("Content-type:text/html;charset=utf-8");

    if(is_file("123.txt")){
        $file1 = fopen("123.txt","r+");
    }else{
        $file1 = fopen("123.txt","w+");
    }

    if(flock($file1,LOCK_EX|LOCK_NB)){
        sleep(5);
        while(!feof($file1)){
            fgets($file1)."<br>";
        }
    
        fwrite($file1,"\n写入文字");
    
        rewind($file1);
    
        while(!feof($file1)){
            echo fgets($file1)."<br>";
        }
    }else{
        echo "文件正在被使用中，请稍后再试！";
    }
    // echo fread($file1,2);
    // echo fread($file1,2);
    // echo urldecode(fread($file1,3));
    // echo fgets($file1);
    // echo fgets($file1);
    // echo fgets($file1);

    fclose($file1);
?>