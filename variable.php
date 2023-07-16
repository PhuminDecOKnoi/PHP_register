<?php
    include("functions.php"); # การนำไฟล์ฟังก์ชันมาใช้งาน (Function.php)

    $_get_title_page = "Variable"; # การกำหนดชื่อเพจ
    set_header($_get_title_page); # การรับค่า HTML header มาใช้งาน

    $url = "http://www.githup.com/phumindecoknoi";
    $status = false;
    if(isset($status) && $status !== true)
        echo $url;

    $a = null;
    $b = 0;

    if($a == $b) echo "เกิดข้อผิดพลาด" ;

    if(empty($a))
        echo "a is set value";

    else
        echo "a is not set value";
    
    # 

    

    include("footer.php");
?>