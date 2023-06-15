<?php
include_once('./function.php');
$objCon = connectDB();

$u_id = (int) $_GET['u_id'];
$strSQL = "SELECT * FROM user WHERE u_id = $u_id";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
if ($objResult == null) {
    echo '<script>alert("ไม่พบข้อมูล!!");window.location="index.php";</script>';
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
            <!-- ฟอร์มเพิ่มข้อมูล -->
            <form action="action_update.php" id="form_update" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row mt-4">
                            <!-- แถวที่ 1 -->
                            <div class="col-md-4 mt-3">
                                <label for="c_prefix" class="form-label">เพศ</label>
                                <input type="text" id="c_prefix" list="list_prefix" name="c_prefix" class="form-control" value="<?php echo $objResult['u_sex']; ?>">
                                <datalist id="list_prefix">
                                    <option value="ชาย">
                                    <option value="หญิง">
                                    <option value="อื่นๆ">
                                </datalist>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="u_firstname" class="form-label">ชื่อ</label>
                                <input type="text" id="u_firstname" name="u_firstname" class="form-control" value="<?php echo $objResult['u_fristname']; ?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="u_lastname" class="form-label">สกุล</label>
                                <input type="text" id="u_lastname" name="u_lastname" class="form-control" value="<?php echo $objResult['u_lastname']; ?>">
                            </div>
                            <!-- แถวที่ 2 -->
                            
                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">บันทึกการแก้ไข</button>
                                <button type="reset" class="btn btn-light btn-lg">ล้างค่า</button>
                            </div>
                        </div>
                    </div>
                    <duv class="col-md-3">
                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-4">
                            <div class="col-md-12 mt-3">
                                <label for="c_image" class="form-label">รูปภาพ</label>
                                <input class="form-control" id="c_image" name="c_image" type="file" onchange="loadFile(event)">
                            </div>
                            <div class="col-md-12 mt-3">
                                <?php if ($objResult['u_image'] != '') { ?>
                                    <img src="./images/<?php echo $objResult['u_image']; ?>" class="img-thumbnail" id="c_image_preview" />
                                <?php } else { ?>
                                    <img src="./images/noimg.png" class="img-thumbnail" id="c_image_preview" />
                                <?php } ?>
                            </div>
                        </div>
                    </duv>
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