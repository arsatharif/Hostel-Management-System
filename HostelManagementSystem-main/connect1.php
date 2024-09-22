<?php
   
	$name = $_POST['name'];
	$regno = $_POST['regno'];
	$block = $_POST['block'];
	$roomno = $_POST['roomno'];
	$date = $_POST['date'];
	$phoneno = $_POST['phoneno'];

   //Database Connection
	$conn = new mysqli('localhost','root','','attendance');
	if($conn->connect_error){
	die('connection failed  :  '.$conn->connect_error);
	}else{
	$stmt = $conn->prepare ("insert into attendance(name,regno,block,roomno,date,phoneno)
	values(?,?,?,?,?,?)");
	$stmt->bind_param("sssiii",$name,$regno,$block,$roomno,$date,$phoneno);
	$stmt->execute();
	echo"Attendance Registered...";
	$stmt->close();
	$conn->close();
}
?>