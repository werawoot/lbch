<?php
    include_once('./function.php');
    $objCon = connectDB();
    $u_id = (int) $_GET['u_id'];

    $strSQL = "DELETE FROM php_login WHERE u_id = $u_id";
    $strSQL = "UPDATE php_login SET u_level = 0 WHERE u_id = $u_id";
    $objQuery = mysqli_query($objCon, $strSQL);
    if($objQuery) {
        echo '<script>alert("ลบข้อมูลแล้ว");window.location="manageuser.php";</script>';
    } else {
        echo '<script>alert("พบข้อผิดพลาด");window.location="manageuser.php";</script>';
    }
?>