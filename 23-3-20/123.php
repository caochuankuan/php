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

        // print_r($_REQUEST);
        // echo "<br>";
        // // print_r($_SERVER);
        // echo $_SERVER["REQUEST_METHOD"];
        // echo "<br>";
        $req;
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $req = $_GET;
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $req = $_POST;
        }
        echo "<br>";
        print_r($req);

        session_id("1234");
        session_start();
        $_SESSION["姓名"] =$req["tx1"];
        $_SESSION["学号"] =$req["nu1"];
        print_r($_SESSION);
        echo session_id();

    ?>

</body>
</html>