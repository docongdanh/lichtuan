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
  <div align="right"><?php echo anchor('admin/Login/logout', 'Đăng xuất'); ?></div>
  
	<h4 align="center">LỊCH CÔNG TÁC</h4><br>  
  <h3 align="center">Tuần thứ  năm</h3> 


	
  <table class="table table-bordered schedule-list mb20">
    <thead>    
      <tr>
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
              
   <div class="row">
    <!-- <?= date(D, timestamp); ?> -->
        <tr> 
                                                        
            <td><?php
              $date = new DateTime($value['ngay']);
 // $weekday = date("l");
 // $weekday = strtolower($weekday);
 // switch($weekday) {
 //   case 'monday':
 //     $weekday = 'Thứ hai';
 //     break;
 //   case 'tuesday':
 //     $weekday = 'Thứ ba';
 //     break;
 //   case 'wednesday':
 //     $weekday = 'Thứ tư';
 //     break;
 //   case 'thursday':
 //     $weekday = 'Thứ năm';
 //     break;
 //   case 'friday':
 //     $weekday = 'Thứ sáu';
 //     break;
 //   case 'saturday':
 //     $weekday = 'Thứ bảy';
 //     break;
 //   default:
 //     $weekday = 'Chủ nhật';
 //     break;
 // }
 // return $weekday.', '.date('d/m/Y H:i:s');
              echo $date->format('l').'<br>';
              $weekday=$date->format('l').'<br>';
                
                        switch($weekday) {
                       case 'monday':
                         $weekday = 'Thứ hai';
                         break;
                       case 'tuesday':
                         $weekday = 'Thứ ba';
                         break;
                       case 'wednesday':
                         $weekday = 'Thứ tư';
                         break;
                       case 'thursday':
                         $weekday = 'Thứ năm';
                         break;
                       case 'friday':
                         $weekday = 'Thứ sáu';
                         break;
                       case 'saturday':
                         $weekday = 'Thứ bảy';
                         break;
                       default:
                         $weekday = 'Chủ nhật';
                         break;
                     }
              
              echo $weekday.'<br>';
              echo $date->format('d-m-Y');
            ?>
              
            </td>
            <td><b><?= $value['gio'] ?></b></td>
            <td><?= $value['noidung'] ?></td>
            <td><?= $value['duhop'] ?></td>
             <td><?= $value['chutri'] ?></td>
            <td><?= $value['diadiem'] ?></td>
            <td><?= $value['cqcp'] ?></td>
           <td><?= $value['ghichu'] ?></td>
            <td><?= $value['phucvuxe'] ?></td>
            <td>
                    <a href="<?= base_url(); ?>index.php/lct/edit/<?= $value['id'] ?>">Sửa/</a>
                    <a href="<?= base_url(); ?>index.php/lct/deleteData/<?= $value['id'] ?>">Xóa</a>
            </td>
            
        </tr>        
   </div>    
     <?php endforeach ?>
    <tr>
            <td colspan="10"><a href="<?= base_url(); ?>index.php/nhaplichcongtac">Thêm mới</a></td>
    </tr>
   
  </table>  
</div>
</body>
</html>