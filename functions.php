<?php
    # วัตถุประสงค์
    # การสร้างงานฟังก์ชันเบื้องต้นใน PHP
    # การนำฟังก์ชันไปใช้งานใน PHP
    # เพิ่มลงใน Github.com

# function สำหรับการกำหนด title page
function set_title_page($_set_title_Name){
    $_get_title_page = $_set_title_Name; 
    return $_get_title_page;
}

# function สำหรับ inculde file= header.php
function set_header($_set_title_Name){
    $_get_title_page = $_set_title_Name;
    $_get_header = include("header.php");
    return $_get_header;
}

# function สำหรับ inculde file= footer.php
function set_footer(){
    $_get_footer = include("footer.php");
    return $_get_footer;
}

# function สำหรับ refirect ไปยัง file= register.php
function redirect_register_page(){
    $_redir_page = header("location:register.php");
    return $_redir_page;
}

# function สำหรับตรวจสอบ error
function alert_err($_err){
    if($_err != "" || !empty($_err)){
        return $_err;
    }
}

# function สำหรับ refirect ไปยัง file= register.php เมื่อไม่พบข้อมูล User
function link_backToRegister(){
    $_set_alink='<a href="register.php"> Back to register page </a>';
    return $_set_alink;
}
?>
