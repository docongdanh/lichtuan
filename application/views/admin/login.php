<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>ĐĂNG NHẬP</title>
</head>
<body>			

				<!-- <div class="text-center">
				<form action="" method="post" id="form">
			<fieldset>
				<legend><b>Thông tin đăng nhập</b></legend>
				<div><span class="success"></span></div>
				<div>
					<label for="username">Tài khoản</label>
					<input class="form-group" type="text" name="username" value="" size="50" />
					<span class="error"></span>
				</div>
				<div>
					<label for="password">Mật khẩu</label>
					<input class="form-group" name="password" type="password" value="" size="50" />
					<span class="error"></span>
				</div>
				<div><input type="submit" class="btn btn-success" value="Đăng nhập" /></div>
			</fieldset>
		</form>
	</div> -->

	<?php echo isset($error) ? $error : ''; ?>  
    <form align="center" method="post" action="<?php echo site_url('admin/Login/process'); ?>">  
        <table cellpadding="2" cellspacing="2">  
            <fieldset>
				<legend><b>Thông tin đăng nhập</b></legend>
				<div><span class="success"></span></div>
				<div>
					<label for="username">Tài khoản</label>
					<input class="form-group" type="text" name="username" value="" size="50" />
					<span class="error"></span>
				</div>
				<div>
					<label for="password">Mật khẩu</label>
					<input class="form-group" name="password" type="password" value="" size="50" />
					<span class="error"></span>
				</div>
				<div><input type="submit" class="btn btn-success" value="Đăng nhập" /></div>
			</fieldset>
        </table>  
    </form>

</body>
</html>