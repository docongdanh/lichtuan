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
                            
                            <div class="headerSearch col-xs-24 col-sm-6 col-md-6">
                                <div class="input-group" style=margin: "right">
                                    <input type="text" class="form-control" maxlength="60" placeholder="Tìm kiếm..."><span class="input-group-btn"><button type="button" class="btn btn-info" data-url="/vi/seek/?q=" data-minlength="3" data-click="y"><em class="fa fa-search fa-lg"></em></button></span>
                                </div>
                            </div>
                      

<div class="row">
  <div class="col-md-24">
<div class="schedule-list-tool clearfix">
        <div class="pull-right">
        <div class="btn-group">
            <a type="button" class="btn btn-warning" data-toggle="tooltip-week" data-mode="prev" data-value="Tuần thứ 33 (12/08/2019 đến 18/08/2019)" title="Tuần trước"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
            <div class="btn-group" id="dropdown-selectweek">
                <a class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tuần thứ 33 (12/08/2019 đến 18/08/2019)
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                                        <li class="schedules-week"><a href="/vi/work-schedules/Tuan-52-2018/">Tuần thứ 52 (24/12/2018 đến 30/12/2018)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-1/">Tuần thứ 1 (31/12/2018 đến 06/01/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-2/">Tuần thứ 2 (07/01/2019 đến 13/01/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-3/">Tuần thứ 3 (14/01/2019 đến 20/01/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-4/">Tuần thứ 4 (21/01/2019 đến 27/01/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-5/">Tuần thứ 5 (28/01/2019 đến 03/02/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-6/">Tuần thứ 6 (04/02/2019 đến 10/02/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-7/">Tuần thứ 7 (11/02/2019 đến 17/02/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-8/">Tuần thứ 8 (18/02/2019 đến 24/02/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-9/">Tuần thứ 9 (25/02/2019 đến 03/03/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-10/">Tuần thứ 10 (04/03/2019 đến 10/03/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-11/">Tuần thứ 11 (11/03/2019 đến 17/03/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-12/">Tuần thứ 12 (18/03/2019 đến 24/03/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-13/">Tuần thứ 13 (25/03/2019 đến 31/03/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-14/">Tuần thứ 14 (01/04/2019 đến 07/04/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-15/">Tuần thứ 15 (08/04/2019 đến 14/04/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-16/">Tuần thứ 16 (15/04/2019 đến 21/04/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-17/">Tuần thứ 17 (22/04/2019 đến 28/04/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-18/">Tuần thứ 18 (29/04/2019 đến 05/05/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-19/">Tuần thứ 19 (06/05/2019 đến 12/05/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-20/">Tuần thứ 20 (13/05/2019 đến 19/05/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-21/">Tuần thứ 21 (20/05/2019 đến 26/05/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-22/">Tuần thứ 22 (27/05/2019 đến 02/06/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-23/">Tuần thứ 23 (03/06/2019 đến 09/06/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-24/">Tuần thứ 24 (10/06/2019 đến 16/06/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-25/">Tuần thứ 25 (17/06/2019 đến 23/06/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-26/">Tuần thứ 26 (24/06/2019 đến 30/06/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-27/">Tuần thứ 27 (01/07/2019 đến 07/07/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-28/">Tuần thứ 28 (08/07/2019 đến 14/07/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-29/">Tuần thứ 29 (15/07/2019 đến 21/07/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-30/">Tuần thứ 30 (22/07/2019 đến 28/07/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-31/">Tuần thứ 31 (29/07/2019 đến 04/08/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-32/">Tuần thứ 32 (05/08/2019 đến 11/08/2019)</a></li>
                    <li class="schedules-week bg-warning"><a href="/vi/work-schedules/Tuan-33/">Tuần thứ 33 (12/08/2019 đến 18/08/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-34/">Tuần thứ 34 (19/08/2019 đến 25/08/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-35/">Tuần thứ 35 (26/08/2019 đến 01/09/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-36/">Tuần thứ 36 (02/09/2019 đến 08/09/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-37/">Tuần thứ 37 (09/09/2019 đến 15/09/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-38/">Tuần thứ 38 (16/09/2019 đến 22/09/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-39/">Tuần thứ 39 (23/09/2019 đến 29/09/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-40/">Tuần thứ 40 (30/09/2019 đến 06/10/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-41/">Tuần thứ 41 (07/10/2019 đến 13/10/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-42/">Tuần thứ 42 (14/10/2019 đến 20/10/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-43/">Tuần thứ 43 (21/10/2019 đến 27/10/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-44/">Tuần thứ 44 (28/10/2019 đến 03/11/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-45/">Tuần thứ 45 (04/11/2019 đến 10/11/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-46/">Tuần thứ 46 (11/11/2019 đến 17/11/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-47/">Tuần thứ 47 (18/11/2019 đến 24/11/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-48/">Tuần thứ 48 (25/11/2019 đến 01/12/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-49/">Tuần thứ 49 (02/12/2019 đến 08/12/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-50/">Tuần thứ 50 (09/12/2019 đến 15/12/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-51/">Tuần thứ 51 (16/12/2019 đến 22/12/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-52/">Tuần thứ 52 (23/12/2019 đến 29/12/2019)</a></li>
                    <li class="schedules-week"><a href="/vi/work-schedules/Tuan-1-2020/">Tuần thứ 1 (30/12/2019 đến 05/01/2020)</a></li>
                </ul>
            </div>
            <a type="button" class="btn btn-warning" data-toggle="tooltip-week" data-mode="next" data-value="Tuần thứ 33 (12/08/2019 đến 18/08/2019)" title="Tuần sau"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
        </div>
    </div>
        
</div>

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
        </tr>
   </div> 
    
     <?php endforeach ?>
   
  </table>
</div>


       
                            

<table class="table table-bordered schedule-list mb20">
    <thead>
        <tr>
            <th class="text-center">Thứ/Ngày</th>
            <th class="text-center" style="white-space: nowrap;">Thời gian</th>
                        <th class="text-center">
                Nội dung
            </th>
            <th class="text-center">
                Thành phần
            </th>
            <th class="text-center">
                Địa điểm
            </th>
            <th class="text-center">
                Chủ trì
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
                        <td class="text-center middle">
                Thứ tư<br />
                14/08/2019
            </td>
            <td class="text-center middle">
                <strong>16:30</strong>
            </td>
                        <td class="middle">
                Chương trình Năm học mới và hoạt động RW.
            </td>
            <td class="middle">
                BCH HSV ĐHQT.
            </td>
            <td class="middle">
                O1.111
            </td>
            <td class="middle">
                HSV ĐHQT.
            </td>
        </tr>
        <tr>
                        <td class="text-center middle">
                Thứ bảy<br />
                17/08/2019
            </td>
            <td class="text-center middle">
                <strong>19:00</strong>
            </td>
                        <td class="middle">
                Chương trình kỷ niệm 20 năm Chiến dịch Thanh niên tình nguyện hè và tổng kết Chiến dịch thanh niên tình nguyện hè năm 2019 của Trung ương Đoàn
            </td>
            <td class="middle">
                Đại diện Thường trực Đoàn - Hội ĐHQT.
            </td>
            <td class="middle">
                Sân 4A Nhà VHTN
            </td>
            <td class="middle">
                Thành Đoàn.
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>