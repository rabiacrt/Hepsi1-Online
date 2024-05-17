<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['tpass']) && isset($_POST['name'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
				
	
	$uname = validate($_POST['uname']);
	$email = validate($_POST['email']);
	$pass = validate($_POST['pass']);
	$tpass = validate($_POST['tpass']);
	$name = validate($_POST['name']);
	$tar = date("Y-m-d H:i:s");
	



	if (empty($uname)) {
		header("Location: signups.php?error=Kullanıcı adı gerekli");
	    exit();
	}else if(empty($email)){
        header("Location: signups.php?error=Email gerekli");
	    exit();
	}else if(empty($pass)){
        header("Location: signups.php?error=Şifre gerekli");
	    exit();
	}else if(empty($tpass)){
        header("Location: signups.php?error=Tekrar şifre gerekli");
	    exit();
	}

	

	else{

     

        $sql = "SELECT * FROM user WHERE user_name='$uname' ";
		$sql3 = "SELECT * FROM user WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
		$result3 = mysqli_query($conn, $sql3);
		if (mysqli_num_rows($result) > 0) {
			header("Location: signups.php?error=Bu Kullanıcı Ad Alındı Tekrar Deneyiniz.");
	        exit();
		}else if (mysqli_num_rows($result3) > 0) {
			header("Location: signups.php?error=Bu email zaten kayıtlı lütfen giriş yapmayı deneyiniz.");
	        exit();
		}else if ($pass != $tpass) {
			header("Location: signups.php?error= şifreler aynı değil tekrar deneyiniz.");
	        exit();
		}else{

           $sql2 = "INSERT INTO user(user_name, password, name, email) VALUES('$uname', '$pass', '$name', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signups.php?success=Başarı bir şekilde kayıt olundu.");
	         exit();
           }else {
	           	header("Location: signups.php?error=Bilinmeyen hata&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signups.php");
	exit();
}