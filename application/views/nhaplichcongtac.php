<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
  <script src="//code.angularjs.org/snapshot/angular.min.js"></script>
    <title>NHẬP LỊCH CÔNG TÁC</title>
  </head>
  <body>

  <div class="container"><marquee><h3 class="text-xl-center">SỞ TÀI NGUYÊN VÀ MÔI TRƯỜNG TỈNH QUẢNG NGÃI - TRUNG TÂM CÔNG NGHỆ THÔNG TIN</h3></marquee><br><h3 class="text-xl-center">NHẬP LỊCH CÔNG TÁC</h3></div>
  
  <div class="container themCongtac">
      <form action="nhaplichcongtac/themlichcongtac" method="post" enctype="multidata/form-data">
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Ngày</label>
          <input name="ngay" type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input">                 
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Giờ</label>
          <input name="gio" type="time" placeholder="HH:mm" class="form-control" id="formGroupExampleInput" >                 
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Nội dung</label>
          <input name="noidung" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập nội dung ...">          
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Dự họp</label>
          <input name="duhop" type="text" class="form-control" id="formGroupExampleInput" placeholder="Cá nhân, đơn vị đi họp ...">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Chủ trì</label>
          <input name="chutri" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cá nhân, đơn vị chủ trì ...">          
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Địa điểm</label>
          <input name="diadiem" type="text" class="form-control" id="formGroupExampleInput" placeholder="Địa điểm họp ...">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">CQCP</label>
          <input name="cqcp" type="text" class="form-control" id="formGroupExampleInput" placeholder="CQCP ...">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Ghi chú</label>
          <input name="ghichu" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ghi chú ...">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Phục vụ xe</label>
          <input name="phucvuxe" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phục vụ xe ...">          
        </fieldset>
        <input type="submit" class="btn btn-success btn-block" value="Thêm mới">  
      </form>
  </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>