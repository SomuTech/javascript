<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username)){
		echo "dkjghkj";
	}else{
	echo "username should not be empty";
	die();
}
if (!empty($password)) {


	}else{
		echo "password should not be empty";
		die();
	}
		$host='localhost';
		$dbusername='root';
		$dbpassword='';
		$dbname='data';
		$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
		if (mysqli_connect_error()) {
			die('Connect.Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else{
			$sql="INSERT INTO registration(username,password) values('$username','$password')"
		}
		if ($conn->query($sql)) {

			echo "new record is added successfully";
		} else{
		echo "error:".$sql."<br>".$conn->error;

?>
