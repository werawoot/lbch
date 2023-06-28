<?php
$id = $_POST["u_id"];

$sql = "SELECT * FROM user WHERE u_id = '" . $id . "'";
$query = mysqli_query($objCon, $sql);
$objResult = mysqli_fetch_array($query, MYSQLI_ASSOC);


if (isset($_POST["submit"])) {
  $sql_2 = "UPDATE user SET u_fullname = '" . $_POST['u_fullname'] . "', u_username = '" . $_POST['u_username'] . "',u_level = '" . $_POST['u_level'] . "',u_image = '" . $_POST['u_image'] . "' WHERE u_id = '" . $id . "'";
  $query_2 = mysqli_query($objCon, $sql_2);

  header("location:manageuser.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="field item form-group">
  <label class="col-form-label col-md-3 col-sm-3  label-align"><h4>ระดับผู้ใช้</h4></label>
    <div class="col-md-6 col-sm-9 ">
     <select class="form-control" name ="u_level">
           <option value="user" <?php if ($objResult["u_level"] == 'user') {echo " selected";} ?>>สมาชิก</option>
            <option value="administrator" <?php if ($objResult["u_level"] == 'administrator') {echo " selected";} ?>>ผู้ดูแลระบบ</option>
     </select>
      </div>
      </div>
</body>
</html>




