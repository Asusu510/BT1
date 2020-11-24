<?php require_once 'layout/header.php' ;
session_start();
// echo "<pre>";
// print_r($_SESSION['user']);
// echo "</pre>";
?>   

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary ">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách user</h3>

		</div>
		<div class="panel-body">
			<a href="add.php" class="btn btn-success pull-left">Thêm mới</a>
			
		</div>
	
		<table class="table table-bordered ">
			<thead>
				<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($_SESSION['user'])) : ?>
					<?php foreach ($_SESSION['user'] as $key => $item) : ?>
						<tr>
							<th><?php echo $key; ?></th>
							<th><?php echo $item['name']; ?></th>
							<th><?php echo $item['email']; ?></th>
							<td>
								<a href="delete.php?id=<?php echo $key ?>" class="btn btn-danger">Xóa</a>
								<a href="edit.php?id=<?php echo $key ?>" class="btn btn-info">Sửa</a>

							</td>

						</tr>
					<?php endforeach ?>
				<?php endif; ?>
			</tbody>
		</table>
	
	</div>

</div>


<?php require_once 'layout/footer.php' ?>
        