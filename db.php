<?php
include('config.php');
class db{
	//Tao bien $conn ket noi
	public static $connection=Null;
	//Tao ket noi trong ham construct
	public function __construct(){
		if(!self::$connection)
		{
			self::$connection =  mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

		}
		
	}
	public function query($sql){
		$data=mysqli_query(self::$connection,$sql);
		return $data;
		
	}
	
	
	//Viet ham lay ra tên và giá sản phẩm của hãng “Apple”
	public function select($sql){
		//Viet cau SQL
		$data = $this->query($sql);
		$row=[];
		while ($row=mysqli_fetch_assoc($data)) {
			$rows[]=$row;
			# code...
		}
		return $row;

	}
}