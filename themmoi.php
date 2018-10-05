<form>
	User name: <input type="text" name="username"><br>
	Password:<input type="Password" name="Password" ><br>
	<input type="submit" value="Thêm mới">
	
</form>
<?php
include('users.php');
?>
<?php
if (isset($_GET['username'])) {
	$data=[ 'username'=>$_GET['username'],'Password'=>$_GET['Password'],
	];
	# code...
	$obj_users=new users();
	$obj_users->insertUser($data);
}
?>