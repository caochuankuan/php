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

    $ikun = array(
        "name" => "蔡徐坤",
        "sex" => "男",
        "like1" => "唱",
    );

    $ikun["like2"] = "跳";
    $ikun["like3"] = "rap";

    foreach($ikun as $key => $i) {
        echo "<div href='#' style='color:orange;'>$key ：$i</div>";
        echo "<br>";
    }

    echo $_SERVER["SERVER_PORT"];
    echo "<br>";
    echo $_SERVER["SCRIPT_FILENAME"];

    echo "<br>";
    echo "姓名：".$_GET['fn'];
    echo "<br>";
    echo "班级：".$_GET['fb']."班";

    ?>
</body>
</html>