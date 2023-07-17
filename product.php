<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div class="bg-light p-10 rounded mt-0">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div>
                <?php if ($user['level'] == 'administrator') { // แสดงลิงค์ไปยังหน้าผู้ดูแลระบบเมื่อผู้ใช้เป็นแอดมิน ?>
                    <a href="admin.php" class="btn btn-lg btn-warning">หน้าสำหรับผู้ดูแลระบบ</a>
                <?php } ?>
            </div>
                
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">  <h5>สวัสดี <?php echo $user['fullname']; ?></h5> </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <h5>สวัสดี <?php echo $user['fullname']; ?></h5> <h4>ระดับผู้ใช้ <?php echo $user['level']; ?></h4>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Profile.php">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout_action.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-column"></i></div>
                                รายงาน
                            </a>
                            <a class="nav-link" href="product.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                                สินค้า
                            </a>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                ตั้งค่า
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        ตั้งค่าบัญชี
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">เข้าสู่ระบบ</a>
                                            <a class="nav-link" href="register.html">สมัครสมาชิก</a>
                                            <a class="nav-link" href="password.html">ลืมรหัสผ่าน</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                          
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">สินค้า</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">จำนวนสินค้า</li>
                        </ol>
                        
                        </script>
<div class="content">
<div class="container-fluid">
<div class="d-lg-flex flex-row justify-content-between mb-4">
<div class="mb-4 mb-lg-0">
<span class="font-kanit fs-sm">
</span>
<h1 class="title-page">

</h1>
<span class="font-kanit" id="tabledesc">
</span>
<span class="font-kanit">
<span class="fw-300">|</span>
<a href="/Product/AddPicturelist?">จัดการรูปภาพสินค้า</a>
</span>
<span class="font-kanit" id="tabledesc">
</span>
<span class="font-kanit">
<span class="fw-300">|</span>
<a href="/Product/GetEditCostProduct">ปรับต้นทุนสินค้า</a>
</span>
</div>
<div class="" id="addProductBtn">
<button type="button" class="button button-secondary button-round" onclick="openImportProduct();">นำเข้าไฟล์ (Excel)</button>
<button type="button" class="button button-primary button-round" onclick='javascript:window.location.href="CreateMainProduct.php";'>เพิ่มสินค้าใหม่</button>
</div>
</div>
<div class="search mb-4">
<div>
<div class="search-box mb-4">
<div class="form-text-icon d-inline-block mr-3">
<i class="fal fa-search"></i>
<label class="sr-only" for="search">ค้นหา</label>
<input type="text" class="form-control form-text rounded" id="quicksearchtext" placeholder="ค้นหา" maxlength="128" onkeypress="searchKeyPress(event);">
</div>
<a class="search-toggle" role="button" data-toggle="collapse" href="#searchAdvance" aria-expanded="false">ค้นหาขั้นสูง</a>
</div>
<div class="search-advance mb-4 collapse" id="searchAdvance">
<form class="">
<div class="search-advance__header">
<div class="d-flex flex-row justify-content-between align-items-center">
<h3 class="search-advance__title">ค้นหาขั้นสูง</h3>
<div class="">
<a class="button button-md" data-toggle="collapse" href="#searchAdvance">ปิด</a>
<input type="button" class="button button-default button-md" onclick="advanceSearch();" value="ค้นหา" />
</div>
</div>
</div>
<div class="search-advance__body">
<div>
<fieldset class="search-advance__group mb-0">
<legend class="search-advance__legend">
<span class="fa-stack fa-2x search-advance__icon">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-box fa-stack-1x fa-inverse"></i>
</span> ข้อมูล
 </legend>
<div class="row" style="display:none;">
<div class="col-sm-4">
<div class="form-group">
<label class="d-flex d-inline-flex mr-3">
<span class="mr-3"><input type="checkbox" name="producttype" value="0" checked /></span>
<span>สินค้า</span>
</label>
<label class="d-flex d-inline-flex mr-3">
<span class="mr-3"><input type="checkbox" name="producttype" value="1" checked /></span>
<span>บริการ</span>
</label>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<input type="text" class="form-control form-text" placeholder="รหัสสินค้า" id="searchcode" maxlength='32' />
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<input type="text" class="form-control form-text" placeholder="ชื่อสินค้า" id="searchname" maxlength='128' />
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="sale-price" class="control-label">ราคาขาย</label>
<input type="text" class="form-control form-text" placeholder="0" id="fromsellprice" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id);" />
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="tosellprice" class="control-label">&nbsp;</label>
<input type="text" class="form-control form-text" placeholder="100,000" id="tosellprice" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id);" />
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="buy-price" class="control-label">ราคาซื้อ</label>
<input type="text" class="form-control form-text" id="frompurchaseprice" placeholder="0" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id);" />
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
 <label for="topurchaseprice" class="control-label">&nbsp;</label>
