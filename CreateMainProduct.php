<div class="content">
<div class="container-fluid">
<div class="d-lg-flex flex-row justify-content-between mb-4">
<div class="mb-4 mb-lg-0">
<span class="font-kanit fs-sm"><a href="/Product/list?"><i class="fal fa-chevron-left fs-xs mr-1"></i> สินค้า</a></span>
<h1 class="title-page">
เพิ่มสินค้าใหม่
</h1>
<span class="font-kanit"></span>
</div>
<div class=""></div>
</div>
<div class="box-white pl-xl-7 pr-xl-7">
<div class="row pl-xl-7 pr-xl-7">
<div class="col-md-6">
<fieldset>
<legend>
<span class="fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-sliders-h-square fa-stack-1x fa-inverse"></i>
</span>รายละเอียดสินค้า
</legend>
<div class="form-group" id="tour-product-code">
<div class="row">
<label for="" class="col-sm-3"><span id="codename">รหัสสินค้า</span></label>
<div class="col-sm-9">
<input type="text" class="form-control form-text wf-200" value="P0001" id="code" maxlength='128' /><span id="codearea" style="display: none;"></span>
</div>
</div>
</div>
<div class="form-group" id="tour-product-name">
<div class="row">
<label for="" class="col-sm-3">ชื่อสินค้า<span class="required-field">*</span></label>
<div class="col-sm-9">
<input type="text" class="form-control form-text" id="addproductname" maxlength='256' onkeyup="setNormalTextbox(this.id);" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="categoryid" class="col-sm-3">หมวดหมู่</label>
<div class="col-sm-9">
<select id="categoryid" class="form-control form-text form-select">
<option value="0">ไม่มีหมวดหมู่</option>
</select>
<a class="d-block mt-1" href='javascript:openAddCategory();'>+เพิ่มหมวดหมู่</a>
</div>
</div>
</div>
<div class="form-group" id="tour-product-unit">
<div class="row">
<label for="unittext" class="col-sm-3">หน่วย</label>
<div class="col-sm-9">
<div class="typeahead__container wf-200">
<div class="typeahead__field">
<span class="typeahead__query">
<input class="js-typeahead-input uniitexttags form-text" name="q" type="search" id="unittext" maxlength='128' placeholder="ตัวอย่าง: ชิ้น, ตัว" value="" autofocus autocomplete="off">
</span>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="tagadd" class="col-sm-3">Tag สินค้า</label>
<div class="col-sm-9">
<input type="text" id="tagadd" value="" />
<input type="hidden" id="addbarcode" value="" />
</div>
</div>
</div>
</fieldset>
<fieldset>
<legend>
<span class="fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-money-bill fa-stack-1x fa-inverse"></i>
</span>ราคาสินค้า
</legend>
<div class="form-group" id="tour-product-purchaseprice">
<div class="row">
 <label for="purchaseprice" class="col-sm-3">ราคาซื้อ</label>
<div class="col-sm-9">
<input type="text" class="form-control form-text wf-200" id="purchaseprice" placeholder="0" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
</div>
</div>
<div class="form-group" id="tour-product-sellprice">
<div class="row">
<label for="sellprice" class="col-sm-3">ราคาขาย</label>
<div class="col-sm-9">
<input type="text" class="form-control form-text wf-200" id="sellprice" placeholder="0" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
</div>
</div>
</fieldset>
<fieldset class="productarea">
<legend>
<span class="fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-shipping-fast fa-stack-1x fa-inverse"></i>
</span>ข้อมูลขนส่ง
</legend>
<div class="form-group" id="tour-product-weight">
<div class="row">
<label for="weight" class="col-sm-3">น้ำหนัก (กรัม)</label>
<div class="col-sm-9">
<input type="text" class="form-control form-text wf-150" id="weight" placeholder="0" maxlength='32' onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="width" class="col-md-3">ขนาด (กว้าง ยาว สูง) (ซม.)</label>
<div class="col-sm-9">
<div class="row">
<div class="col-sm-4">
<input type="text" class="form-control form-text mb-2 mb-md-2" id="width" maxlength='32' placeholder="กว้าง" onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
<div class="col-sm-4">
<input type="text" class="form-control form-text mb-2 mb-md-2" id="length" maxlength='32' placeholder="ยาว" onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
<div class="col-sm-4">
<input type="text" class="form-control form-text mb-2 mb-md-2" id="height" maxlength='32' placeholder="สูง" onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
</div>
</div>
 </div>
