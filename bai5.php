<!DOCTYPE html>
<?php 
include('./users.php');
$obj_users=new users();
//Xoa
$id='';
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$obj_users->deleteUser($id);
	# code...
}
//tim kiem 
$keyword='';
if ($_GET['keyword']) {
	$keyword=$_GET['keyword'];
	# code...
}
$users=$obj_users->getUsers($keyword);

 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.mim.css">
	<link rel="stylesheet" type="text/css" href="public.css/font-awesome.mim.css">
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	<link rel="stylesheet" type="text/css" href="public/css/type-12.css">
</head>
<body>
	<header>
		<div class="type-12">
			<div class="container">
				<div class="col-md-12 boder">
					<div class="type"><h2>Our Team</h2></div>
					<form>
						<input type="text" name="keyword" placeholder=" Nhập từ khóa">
						<input type="submit" value="tìm kiếm">
						
					</form>
					<div class="row">
						<?php foreach($users as $user):?>
						
						<div class="col-md-4 col-sm-6 sol-xs-12 class">
							<a href="bai5.php?id=1">Xóa</a>
							<?php echo $user['id']?>
							<a href="capnhat.php?id=">Cập nhật</a>
							<?php echo $user['id']?>
							<div class="hover">
							<div class="images">
								<img src="public/images/Ronaldo.jpg" alt="imgAlt">
								
							</div>
							<div class="overlaya">
							<div class="content">
								<p>Senior salesman with 15 years of experience, He knows</p>
								
							</div>
								
							</div>
								
							</div>
							<div class="tieude">
								<a href="#"><h3> <?php echo $user['username']?></h3></a>
								
							</div>
							
						</div>
						
						<?php endforeach;?>	
						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</header>
	
</body>
</html>