<input type="text" class="form-control form-text" id="topurchaseprice" placeholder="100,000" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id);" />
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="warehouse" class="control-label">คลังสินค้า</label>
<div class="">
<select class="form-control form-select form-text -half" id="searchwarehouseid">
<option value="0">ทั้งหมด</option>
<option value="293860">คลังสินค้าหลัก</option>
</select>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="form-group">
<label for="searchcategoryid" class="control-label">หมวดหมู่</label>
<select class="form-control form-select form-text -half" id="searchcategoryid">
<option value="0">ทั้งหมด</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label for="tags" class="control-label">Tag สินค้า</label>
<input type="text" id="tagsearch">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<label class="d-flex">
<span class="mr-3"><input type="checkbox" id="checkshowarchive" value="1" /></span>
<span>แสดงสินค้าที่ถูกลบ</span>
</label>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</form>
</div>
</div>
<div>
</div>
</div>
<div class="d-flex flex-row justify-content-between align-items-center">
<div>
<div id="normalfilter" style="">
<div class="z-filter" id="checkboxrecordarea0" style="display:none;">
<div class="btn-group">
 <button type="button" class="button button-default button-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="checkboxrecordarea1" style="display:none;"><small><span id="checkboxrecordareacount"></span></small></button>
<span class="sr-only">Toggle Dropdown</span>
<ul class="dropdown-menu sub-nav">
<li class="container-fluid" style="width: 200px"><small><span id="checkboxrecordarea2"></span></small></li>
</ul>
</div>
<button type="submit" class="button button-default button-md" onclick="doOpenMultiPDF();" id="checkboxrecordarea3"><i class="fal fa-print mr-1"></i>พิมพ์เอกสาร</button>
<div class="btn-group" id="checkboxrecordarea4">
<button type="button" class="button button-default button-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">คำสั่ง <i class="far fa-angle-down"></i></button>
<span class="sr-only">Toggle Dropdown</span>
<ul class="dropdown-menu sub-nav">
<li><a href='javascript:doMultiBuy(0);'>ซื้อสินค้า</a></li>
<li><a href='javascript:doMultiSell(0);'>ขายสินค้า</a></li>
<li><a href='javascript:doMultiTransfer(0);'>โอนสินค้า</a></li>
<li role='separator' class='divider'></li>
<li><a href='javascript:doMultiFavProduct();'>ปักหมุดไว้บนสุด</a></li>
<li><a href='javascript:openCategoryPopup();'>จัดหมวดหมู่</a></li>
<li role='separator' class='divider'></li>
<li><a href='javascript:doMultiActiveProduct();'>เปิดใช้งาน</a></li>
<li><a href='javascript:doMultiDisableProduct();'>ปิดใช้งาน</a></li>
<li role='separator' class='divider'></li>
<li><a href='javascript:doMultiArchiveProduct();'>ลบสินค้า</a></li>
<li role='separator' class='divider'></li>
<li><a href='javascript:openStockCard();'>Export Stock Card ไฟล์ Excel</a></li>
<li><a href='javascript:exportStockCostList();'>Export ต้นทุนสินค้า ไฟล์ Excel</a></li>
</ul>
</div>
</div>
</div>
<div id="picturefilter" style="display:none;">
<div class="z-filter" id="checkboxpicrecordarea0" style="display:none;">
<div class="btn-group">
<button type="button" class="button button-default button-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="checkboxpicrecordarea1" style="display:none;"><small><span id="checkboxpicrecordareacount"></span></small></button>
<span class="sr-only">Toggle Dropdown</span>
<ul class="dropdown-menu sub-nav">
<li class="container-fluid" style="width: 200px"><small><span id="checkboxpicrecordarea2"></span></small></li>
</ul>
</div>
<div class="btn-group" id="checkboxpicrecordarea4">
<button type="button" class="button button-default button-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">คำสั่ง <i class="far fa-angle-down"></i></button>
<span class="sr-only">Toggle Dropdown</span>
<ul class="dropdown-menu sub-nav">
<li><a href='javascript:doMultiBuy(1);'>ซื้อสินค้า</a></li>
<li><a href='javascript:doMultiSell(1);'>ขายสินค้า</a></li>
<li><a href='javascript:doMultiTransfer(1);'>โอนสินค้า</a></li>
</ul>
</div>
</div>
</div>
</div>
<div>
<div class="view-type text-right">
<span id="changepicturemode" style="">
<a href="#" class="view-type__item active mr-2"><i class="fal fa-list" title="โหมดตารางสินค้า"></i></a>
<a href='javascript:changepreviewmode(1);' class="view-type__item"><i class="fas fa-th" title="โหมดรูปภาพสินค้า"></i></a>
</span>
<span id="changenormalmode" style="display:none;">
<a href='javascript:changepreviewmode(0);' class="view-type__item mr-2"><i class="fal fa-list" title="โหมดตารางสินค้า"></i></a>
<a href="#" class="view-type__item active"><i class="fas fa-th" title="โหมดรูปภาพสินค้า"></i></a>
</span>
</div>
</div>
</div>
<div id="ProductTable">
<script src="/Scripts/displayimage.js" type="text/javascript"></script>
<div class="">
<div class="tabsbar">
<ul class="nav nav-tabs">
<li id="allproduct" class="active"><a href='javascript:getProduct(0);'>ทั้งหมด</a></li>
<li id="activeproduct" class=""><a href='javascript:getProduct(1);'>เปิดใช้งาน</a></li>
<li id="disableproduct" class=""><a href='javascript:getProduct(2);'>ปิดใช้งาน</a></li>
</ul>
</div>
<div id="normaltable">
<div class="table-view">
<div class="t-responsive">
<table class="table zort-table zort-table--product ">
<thead>
<tr>
<th class="index">#</th>
<th class="chk">
<input type="checkbox" id="allcheck" value="" aria-label="..." class="check-all-item" onchange="allchk()" />
</th>
<th class="id"><a href="/Product/list?&page=1&mysort=code&sortdir=ASC">รหัส</a></th>
<th class="name"><a href="/Product/list?&page=1&mysort=name&sortdir=ASC">ชื่อสินค้า</a></th>
<th class="buy text-right"><a href="/Product/list?&page=1&mysort=purchaseprice&sortdir=ASC">ราคาซื้อ</a></th>
<th class="sell text-right"><a href="/Product/list?&page=1&mysort=sellprice&sortdir=ASC">ราคาขาย</a></th>
<th class="remain text-right"><a href="/Product/list?&page=1&mysort=stock&sortdir=ASC">คงเหลือ</a></th>
<th class="ready text-right"><a href="/Product/list?&page=1&mysort=availablestock&sortdir=ASC">พร้อมขาย</a></th>
<th class="action text-right">
<button class="button button-default button-sm rounded-sm p-1" style="margin:0;font-size:10px;" onclick="doconfirmremovecookiesort();" data-toggle="tooltip" data-placement="top" title="" data-original-title="รีเซ็ตการเรียงลำดับข้อมูล">
<i class="fas fa-sort-amount-down-alt"></i>
<i class="fas fa-times-circle fa-xs" style="display:inline-block;margin:0px 0 0 -8px;border: 1px solid #fff;border-radius: 100%;"></i>
</button>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div class="pt-5 pb-5 text-center"><img src="/Content/pics/icon-folder.svg" class="d-block mb-4 mt-2 m-auto" /><a href='javascript:openAddProduct();' class="d-block font-kanit">เพิ่มสินค้าใหม่ได้ที่นี่</a><span class="fs-sm grey-400">บันทึกข้อมูลสินค้า และระบุจำนวนสินค้าในสต๊อก</span></div>
</div>
</div>
</div>
</div>
<div class="d-lg-flex flex-row justify-content-between mb-4">
<div class="">
<div class="pager-navigation mb-2 mb-lg-0">
&nbsp; </div>
</div>
<div class="">
<form action="/Product/list" method="post"> <div class="pager-view" id="dropdown">
<span class="font-kanit fs-sm fw-300">
จำนวน 0 รายการ |
</span>
<label for="PageSize" class="font-kanit fs-sm fw-300 mb-0">จำนวนต่อหน้า </label>
<select class="form-control select-pager" data-val="true" data-val-number="The field จำนวนรายการต่อหน้า  must be a number." data-val-required="The จำนวนรายการต่อหน้า  field is required." id="PageSize" name="PageSize" onchange="this.form.submit();">
<option value="10">10</option>
<option value="20" selected>20</option>
<option value="50">50</option>
<option value="100">100</option>
</select>
</div>
</form> </div>
</div>
<button type="submit" class="button button-default button-sm" onclick="exportfile();"><i class="fal fa-file-excel"></i> Export to Excel</button>

<script>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        </div>
    </div>
</body>

</html>