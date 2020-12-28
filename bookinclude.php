<?php
include"book.php";
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$contact = $_REQUEST['Contact'];
$floor = $_REQUEST['Floor'];
$date = $_REQUEST['Date'];
$time = $_REQUEST['Time'];

$mysqli = "INSERT INTO input_book Values('$name', '$email','$contact','$floor','$date','$time')";
$result = mysqli_query($conn,$mysqli);


if($result){
	echo "berhasil diinputkan";
}else{
    var_dump(mysqli_error_list($conn));
}
mysqli_close($conn)
?>