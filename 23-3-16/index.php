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
            $.cookie("ck1","yifeng");
        })
    </script>
</head>
<body>
    <form enctype="multipart/form-data" action="aaa.php" method="POST">
        <input type="text" name="text1">
        <br>
        <input type="file" name="file1">
        <br>
        <input type="submit">
    </form>

    <?php

        var_dump($_COOKIE);

    ?>

</body>
</html>