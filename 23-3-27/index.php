<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211曹传宽03</title>
    <script src="jquery-3.6.0.js"></script>
    <script src="jquery.cookie.js"></script>
    <script>
        $(function(){
            // $("body").html("666");
        })
    </script>
</head>
<body>
    <?php
        $str = "&nbsp;hello world";
        echo $str;
        echo "<br>";
        echo trim($str,"&nbsp;");
        echo "<br>";
        echo strtoupper($str);
        echo "<br>";
        echo substr_count($str,"l");
        echo "<br>";
        echo str_replace("o","a",$str);
        echo "<br>";
        echo htmlspecialchars("&nbsp;");

    ?>
</body>
</html>