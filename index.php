<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$error = [];

	if(empty($_POST['email'])){
		$error['email'] = "Email không được để trống !";
	}

	if(empty($_POST['password'])){
		$error['password'] = "Password không được để trống !";
	}

	if(empty($error)){
		header("Location: list.php");
	}

}


?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	</head>
	<body>
		
		<div class="col-md-6 col-md-offset-3" style="margin-top:20px">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Đăng nhập</h3>
				</div>
				<div class="panel-body">
				
					<form action="" method="POST" role="form">
											
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" class="form-control" id="" placeholder="Nhap email " name="email" value="">
							<?php if(isset($error['email'])) :?>
								<p class="text-danger"><?php echo $error['email']; ?></p>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="password" class="form-control" id="" placeholder="Nhap mat khau " name="password" value="">
							<?php if(isset($error['password'])) :?>
								<p class="text-danger"><?php echo $error['password']; ?></p>
							<?php endif; ?>
						</div>
						
					
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>

<?php require_once 'layout/footer.php' ?>