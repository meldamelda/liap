<?php
  session_start();
  if(!isset($_SESSION['nama'])){
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
  } else {
    include '../db/koneksi.php';

    // kode otomatis
    $carikode = mysqli_query($link, "SELECT nip FROM tb_dokter");
    $datakode = mysqli_fetch_array($carikode);
    $jumlah_data = mysqli_num_rows($carikode);
        //if ($datakode) {
          //$nilaikode= substr($jumlah_data[0], 1);
          //$kode = (int) $nilaikode;
          //$kode = $jumlah_data + 1;
          //$hasilkode = "D".str_pad($kode, 3, "0", STR_PAD_LEFT);
        //} else {
          //$hasilkode = "D001";
        //}
    
    $query = mysqli_query($link, "SELECT no, username FROM tb_login");
?>

  <!-- ini untuk konten -->
  <div class="content-wrapper">

  <section class="content-header">
    <h1>
      Admin <small>Tambah Data Dokter</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-book"></i>Dashboard</a></li>
      <li class="active">Tambah Data Dokter</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
    
    <?php $status = isset($_GET['status']) ?  $_GET['status']  : ""; ?>
      
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Dokter</h3>
        </div>

        <form data-toggle="validator" action="?page=simpan_dokter" method="POST">
          <div class="box-body">
          <?php
            if ($status){
          ?>

          <div class="alert alert-danger alert-dismissible">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-close">Gagal!</i></h4>

            <?php echo $status; ?>
          </div>
          <?php
          }
          ?>

          <div class="form-group">
            <div class="col-md-10">
              <label> NIP </label>
              <input type="text" class="form-control" placeholder="NIP" name="nip" data-error="Wajib Diisi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-10">
              <label> Nama Dokter </label>
              <input type="text" class="form-control" placeholder="Nama Dokter" name="nama_dokter" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Tempat Lahir </label>
              <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Tanggal Lahir </label>
              <input type="date" class="form-control" name="tanggal_lahir" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Jenis Kelamin </label>
              <select name="jk" class="form-control">
                <option>-----Pilih Gender-----</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
              </select>
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-10">
              <label> Spesialis </label>
              <input type="text" class="form-control" placeholder="Spesialis" name="spesialis" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Alamat </label>
              <input type="text" class="form-control" placeholder="Alamat" name="alamat" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-10">
              <label> No. Telpon </label>
              <input type="text" class="form-control" placeholder="No. Telpon" name="no_telp" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>

        <div class="form-group">
            <div class="col-md-10">
              <label> Email </label>
              <input type="text" class="form-control" placeholder="Email" name="email" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Awal Masuk </label>
              <input type="date" class="form-control" name="awal_masuk" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Pensiunan </label>
              <input type="text" class="form-control" placeholder="Pensiunan" name="pensiunan" data-error="wajib di isi" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        
        <div class="form-group">
            <div class="col-md-10">
              <label> Foto </label>
              <input type="file" class="form-control" name="foto">
            </div>
          </div>

          <div class="box-body">
          <div class="col-md-10">
              <div class="box-footer">
              <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
            </div>
            </div> 
            </div>         
        </form>

      </div>
    </div>  
    </div>
  </section>
</div>

<?php
}
?>