</div>
</fieldset>
</div>
<div class="col-md-6 pl-lg-7" style="position:sticky;top:40px;">
<div id="picturearea">
<div class="d-flex flex-wrap form-group mt-lg-7">
<div id="file-input-wrap-id" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปสินค้าหลัก</div>
</div>
<div id="file-input-wrap-id-1" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-1" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-1" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 1</div>
</div>
<div id="file-input-wrap-id-2" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-2" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-2" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 2</div>
</div>
<div id="file-input-wrap-id-3" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-3" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-3" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 3</div>
</div>
<div id="file-input-wrap-id-4" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-4" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-4" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 4</div>
</div>
<div id="file-input-wrap-id-5" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-5" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-5" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 5</div>
</div>
<div id="file-input-wrap-id-6" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-6" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-6" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 6</div>
</div>
<div id="file-input-wrap-id-7" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-7" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-7" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 7</div>
</div>
<div id="file-input-wrap-id-8" class="file-input-wrap">
<label class="file-input">
<input type="file" name="file" id="fInsertFile-8" class="file-input__file" value="เลือกไฟล์" accept="image/*" onchange="readURL(this);">
<span id="input-image-8" class="file-input__label">
<i class="d-block fal fa-plus-circle file-input__icon"></i>
<span class="file-input__text"></span>
</span>
</label>
<div class="fs-xs text-center bg-grey-50 grey-400 font-kanit">รูปภาพ 8</div>
</div>
</div>
</div>
<fieldset style="display:none;">
<legend>
<span class="fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-sliders-h-square fa-stack-1x fa-inverse"></i>
</span>ตั้งค่า
</legend>
<div class="form-group mb-0">
<div class="">
<div class="">
<div style="display:none;">
<div class="d-flex">
<div class="mr-3">
<input type="checkbox" id="haveserialno">
</div>
<div>
<label for="haveserialno">Serial Number</label>
</div>
</div>
</div>
<div style="display:none;">
<div class="d-flex">
<div class="mr-3">
<input type="checkbox" id="isexpirylot">
</div>
<div>
<label for="isexpirylot">ล็อต/วันหมดอายุ</label>
</div>
</div>
</div>
<div style="display:none;">
<div class="d-flex">
<div class="mr-3">
<input type="checkbox" id="freeproduct">
</div>
<div>
<label for="freeproduct">สินค้าแถม</label>
</div>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
<input type="hidden" name="varianttype" id="varianttype" value="0" />
<div class="stockarea box-white pl-xl-7 pr-xl-7">
<div class="pl-xl-7 pr-xl-7">
<fieldset class=" mb-0">
<legend>
<span class="fa-stack fa-2x zort-icon fs-sm">
<i class="fas fa-circle fa-stack-2x"></i>
<i class="fal fa-sliders-h-square fa-stack-1x fa-inverse"></i>
</span>คลังสินค้า
</legend>
<div class="row">
<div class="col-sm-6">
<div class="" id="tour-product-stock">
<div class="form-group">
<div class="row">
<label for="startstock" class="col-sm-3">ยอดยกมา</label>
<div class="col-sm-9">
<input type="text" class="form-control form-text " id="startstock" value="" placeholder="0" onfocus="removeComma(this.id);" onblur="isMoney(this.id)" />
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<label for="addwarehouseid" class="col-sm-3">สินค้าเข้าที่</label>
<div class="col-sm-9">
<select id="addwarehouseid" class="form-control form-text form-select">
<option value="293860">คลังสินค้าหลัก</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</fieldset>
</div>
</div>
</div>
<div class="d-lg-flex flex-row justify-content-between mb-4">
<div>
<a href="/Product/list?" class="button button-link rounded">กลับ</a>
</div>
<div id="tour_add">
<button type="button" class="button button-default rounded" onclick="AddProduct(1);">บันทึก + สร้างใหม่</button>
<button type="button" class="button button-primary rounded wf-150" onclick="AddProduct(0);">บันทึก</button>
</div>
</div>
</div>
<script>