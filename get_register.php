<?php

    include("function.php"); # การนำไฟล์ฟังก์ชันมาใช้งาน (Function.php)
    $_err = "";
    $_get_title_page = "Get Register Page"; # การกำหนดชื่อเพจ
    set_header($_get_title_page); # การรับค่า HTML header มาใช้งาน

    $_user_name = $_POST["user_name"];
    $_password = $_POST["password"];
    $_re_password = $_POST["re_password"];
    $_age = $_POST["age"];
    $_gender = $_POST["gender"];
    $_mobile = $_POST["mobile"];

    # ตรวจสอบค่าตัวแปร ไม่้ให้ว่าง
    if(empty($_user_name)|| empty($_password)|| empty($_re_password)|| empty($_age)|| empty($_gender)|| empty($_mobile)){  
        redirect_register_page();
    }else{
        if($_password != $_re_password){
            $_err = "Password not incorrect";
            echo alert_err($_err).link_backToRegister();
        }
    }

    set_footer(); # การรับค่า HTML footer มาใช้งาน
?>
