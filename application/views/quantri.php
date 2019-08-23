<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
  <script type="text/javascript" src="<?php echo base_url(); ?>/vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/1.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/vendor/styles.css">
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
	<h2 align="center">LỊCH CÔNG TÁC</h2>


	
  <table class="table table-bordered schedule-list mb20" width="100%">
  
    <thead>
      <tr class="w3-red">
        <th>Thứ/Ngày</th>
        <th>Thời gian</th>
        <th>Nội dung</th>
        <th>Dự họp</th>
    <th>Chủ trì</th>
        <th>Địa điểm</th>
        <th>CQCP</th>
    <th>Ghi chú</th>
        <th>Phục vụ xe</th>
        <th>Thao tác</th>

      </tr>      
    </thead>  
 
 
    
    <?php foreach ($dulieutucontroller as $key => $value): ?>
        
   <div>
        <tr>
            <td><?= $value['ngay'] ?></td>
            <td><?= $value['gio'] ?></td>
            <td><?= $value['noidung'] ?></td>
            <td><?= $value['duhop'] ?></td>
             <td><?= $value['chutri'] ?></td>
            <td><?= $value['diadiem'] ?></td>
            <td><?= $value['cqcp'] ?></td>
           <td><?= $value['ghichu'] ?></td>
            <td><?= $value['phucvuxe'] ?></td>
            <td>
                    <a href="index.php/quantri/editData">Sửa/</a>              
                    <a href="index.php/quantri/deleteData/<?= $value['id'] ?>">Xóa</a>
            </td>
            
        </tr>
   </div> 
    
     <?php endforeach ?>
   
  </table>
</div>
</body>
</html>