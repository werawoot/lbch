<!doctype html>
<html lang="th" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เพิ่มข้อมูล</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">เพิ่มข้อมูล</h1>
            <div class="mt-4">
                <a href="index.php" class="btn btn-warning">รายการข้อมูล</a>
            </div>
            <!-- ฟอร์มเพิ่มข้อมูล -->
            <form action="action_create.php" id="form_create" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-md-9">
                        <!-- ข้อมูลเนื้อหา -->
                              <!-- แถวที่ 1 -->
                        <div class="row mt-4">
                            <div class="col-md-4 mt-3">
                                <label for="u_fullname" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" id="u_fullname" name="u_fullname" class="form-control" required>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="u_username" class="form-label">สกุล <span class="text-danger">*</span></label>
                                <input type="text" id="u_username" name="u_username" class="form-control" required>
                            </div>
                            <!-- แถวที่ 2 -->
                                  <div class="col-md-4 mt-3">
                                <label for="u_level" class="form-label"> level <span class="text-danger">*</span></label>
                                <input type="text" id="u_level" list="list_prefix" name="u_level" class="form-control" required>
                                <datalist id="list_prefix">
                                    <option value="admin">
                                    <option value="user">
                                </datalist>
                            </div>
                            <div class="col-md-4 mt-3">
                            </div>
                            <div class="col-md-4 mt-3">
                            </div>
                            <!-- แถวที่ 3 -->
                            <div class="col-md-12 mt-3">
                                <label for="c_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea name="c_detail" id="c_detail" class="form-control" rows="4" required></textarea>
                            </div>
                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="submitForm()" name = "submit">บันทึก</button>
                                <button type="reset" class="btn btn-light btn-lg">ล้างค่า</button>
                            </div>
                        </div>
                    </div>
                    <duv class="col-md-3">
                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-4">
                            <div class="col-md-12 mt-3">
                                <label for="u_image" class="form-label">รูปภาพ</label>
                                <input class="form-control" id="u_image" name="u_image" type="file" onchange="loadFile(event)">
                            </div>
                            <div class="col-md-12 mt-3">
                                <img src="./images/noimg.png" class="img-thumbnail" id="u_image_preview" />
                            </div>
                        </div>
                    </duv>
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
                var output = document.getElementById('u_image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>

</html>