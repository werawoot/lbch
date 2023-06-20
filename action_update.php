<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
// print_r($data);
$u_fullname = $data['u_fullname'] ?? '';
$u_level = $data['u_level'] ?? '';

$output_dir = 'images'; // folder

if (isset($_FILES["u_image"]) && isset($_FILES["u_image"]["name"])) {
    if (!is_array($_FILES["u_image"]["name"])) {
        $exts = explode('.', $_FILES["u_image"]["name"]);
        $ext = $exts[count($exts) - 1]; // get ext image ex. jpeg, jpg, png
        $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
        if (file_exists($output_dir . $fileName)) {
            $fileName = $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
        }
        $u_image = $fileName; // set image value
        move_uploaded_file($_FILES["u_image"]["tmp_name"], $output_dir . '/' . $fileName);

        $strSQL = "UPDATE user
            SET 
            u_fullname = '$u_fullname',
            u_level = '$u_level',
            u_image = '$u_image'
            WHERE u_id = $u_id";
    } else {
        $strSQL = "UPDATE user SET 
            u_fullname = '$u_fullname',
            u_level = '$u_level'
            WHERE u_id = $u_id";
    }
} else {
    $strSQL = "UPDATE user SET 
        u_fullname = '$u_fullname',
        u_level = '$u_level'
        WHERE u_id = $u_id";
}

$objQuery = mysqli_query($objCon, $strSQL);
if ($objQuery) {
    echo '<script>alert("บันทึกการแก้ไขแล้ว");window.location="index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด!!");window.location="update.php?u_id=' . $u_id . '";</script>';
}

function randomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
