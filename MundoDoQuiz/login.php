<?php
session_start();


include "connect.php";
	/*$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdb');
*/


	$username = $_POST['user'];
	$password = $_POST['pass'];

$q = " select * from quizregistration where user = '$username' && pass='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['username'] = $username;

	$userquery = " insert into user(username) values ('$username')";
	$userresult = mysqli_query($con,$userquery) ;

	header('location:home.php');	
}else{
	echo "<script>alert('Usuário ou senha incorreto!');location.href='index.php';</script>";
}

?>