<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211曹传宽</title>

</head>
<body>
    <?php

        // $pattern = "/[\x{4e00}-\x{9fa5}]/u";
        // // $pattern = "/[一-龥]/u";
        // $str = "ab2d一ef的3都是f";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/[\x{4e00}-\x{9fa5}]{1,}/u";
        // $str = "a是gf方便2d一并不比efg的个对付3都是突然让他f";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/[\x{4e00}-\x{9fa5}]{1,3}/u";
        // $str = "a是gf方便2d一并不比efg的个对付3都是突然让他f";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/[\x{4e00}-\x{9fa5}]{2,3}/u";
        // $str = "a是gf方便2d一并不比efg的个对付3都是突然让他f";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/(ab){2}/";
        // $str = "ab,aab,abb,aabb,abab";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/(?:ab){2}/";
        // $str = "ab,aab,abb,aabb,abab";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/[0-9]+(?=f)/";
        // $str = "dgnkl999knvdsnb888fhdfgb";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/(?<=b)[0-9]+/";
        // $str = "dgnkl999knvdsnb888fhdfgb";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/(?<!b)[0-9]+/";
        // $str = "dgnkl999knvdsnb888fhdfgb";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        // $pattern = "/[0-9]+(?!=b)/";
        // $str = "dgnkl999knvdsnb888fhdfgb";
        // echo preg_match_all($pattern,$str,$arr)."<br>";
        // print_r($arr);

        $pattern = "/收集了(?:[0-9]+|[\x{4e00}-\x{9fa5}]+|[a-z]+)个石头/u";
        $str = "收集了6个石头dfbddggb收集了660个石头sfjmglnnlk收集了六个石头sdfnhj收集了six个石头";
        echo preg_match_all($pattern,$str,$arr)."<br>";
        print_r($arr);

    ?>
</body>
</html>