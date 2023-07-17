<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
// print_r($data);
$u_fullname = $data['u_fullname'];
$u_username = $data['u_username'];
$u_level = $data['u_level'];
$u_image = 'u_image'; // default value

$output_dir = 'images'; // folder
if (!is_array($_FILES["u_image"]["name"])) {
    $exts = explode('.', $_FILES["u_image"]["name"]);
    $ext = $exts[count($exts) - 1]; // get ext image ex. jpeg, jpg, png
    $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    if (file_exists($output_dir . $fileName)) {
        $fileName = $fileName = date("YmdHis") . '_' . randomString() . "." . $ext;
    }
    $u_image = $fileName; // set image value
    @move_uploaded_file($_FILES["u_image"]["tmp_name"], $output_dir . '/' . $fileName);
}

$strSQL = "INSERT INTO 
contact(
    `u_fullname`,
    `u_username`, 
    `u_level`, 
    -- `u_image`, 
) VALUES (
    '$u_fullname', 
    '$u_username', 
    '$u_level', 
    -- '$u_image', 
)";

$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>alert("เพิ่มข้อมูลแล้ว");window.location="index.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="create.php";</script>';
}

<?php
require_once('../conn/conn.php');

session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
  header("location: ../login.php"); // redirect ไปยังหน้า login.php
  exit;
}

$user = $_SESSION['user_login'];
if ($user['level'] != 'administrator') {
  echo '<script>alert("สำหรับผู้ดูแลระบบเท่านั้น");window.location="../index.php";</script>';
  exit;
}

$sql = "INSERT INTO user (u_fullname,u_username,u_password,u_level) VALUES ('".$_POST["u_fullname"]."','".$_POST["u_username"]."','".md5($_POST["u_password"])."','".$_POST["u_level"]."')";
$query = mysqli_query($objCon,$sql);

header("location:user.php?add=pass");
exit();

mysqli_close($objCon);
?>
