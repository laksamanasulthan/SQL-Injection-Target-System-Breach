<?php 
    // session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
	$login = mysqli_prepare($koneksi, "SELECT * FROM tb_user WHERE username = ? AND password = ?");
	mysqli_stmt_bind_param($login,"ss",$username,$password);
	mysqli_execute($login);
	mysqli_stmt_store_result($login);

	if (mysqli_stmt_num_rows($login) == 0) {
		die("Username atau password salah!");
	} else {
		header("Location: index2.html");
	}
?>