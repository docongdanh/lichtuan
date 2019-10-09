<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/styles.css">
  <style>
    .noidung
    {
      background: #0066FF;;
    }
  </style>
</head>
  <title>LỊCH CÔNG TÁC</title>
</head>
<body>                    
 
<div id="container">
  <h4 align="center">LỊCH CÔNG TÁC</h4>

      
    <?php foreach ($mangketqua as $key => $value): ?>
        
          <div class="container">
      <form action="../update" method="post" enctype="multidata/form-data">
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Id</label>
          <input name="id" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?= $value['id'] ?>">                 
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Ngày</label>
          <input name="ngay" type="date" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?= $value['ngay'] ?>">                 
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Giờ</label>
          <input name="gio" type="time" placeholder="HH:mm" class="form-control" id="formGroupExampleInput" value="<?= $value['gio'] ?>">                 
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Nội dung</label>
          <input name="noidung" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nhập nội dung ..." value="<?= $value['noidung'] ?>">          
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Dự họp</label>
          <input name="duhop" type="text" class="form-control" id="formGroupExampleInput" placeholder="Cá nhân, đơn vị đi họp ..." value="<?= $value['duhop'] ?>">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Chủ trì</label>
          <input name="chutri" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Cá nhân, đơn vị chủ trì ..." value="<?= $value['chutri'] ?>">          
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Địa điểm</label>
          <input name="diadiem" type="text" class="form-control" id="formGroupExampleInput" placeholder="Địa điểm họp ..." value="<?= $value['diadiem'] ?>">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">CQCP</label>
          <input name="cqcp" type="text" class="form-control" id="formGroupExampleInput" placeholder="CQCP ..." value="<?= $value['cqcp'] ?>">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput">Ghi chú</label>
          <input name="ghichu" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ghi chú ..." value="<?= $value['ghichu'] ?>">
        </fieldset>
        <fieldset class="form-group">
          <label for="formGroupExampleInput2">Phục vụ xe</label>
          <input name="phucvuxe" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phục vụ xe ..." value="<?= $value['phucvuxe'] ?>">          
        </fieldset>
        <input type="submit" class="btn btn-success btn-block" value="Lưu">  
      </form>
  </div>        

   
     <?php endforeach ?>
    
</div>
</body>
</html>