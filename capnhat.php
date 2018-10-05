<form>
	id:<input type="text" name="id" value="<?php echo $user['id']?>"><br>
	User name:<input type="text" name="username" value="<?php echo $user['username']?>"><br>
	Password: <input type="Password" name="Password" value="<?php echo $user['Password']?>"><br>
	<input type="submit" value="Thêm mới">
</form>
<?php include'users.php'; ?>
<?php
//$obj_users=new users();
//$id='';
//$user='';
//if (inset($_GET['id'])) {
	//$id=$_GET['id'];
	//$user=$obj_users->findUser($id);
	# code...
//}
//else
//{
	//die('error');
//}
if (isset($_GET['username'])) {
	# code...
	$data=['username'=>$_GET['username'],
	'Password'=>$_GET['Password'].
	'id'=>$_GET['id']
];
$obj_users->updateUser($data);
}
?>
