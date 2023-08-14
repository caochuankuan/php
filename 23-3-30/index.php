<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: red;
        }
        button:hover{
            border: 1px solid orangered;
        }
    </style>
</head>
<body>
    <button><a href="123.php/?login">登陆</a></button>
    <button><a href="123.php/?nologin">未登陆</a></button>
    <br><br>
    <button><a href="123.php/?ba=你好&zh=abcd">贴吧</a></button>
</body>
</html>