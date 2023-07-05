<?php
include_once('./function.php');
$objCon = connectDB();

$id = $_GET["u_ id"];

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
<!doctype html>
<html lang="th" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แก้ไขข้อมูล</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">แก้ไขข้อมูล</h1>
            <div class="mt-4">
                <a href="index.php" class="btn btn-warning">รายการข้อมูล</a>
            </div>
            <form method = "post">
                    <!-- โปรไฟล์ -->
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">
                        <h4>ชื่อ</h4><span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6">
                       <input type="text" class="form-control" name="u_fullname" value="<?php echo isset($objResult['u_fullname']) ? $objResult['u_fullname'] : ''; ?>" required />
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">
                        <h4>ID</h4><span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="u_username" value="<?php echo $objResult['u_username']; ?>" required />
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">
                        <h4>ระดับผู้ใช้</h4>
                      </label>
                      <div class="col-md-6 col-sm-9 ">
                        <select class="form-control" name="u_level">
                          <option value="user" <?php if ($objResult["u_level"] == 'user') {
                                                  echo " selected";
                                                } ?>>สมาชิก</option>
                          <option value="administrator" <?php if ($objResult["u_level"] == 'administrator') {
                                                          echo " selected";
                                                        } ?>>ผู้ดูแลระบบ</option>
                        </select>
                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <!-- ปุ่มบันทึก -->
                                <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="submitForm()" name = "submit">บันทึกการแก้ไข</button>
                                <button type="reset" class="btn btn-light btn-lg">ล้างค่า</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                            <div class="col-md-12 mt-3">
                                <!-- <?php if ($objResult['c_image'] != '') { ?> -->
                                    <!-- <img src="./images/<?php echo $objResult['c_image']; ?>" class="img-thumbnail" id="c_image_preview" />
                                <?php } else { ?>
                                    <img src="./images/noimg.png" class="img-thumbnail" id="c_image_preview" />
                                <?php } ?> -->
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">&copy; 2021</span>
        </div>
    </footer>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('c_image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>
