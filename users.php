<?php
include "db.php";
class users extends db
{
	public function getUsers($keyword){
		if ($keyword) {
			$sql='SELECT*FROM users WHERE username LIKE "%'.$keyword.'%"';
			# code...
		}
		else{
			$sql='SELECT*FROM users';
		}
		$users=$this->select($sql);
		return $users;
	}
	public function select($sql){
		$users=$this->query($sql);
		return $users;

	}
	
	public function deleteUser($id){
		$sql='DELETE FROM users WHERE id='.$id;
		$this->query($sql);
	}
	public function insertUser($data){
		$sql = 'INSERT INTO users(username,password)
		VALUES ('.$data['username']','.$data['password']')';
		$this->query($sql);
	}
	public function updateUser($date){
		$sql='	UPDATE `users`'.
		'SET `username`="'.$date['username'].'",'.
		' `password`="'.$date['password'].'",'.
		$this->query($sql);
	}
	public function findUser($id){
		$sql='	SELECT*FROM users WHERE id ='.$id;
		$user=$this->select($sql);
		return $user[0];
	}
}
?>