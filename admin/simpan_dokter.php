<?php
include '../db/koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama_dokter'];
$tempatlahir = $_POST['tempat_lahir'];
$tgllahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
$jk = $_POST['jk'];
$spesialis = $_POST['spesialis'];
$alamat = $_POST['alamat'];
$notelp = $_POST['no_telp'];
$email = $_POST['email'];
$awalmasuk = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
$pensiunan = $_POST['pensiunan'];
$foto = $_POST['foto'];
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
			$query = mysqli_query($link, "INSERT INTO tb_dokter(nip, nama_dokter, tempat_lahir, tanggal_lahir, jk, spesialis, alamat, no_telp, email, awal_masuk, pensiunan, foto) VALUES('$nip','$nama','$tempatlahir', '$tgllahir', '$jk', '$spesialis', '$alamat', '$notelp', '$email', '$awalmasuk', '$pensiunan', '$foto')");
			if (!$query) {
				$isi = "Gagal Menambahkan Data dengan kesalahan =  ".mysqli_errno($link). " - ".mysqli_error($link);
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_dokter.php?status=$isi'>";
			}else{
				$query = mysqli_query($link, "SELECT * FROM tb_dokter WHERE nip='$nip'");
				$data = mysqli_fetch_array($query);
				$id = $data[0];
				echo "<script> alert('Data Berhasil Ditambahkan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=detail_dokter&id=$id'>";
			}
	}else{
			$isi = "File terlalu besar =  ".mysqli_errno($link). " - ".mysqli_error($link);
				echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_user.php&status=$isi'>";
		}
	}else{
		$isi = "Extensi File Tidak Diperbolehkan =  ".mysqli_errno($link). " - ".mysqli_error($link);
		die(mysqli_error($link));
			echo "<meta http-equiv='refresh' content='0; url=home.php?page=tambah_user&status=$isi'>";
	}
}
?>