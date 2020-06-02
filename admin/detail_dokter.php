<?php
	session_start();
	if(!isset($_SESSION['nama'])){
		echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
	}else{
?>
	<!-- ini untuk konten -->
	<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Admin <small>Detail Dokter</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-book"></i>Dashboard</a></li>
			<li class="active">Detail Dokter</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Detail Dokter</h3>
					</div>

					<div class="box-body">

					<table class="table table-bordered">
						<?php
							$no = isset($_GET['no']) ? $_GET['no'] : "";
							$query = mysqli_query($link, "SELECT*FROM tb_dokter WHERE nip='$nip'");
							$data = mysqli_fetch_array($query);
						?>

						<tbody>
							<tr>
								<th width="30%">NIP</th>
								<td>: <?php echo $data['nip']; ?></td>
							</tr>
							<tr>
								<th width="30%">Nama Dokter</th>
								<td>: <?php echo $data['nama_dokter']; ?></td>
							</tr>
							<tr>
								<th width="30%">Tempat Lahir</th>
								<td>: <?php echo $data['tempat_lahir']; ?></td>
							</tr>
							<tr>
								<th width="30%">Tanggal Lahir</th>
								<td>: <?php echo date('Y-m-d', strtotime($data['tanggal_lahir'])); ?> </td>
							</tr>
							<tr>
								<th width="30%">Jenis Kelamin</th>
								<td>: <?php 
												if ($data['jk'] == 'L') {
													echo "Laki-Laki";
												}elseif ($data['jk'] == 'P') {
													echo "Perempuan";
												}else{
													echo "";
												}
										 ?>				
								</td>
							</tr>
							<tr>
								<th width="30%">Spesialis</th>
								<td>: <?php echo $data['spesialis']; ?></td>
							</tr>
							<tr>
							<tr>
								<th width="30%">Alamat</th>
								<td>: <?php echo $data['alamat']; ?></td>
							</tr>
							<tr>
								<th width="30%">No. Telpon</th>
								<td>: <?php echo $data['no_telp']; ?></td>
							</tr>
							<tr>
								<th width="30%">Email</th>
								<td>: <?php echo $data['email']; ?></td>
							</tr>
							<tr>
								<th width="30%">Awal Masuk</th>
								<<th width="30%">Tanggal Lahir</th>
								<td>: <?php echo date('Y-m-d', strtotime($data['tanggal_lahir'])); ?> </td>
							</tr>
							<tr>
								<th width="30%">Pensiunan</th>
								<td>: <?php echo $data['pensiunan']; ?></td>
							</tr>
							<tr>
								<th width="30%">Foto</th>
								<td> 
									<?php
										$cek =  $data['foto'];
										if (isset($data['foto'])) {
											 echo ": <img src=../assets/image/$cek', alt=' ' width='200' height='250'>";
										} else {
											echo ": tidak ada data";
										}
									?>
										
								</td>
								<td></td>
								<?php $no = $data['no']; ?>
								<td colspan="2"><a href='?page=edit_dokter&no=<?php echo $no; ?>' class="btn btn-info">Edit Dokter</a></td>
							</tr>
						</tbody>
					</table>

					</div>

				</div>
			</div>
		</div>
	</section>

		
	</div>
<?php
}
?>