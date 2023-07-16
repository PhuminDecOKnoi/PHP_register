<?php
/*
    วัตถุประสงค์
    การสร้างงานฟังก์ชันเบื้องต้นใน PHP
    การนำฟังก์ชันไปใช้งานใน PHP
*/
function set_title_page($_set_title_Name){
    $_get_title_page = $_set_title_Name; 
    return $_get_title_page;
}

function set_header($_set_title_Name){
    $_get_title_page = $_set_title_Name;
    $_get_header = include("header.php");
    return $_get_header;
}

function set_footer(){
    $_get_footer = include("footer.php");
    return $_get_footer;
}

function redirect_register_page(){
    $_redir_page = header("location:register.php");
    return $_redir_page;
}
function alert_err($_err){
    if($_err != "" || !empty($_err)){
        return $_err;
    }
}
function link_backToRegister(){
    $_set_alink='<a href="register.php"> Back to register page </a>';
    return $_set_alink;
}
?>
