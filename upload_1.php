<?php
    $filename="image.png";//Ҫ���ɵ�ͼƬ����
     
    $xmlstr =  $GLOBALS[HTTP_RAW_POST_DATA];
    if(empty($xmlstr)) {
        $xmlstr = file_get_contents('php://input');
    }
     
    $jpg = $xmlstr;//�õ�post�����Ķ�����ԭʼ����
    $file = fopen("gansu/".$filename,"w");//���ļ�׼��д��
    fwrite($file,$jpg);//д��
    fclose($file);//�ر�
    
    echo "ok~~~";
?>