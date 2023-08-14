<?php
    $file = $_GET["dl"];
    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $mineType = finfo_file($fileinfo,$file);
    finfo_close($fileinfo);

    // 告诉浏览器，文件的格式
    header("Conten-Type:".$mineType);
    // 告诉浏览器，文件名
    header("Content-Disposition:attachment;filename=".basename($file));
    // 告诉浏览器，文件大小
    header("Content-Length:".filesize($file));
    // 把文件发给浏览器
    readfile($file);