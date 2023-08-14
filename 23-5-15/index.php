<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input class="download" type="button" value="下载1" dl="1.zip">
    <input class="download" type="button" value="下载2" dl="2.xlsx">
    <script src="jquery-3.6.0.js"></script>
    <script>
        $(".download").click(function(){
            var str = $(this).attr("dl");
            $(location).attr("href","download.php?dl="+str);
        });
    </script>
</body>
</html>