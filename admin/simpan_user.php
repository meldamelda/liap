<?php
include '../db/koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$level = $_POST['level'];
$pass = md5($password);
if ($_POST['simpan']) {
	$extensi_diperbolehkan = array('png','jpg','jpeg');
	$nama = $_FILES['foto']['name'];
	$x = explode('.', $nama);
	$extensi = strtolower(end($x));
	$ukuran = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];
	if(in_array($extensi, $extensi_diperbolehkan) === true){
		if ($ukuran < 5000000000) {
			move_uploaded_file($file_tmp, '../assets/image/'.$nama);
			$query = mysqli_query($link, "INSERT INTO tb_login(username, password, email, foto, level) VALUES('$username','$pass','$email','$nama','$level')");
			if (!$query) {
				$isi = "Gagal Menambahkan Data dengan kesalahan =  ".mysqli_errno($link). " - ".mysqli_error($link);
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_user.php?status=$isi'>";
			}else{
				$query = mysqli_query($link, "SELECT no FROM tb_login WHERE username='$username'");
				$data = mysqli_fetch_array($query);
				$no = $data[0];
				echo "<script> alert('Data Berhasil Ditambahkan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=detail_user&no=$no'>";
			}
		}else{
			$isi = "FIle terlalu besar =  ".mysqli_errno($link). " - ".mysqli_error($link);
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_user.php&status=$isi'>";
		}
	}else{
		$isi = "Extensi File Tidak Diperbolehkan =  ".mysqli_errno($link). " - ".mysqli_error($link);
		die(mysqli_error($link));
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_user&status=$isi'>";
	}
}
?>