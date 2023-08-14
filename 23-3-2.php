<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            <?php
                $a = 200;
                echo "width: ".$a."px;";
                echo "height: ".$a."px;";
                echo "background-color:green;";
            ?>
        }
    </style>
</head>
<body>
   <div class="box">
   <!-- <?php
    echo '今天是'.date("20y年m月d日 h:i:s");
   ?> -->
   </div>

   <span>
       <?php
       $name = 'caochuankuan';
       $$name = 'nan';//$caochuankuan = 'nan';
       echo $name;
       echo " ";
       echo $caochuankuan;
       echo "<br/>";
       $num1 = "1";
       $num2 = "66";
       echo var_dump($num1);
       echo "<br/>";
       echo var_dump($num2);
       echo "<br/>";
       echo (int)$num1+(int)$num2;
       ?>
   </span>

</body>
</html>