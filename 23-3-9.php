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

        $a = "666";
        $b = "777";
        function f1() {
            // $a = "111";
            global $a;
            echo "<div style='color:blue;font-size:25px;'>".$a."</div>";
            echo "<div style='color:pink;'>".$GLOBALS["b"]."</div>";
            echo var_dump($GLOBALS);
            echo "<br>";
        }
        $ff1 = "f1";
        $ff1($a);

        $c = function(){
            echo "<br>";
            echo "123";
        };
        $c();

        echo("<br>");

        // $a = "666";
        // function f1($string) {
        //     // $a = "111";
        //     echo "<div>".$string."</div>";
        // }
        // f1($a);

        //关联数组
        $array2 = array(
            "name" => "yifeng",
            "age" => 3,
        );
        echo var_dump($array2);
        echo("<br>");
        echo $array2["name"];
        echo("<br>");
        echo $array2["age"];
    ?>

    <script>
        var aa = "888";//全局变量
        function f2(){
            var aa = "999";//局部变量
            console.log(aa);
        }
        f2();
        console.log(aa);
        var bb = function(){
            console.log("aaaaaaaaaaa");
        };
        bb();
    </script>

</body>
</html>