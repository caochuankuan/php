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

        // $str = "sjhhfsdgdg@dhh㴳sh";
        // $pattern = "/\x{3d33}/u";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);

        // $str = "sjhhfsd©gdg@dhh㴳sh";
        // $pattern = "/\u{3d33}/";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);

        // $str = "sjhhfsd©gdg@dhh㴳sh";
        // $pattern = "/\u{00a9}/";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);

        // $str = "divsggsggadivdivshdbnahnadiv";
        // $pattern = "/div.+adiv/U";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);

        // $str = "divs111gsggad444ivdivshdb666nahnadiv";
        // $pattern = "/\d{3}/";
        // $newstr = preg_replace($pattern,"11111",$str);
        // print_r($newstr);
        // echo "<hr>";
        
        // $str = "&emsp;divs111gsggad444ivdivshdb666nahnadiv";
        // echo $str."<br>";
        // $pattern = "/\t/";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);
        // echo "<hr>";

        // $str = "divs\t111gsggad\t444iv\tdivshdb\t666nahnadiv";
        // echo $str."<br>";
        // $pattern = "/\t/";
        // preg_match_all($pattern,$str,$array);
        // print_r($array);
        // echo "<hr>";


        // $str = "helloo";
        // $pattern = "/(.)\1/";
        // echo preg_match($pattern, $str);
        // if (preg_match($pattern, $str)) {
        // echo "字符串中包含两个连续相同的字符";
        // } else {
        // echo "字符串中不包含两个连续相同的字符";
        // }
        // echo "<hr>";

        // $str1 = "good";
        // $str2 = "book";
        // $str3 = "apple";
        // $pattern = "/(.)\1/";
        // preg_match($pattern, $str1, $matches1);
        // preg_match($pattern, $str2, $matches2);
        // preg_match($pattern, $str3, $matches3);
        // print_r($matches1); // Array([0] => oo, [1] => o)
        // print_r($matches2); // Array([0] => oo, [1] => o)
        // print_r($matches3); // Array([0] => pp, [1] => p)
        // echo "<hr>";

        // $str = "好好学习，天天向上";
        // $pattern = "/(.)\1/u";
        // preg_match_all($pattern, $str, $matches);
        // print_r($matches);
        // echo "<hr>";

        // $str1 = "good";
        // $str2 = "book";
        // $str3 = "apple";
        // $pattern = "/(.)\1/";
        // preg_match($pattern, $str1, $matches1);
        // preg_match($pattern, $str2, $matches2);
        // preg_match($pattern, $str3, $matches3);
        // var_dump($matches1);
        // var_dump($matches2);
        // var_dump($matches3);
        
        // $str = "Hello, world!";
        // $pattern = "/(\w+)/";
        // $count = 0;

        // $new_str = preg_replace_callback($pattern, function ($matches) use (&$count) {
        //     $count++;
        //     return strtoupper($matches[0]);
        // }, $str, -1, $count);

        // echo "原字符串：$str <br>";
        // echo "新字符串：$new_str <br>";
        // echo "共替换了 $count 个单词。";

        $str = "good book apple ooxxpp";
        $pattern = "/(.)\1/";

        preg_match_all($pattern, $str, $matches);

        echo "原字符串：$str <br>";
        echo "匹配结果：";
        if (empty($matches[0])) {
            echo "没有匹配到任何连续字符。";
        } else {
            print_r($matches[0]);
        }




    ?>

    <script>
        var str ="aqasddfawa";
        console.log(str.match(/a.a/g));
        console.log(str.match(/a.*?a/));
    </script>

</body>
</html>