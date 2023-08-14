<?php
    header("Content-type:image/jpeg");
    $img=imagecreatefromjpeg("123.jpg");

    $textcolor=imagecolorallocate($img,0,0,0);
    $imgx = imagesx($img);
    $imgy = imagesy($img);
    // echo $imgx.",".$imgy;
    $position = imagettfbbox(30,0,"STXINGKA.TTF","广大纺院");
    // print_r($position);
    $tboxx =$position[2] - $position[0];
    $tboxy =$position[1] - $position[5];
    // echo $tboxx.",".$tboxy;
    $pianyiy = $position[1];

    imagettftext($img,30,0,$imgx-$tboxx,$imgy-$pianyiy,$textcolor,"STXINGKA.TTF","广大纺院");

    $watermark = imagecreatefrompng("闲云.png");
    $watermarkx =imagesx($watermark);
    $watermarky =imagesy($watermark);

    $watermark2 = imagecreatetruecolor(100,100);
    imagecopyresampled($watermark2,$watermark,0,0,0,0,100,100,$watermarkx,$watermarky);
    imagecopy($img,$watermark2,0,$imgy-100,0,0,100,100);

    imagejpeg($img);
    imagedestory($img);

?>