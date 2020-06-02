<?php
	session_start();
	if (!isset($_SESSION['nama'])) {
		echo "<script>alert('Silahkan Login Terlebih Dahulu');</script";
		echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
	} else {
?>
	<!-- CONTENT -->
	<div class="content-wrapper">
		<section class="content-header">
			<h1>Admin <small>Daftar Data Dokter</small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-book"></i>Dashboard</a></li>
				<li class="active">Daftar Data Dokter</li>
			</ol>
		</section><!-- .content-header -->
		
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Daftar Data Dokter</h3>
							<a href="?page=tambah_dokter" class="btn btn-primary pull-right">Tambah Data Dokter</a>
						</div><!-- .box-header -->

						<div class="box-body"> 

						<table class="table table-bordered">
						<?php
							$halaman = 7;
							$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
							$mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
							$result = mysqli_query($link, "SELECT * FROM tb_dokter");

							$total = mysqli_num_rows($result);
							$pages =  ceil($total/$halaman);
							$query = mysqli_query($link, "SELECT * FROM tb_dokter LIMIT $mulai, $halaman") or die(mysqli_error);

						?>	
							<thead>
								<tr>
									<td><center>NO</center></td>
									<td><center>NIP</center></td>
									<td><center>Nama Dokter</center></td>
									<td><center>Tempat Lahir</center></td>
									<td><center>Tanggal Lahir</center></td>
									<td><center>Jenis Kelamin</center></td>
									<td><center>Spesialis</center></td>
									<td><center>Alamat</center></td>
									<td><center>No. Telpon</center></td>
									<td><center>Email</center></td>
									<td><center>Awal Masuk</center></td>
									<td><center>Pensiunan</center></td>
									<td><center>Foto</center></td>
								</tr>
							</thead>
 
							<tbody>
								<?php $i = 1 ?>
								<?php while ($dokter=mysqli_fetch_array($query)) { 
									?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><a href="?page=detail_dokter&id=<?php echo $dokter['id']; ?>"><?php echo $dokter['nip']; ?></a></td>
									<td><?php echo $dokter['tempat_lahir']; ?></td>
									<td><?php echo $dokter['tanggal_lahir']; ?></td>
									<td>
										<?php
											if ($pasien['jk'] == 'L') {
												echo "Laki-laki";
											} elseif ($pasien['jk'] == 'P') {
												echo "Perempuan";
											}
										?>
									</td>
									<td><?php echo $dokter['spesialis']; ?></td>
									<td><?php echo $dokter['alamat']; ?></td>
									<td><?php echo $dokter['no_telp']; ?></td>
									<td><?php echo $dokter['email']; ?></td>
									<td><?php echo $dokter['awal_masuk']; ?></td>
									<td><?php echo $dokter['pensiunan']; ?></td>
									<td><?php echo $dokter['foto']; ?></td>
									<td>
										<a href="?page=edit_dokter&id=<?php echo $dokter['id']; ?>" class="btn btn-success btn-xs"><i class="fa fa-edit">Edit</i></a> |
										<a href="?page=hapus_dokter&id=<?php echo $dokter['id']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus Anggota <?php echo $dokter['nama_dokter']; ?> ?');"><i class="fa fa-trash">Hapus</i></a>
									</td>
								</tr>
								<?php $i++; ?>
								<?php } ?>
							</tbody>
						</table>

						</div>

						<div class="box-footer clearfix">
							<ul class="pagination pagination-sm no-margin pull-right">
								<li><a href="#">Halaman</a></li>
								<?php for ($i=1; $i <= $pages; $i++) { ?>
									<li><a href="?page=list_dokter&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
								<?php } ?>
							</ul>
						</div><!-- box-footer -->
					</div><!-- .box -->
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</section><!-- .content -->

	</div><!-- .content-wrapper -->
<?php
	}	
?>