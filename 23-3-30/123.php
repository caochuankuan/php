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

    echo strip_tags("<div>aaaaa</div>");
    echo "<br>";
    echo substr("qwertyuiop",6,2);
    echo "<br>";
    echo $_SERVER["REQUEST_URI"];
    echo "<br>";
    $num = strpos($_SERVER["REQUEST_URI"],"?")+1;
    echo "<br>";
    if(substr($_SERVER["REQUEST_URI"],$num) == "nologin") {
        echo "欢迎游客";
    }else if(substr($_SERVER["REQUEST_URI"],$num) == "login"){
        echo "欢迎登陆";
    }
    echo "<br>";
    // echo var_dump(explode("&",substr($_SERVER["REQUEST_URI"],$num)));
    // echo var_dump(preg_split("/[=&]+/is",substr($_SERVER["REQUEST_URI"],$num)));
    $tieba = explode("&",substr($_SERVER["REQUEST_URI"],$num));
    echo $tieba[0];
    echo "<br>";
    echo $tieba[1];
    echo "<br>";
    echo explode("=",$tieba[0])[1];
    print_r(str_split(explode("=",$tieba[0])[1],9));
    echo "<br>";
    echo str_split(explode("=",$tieba[0])[1],9)[0];
    echo "<br>";
    echo str_split(explode("=",$tieba[0])[1],9)[1];


    ?>
</body>
</html>