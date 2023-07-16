<?php

    include("function.php"); # การนำไฟล์ฟังก์ชันมาใช้งาน (Function.php)

    $_get_title_page = "Register Page"; # การกำหนดชื่อเพจ
    set_header($_get_title_page); # การรับค่า HTML header มาใช้งาน
?>
<h2>Register Form</h2>
<form id="f1" action = "get_register.php" Method = "post">
    <div>
        <label>User Name</label>
        <input type="text" name="user_name" value="">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" value="">
    </div>
    <div>
        <label>re-Password</label>
        <input type="password" name="re_password" value="">
    </div>
    <div>
        <label>Age</label>
        <input type="text" name="age" value=""></div>
    <div>
        <label>Gender</label>
        <label>Male</label>
            <input type="radio" name="gender" value="Male" checked>
        <label>Female</label>
            <input type="radio" name="gender" value="Female">
    </div>
    <div>
        <label>Mobile</label><input type="text" name="mobile"  value="">
    </div>
    <div>
        <input type="submit" form="f1">
        <input type="reset" form="f1">
    </div>
</form>
<?php
    set_footer(); # การรับค่า HTML footer มาใช้งาน
?>
