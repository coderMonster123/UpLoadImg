<?php
    $filename="image.png";//要生成的图片名字
     
    $xmlstr =  $GLOBALS[HTTP_RAW_POST_DATA];
    if(empty($xmlstr)) {
        $xmlstr = file_get_contents('php://input');
    }
     
    $jpg = $xmlstr;//得到post过来的二进制原始数据
    $file = fopen("gansu/".$filename,"w");//打开文件准备写入
    fwrite($file,$jpg);//写入
    fclose($file);//关闭
    
    echo "ok~~~";
?>