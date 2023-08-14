<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211曹传宽03</title>
</head>
<body>
    <?php

        // $pattern = "/qqq/";//匹配三个q
        // $str = "qqddsffqqqdxvvxaaasswwaqqqassaaafff";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/aq*q/";//匹配星号前面字符，任意个，包括0
        // $str = "aqqddsaqffqqqdxvvxaaasswwaqqqassaaafff";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/aq?q/";//匹配星号前面字符，0或1个
        // $str = "aqqddsaqffqqqdxvvxaaasswwaqqqassaaafff";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/aq+b/";//匹配星号前面字符，至少一个前面字符
        // $str = "abqddsaqbfqqqdxvvxaaasswwaqqqbssaaafff";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/a.q/";//匹配a*q,*可以是任意字符，但不能为空
        // $str = "abqddsaqbfqqqdxvvxaaasswwaqqqbssaaafffabq";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/^abq/";//匹配开头
        // $str = "abqddsaqbfqqqdxvvxaaasswwaqqqbssaaafff";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/abq$/";//匹配结尾
        // $str = "abqddsaqbfqqqdxvvxaaasswwaqqqbssaaafffabq";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/aq{2}/";//匹配a+2个q
        // $str = "aq,aqq,qqq,qqqq";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/a[a-f]/";//匹配a+a-f任意字符
        // $str = "aqazafawawaaarrf";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/ac|ca/";//匹配ac或ca
        // $str = "acqazafawawaaarrcaf";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/ac|ca/i";//匹配ac或ca(i:忽略大小写)
        // $str = "acqazAcafawawaCAaarrACcaf";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/ac|\n/is";//匹配ac或ca(i:忽略大小写,s换行符)
        // $str = "acqazAcafaw\nawaCAaarrACcaf";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/\d{3}/";//匹配3位数字
        // $str = "1,12,123,1234,a123,aq12";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/\D{3}/";//匹配3位非数字
        // $str = "1,12,123,1234,a123,aq12aaa";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/er\b/";//匹配er结尾，以空格为界限
        // $str = "never,verb";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        // $pattern = "/er\B/";//匹配非er结尾，以空格为界限
        // $str = "never,verb";
        // var_dump(preg_match_all($pattern,$str,$array));
        // echo "<br>";
        // print_r($array);
        // echo "<br>";

        $pattern = "/\w+/";//单个单词为数组元素
        $str = "never,verb";
        var_dump(preg_match_all($pattern,$str,$array));
        echo "<br>";
        print_r($array);
        echo "<br>";

    ?>
</body>
</html>