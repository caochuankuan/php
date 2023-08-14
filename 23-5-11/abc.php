<?php
if($_POST["cmd"] == "1"){
    echo file_get_contents("inner.html");
} else if($_POST["cmd"] == "2"){
    file_put_contents("aaa.txt",$_POST["str"],LOCK_EX);
    if(file_exists("aaa.txt")){
        echo "写入内容".file_get_contents("aaa.txt")."成功";
    }
}