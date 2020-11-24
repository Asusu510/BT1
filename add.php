
<?php 
session_start();

$id = isset($_POST['id']) ? $_POST['id'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$error =[];

	$array = [
		'id' => $id,
		'name' => $name,
		'email' => $email,
		'password' => $password,
		'address' => $address
	];

	foreach ($array as $key => $item){
		if(empty($item)){
			$error[$key] = 'Khong duoc de trong';

		}
	}

	if(empty($error)){
		if(isset($_SESSION['user'][$id])){

			$_SESSION['error'] = 'id người dùng đã tồn tại';
		}

		$_SESSION['user'][$id]['name'] = $name;
		$_SESSION['user'][$id]['email'] = $email;
		$_SESSION['user'][$id]['password'] = $password;
		$_SESSION['user'][$id]['address'] = $address;

		header('location: list.php');
	}

	
}


 ?>

<?php require_once 'layout/header.php' ;?>     
                

       <div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Thêm mới user</h3>
			</div>
			<?php if(isset($_SESSION['error'])) :?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Lỗi !!</strong> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
				</div>
			<?php endif ?>
			<div class="panel-body">
			
				<form action="" method="POST" role="form">
					
					<div class="form-group">
						<label for="">ID</label>
						<input type="text" class="form-control" id="" placeholder="Tên " name="id">
						<?php if(isset($error['id'])) :?>
							<p class="text-danger"><?php echo $error['id']; ?></p>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="" placeholder="Tên " name="name">
						<?php if(isset($error['name'])) :?>
							<p class="text-danger"><?php echo $error['name']; ?></p>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="" placeholder="Tên " name="email">
						<?php if(isset($error['email'])) :?>
							<p class="text-danger"><?php echo $error['email']; ?></p>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" id="" placeholder="Tên " name="password">
						<?php if(isset($error['password'])) :?>
							<p class="text-danger"><?php echo $error['password']; ?></p>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" id="" placeholder="Tên " name="address">
						<?php if(isset($error['address'])) :?>
							<p class="text-danger"><?php echo $error['address']; ?></p>
						<?php endif; ?>
					</div>
			<!-- 		<div class="radio">
						<label>
							<input type="radio" name="status" id="input" value="0" checked >
							ẩn
						</label>
						<label>
							<input type="radio" name="status" id="input" value="1" >
							hiện
						</label>
					</div> -->
				
					
				
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="list.php" class="btn btn-success">Danh sách</a>
				</form>
			</div>
		</div>
	</div>
        
        
    

<?php require_once 'layout/footer.php' ?>