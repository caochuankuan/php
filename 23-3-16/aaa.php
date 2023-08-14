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

    echo $_POST["text1"];
    echo "<br>";
    echo ($_FILES['file1']['name']);
    echo "<br>";
    echo ($_FILES['file1']['tmp_name']);
    move_uploaded_file($_FILES['file1']['tmp_name'],"./uploads/".$_FILES['file1']['name']);
    
    ?>
</body>
</html>