<?php
session_start();
include "db_conn.php";

if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])) {
		header("Location:index.php?error=E-Posta ve parola gerekli.");

	}
	else{
		$email= $_POST['email'];
		$pass = md5($_POST['password']);

		$db=mysqli_select_db($conn,"tahmin_forum");
		$query =mysqli_query($conn,"SELECT * FROM users WHERE password='$pass' AND email='$email'");

		$rows = mysqli_num_rows($query);
		$qry = mysqli_fetch_array($query);
		if($rows == 1){
			$_SESSION['email']=$email;
			$_SESSION['id']=$qry['userId'];
			$_SESSION['username']=$qry['username'];
			$_SESSION['city']=$qry['city'];
			$_SESSION['favTeam']=$qry['favTeam'];
			$_SESSION['signUp_date']=$qry['signUp_date'];

			header("Location: indexlogged.php");
			exit();
		}
		else{
			header("Location: index.php?error=Hatalı E-Posta ya da Şifre.");
			exit();
		}
		mysqli_close($conn);
	}
}
?>
