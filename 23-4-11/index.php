<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "dfbsd123bfgzd344fhfbh554fdffhdfh";
        $pattern = "/[0-9]{3}/";
        $replace = "aaa";
        echo $str;
        echo "<br>";
        echo preg_replace($pattern,$replace,$str)."<hr>";

        $str = "dfbsd123bfgzd344fhfbh554fdffhdfh";
        $pattern = "/\w{3}(\d{3})/";
        $replace = "aaa$1";
        echo $str;
        echo "<br>";
        echo preg_replace($pattern,$replace,$str)."<hr>";

        $str = "dfbsd123bfgzd344fhfbh554fdffhdfh";
        $pattern = "/\w{3}(\d{3})/";
        echo $str;
        echo "<br>";
        echo preg_replace_callback($pattern,"fun1",$str);
        function fun1($matches){
            print_r($matches);
            echo "<br>";
            return "aaa".($matches[1]+100);
        }
    ?>

    <input class="in1" type="text">
    <input class="bt1" type="button" value="add">
    <input class="bt2" type="button" value="read">
    <input class="bt3" type="button" value="remove">
    <input class="bt4" type="button" value="clear">
    <script src="jquery-3.6.0.js"></script>
    <script>
        var num = localStorage.getItem("num");
        $(".bt1").on("click",function(){
            console.log($(".in1").val());
            num++;
            localStorage.setItem("in"+num,$(".in1").val());
            localStorage.setItem("num",num);
        });
        $(".bt2").on("click",function(){
            $(".in1").val(localStorage.getItem("in"+num));
        });
        $(".bt3").on("click",function(){
            localStorage.removeItem("in"+num);
            num--;
            localStorage.setItem("num",num);
        });
        $(".bt4").on("click",function(){
            localStorage.clear();
        });
    </script>
</body>
</html>