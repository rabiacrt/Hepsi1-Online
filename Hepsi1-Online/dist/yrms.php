<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['msg'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
				
	
	$msg = validate($_POST['msg']);

	$tar = date("Y-m-d H:i:s");
	
    $uname = $_SESSION['user_name'];


	if (empty($msg)) {
		header("Location: yrm.php?error=Mesaj yazman gerekli");
	    exit();
	}else{
           $sql2 = "INSERT INTO yrm(msg, user_name, tar) VALUES('$msg', '$uname', '$tar')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: yrm.php?success=Yorum yaptığınız için teşekkürler.");
	         exit();
           }else{
	           	header("Location: yrm.php?error=Bilinmeyen hata&$user_data");
		        exit();
           }
		}
	
	
}else{
	header("Location: yrm.php");
	exit();
}