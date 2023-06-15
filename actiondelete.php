<?php
include_once('./function.php');
$objCon = connectDB();
$u_id = (int) $_GET['u_id'];

$strSQL = "DELETE FROM user WHERE u_id = $u_id";
$objQuery = mysqli_query($objCon, $strSQL);

if ($objQuery) {
    // สำเร็จ
    echo '<script>alert("ลบข้อมูลแล้ว");window.location="manageuser.php";</script>';
} else {
    // ไม่สำเร็จ
    echo '<script>alert("พบข้อผิดพลาด");window.location="manageuser.php";</script>';
}
?>
