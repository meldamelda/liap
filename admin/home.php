<?php 
	include 'topmenu_template.php';
	include 'sidebar_template.php';
	include '../db/koneksi.php';
?>

<?php
	error_reporting(0);
	switch ($_GET['page']) {
		default:
		include "dashboard.php";
		break;
		
		case "tambah_user";
		include "tambah_user.php";
		break;

		case "simpan_user";
		include "simpan_user.php";
		break;

		case "detail_user";
		include "detail_user.php";
		break;

		case "list_user";
		include "list_user.php";
		break;

		case "hapus_user";
		include "hapus_user.php";
		break;

		case "edit_user";
		include "edit_user.php";
		break;

		case "update_user";
		include "update_user.php";
		break;

		case "tambah_ruangan";
		include "tambah_ruangan.php";
		break;

		case "simpan_ruangan";
		include "simpan_ruangan.php";
		break;

		case "detail_ruangan";
		include "detail_ruangan.php";
		break;

		case "list_ruangan";
		include "list_ruangan.php";
		break;

		case "edit_ruangan";
		include "edit_ruangan.php";
		break;

		case "update_ruangan";
		include "update_ruangan.php";
		break;

		case "hapus_ruangan";
		include "hapus_ruangan.php";
		break;

		case "tambah_dokter";
		include "tambah_dokter.php";
		break;

		case "simpan_dokter";
		include "simpan_dokter.php";
		break;

		case "detail_dokter";
		include "detail_dokter.php";
		break;

		case "list_dokter";
		include "list_dokter.php";
		break;

		case "edit_dokter";
		include "edit_dokter.php";
		break;

		case "update_dokter";
		include "update_dokter.php";
		break;

		case "hapus_dokter";
		include "hapus_dokter.php";
		break;

		case "tambah_pasien";
		include "tambah_pasien.php";
		break;

		case "simpan_pasien";
		include "simpan_pasien.php";
		break;

		case "detail_pasien";
		include "detail_pasien.php";
		break;

		case "list_pasien";
		include "list_pasien.php";
		break;

		case "edit_pasien";
		include "edit_pasien.php";
		break;

		case "update_pasien";
		include "update_pasien.php";
		break;

		case "hapus_pasien";
		include "hapus_pasien.php";
		break;

		case "list_rekammedis";
		include "list_rekammedis.php";
		break;

		case "tambah_rekammedis";
		include "tambah_rekammedis.php";
		break;

		case "simpan_rekammedis";
		include "simpan_rekammedis.php";
		break;

		case "detail_rekammedis";
		include "detail_rekammedis.php";
		break;

		case "edit_rekammedis";
		include "edit_rekammedis.php";
		break;

		case "update_rekammedis";
		include "update_rekammedis.php";
		break;

		case "hapus_rekammedis";
		include "hapus_rekammedis.php";
		break;

		case "list_kunjunganpoli";
		include "list_kunjunganpoli.php";
		break;

		case "tambah_kunjunganpoli";
		include "tambah_kunjunganpoli.php";
		break;

		case "simpan_kunjunganpoli";
		include "simpan_kunjunganpoli.php";
		break;

		case "detail_kunjunganpoli";
		include "detail_kunjunganpoli.php";
		break;

		case "edit_kunjunganpoli";
		include "edit_kunjunganpoli.php";
		break;

		case "update_kunjunganpoli";
		include "update_kunjunganpoli.php";
		break;

		case "hapus_kunjunganpoli";
		include "hapus_kunjunganpoli.php";
		break;

		case "list_spesialis";
		include "list_spesialis.php";
		break;

		case "tambah_spesialis";
		include "tambah_spesialis.php";
		break;

		case "simpan_spesialis";
		include "simpan_spesialis.php";
		break;

		case "detail_spesialis";
		include "detail_spesialis.php";
		break;

		case "edit_spesialis";
		include "edit_spesialis.php";
		break;

		case "update_spesialis";
		include "update_spesialis.php";
		break;

		case "hapus_spesialis";
		include "hapus_spesialis.php";
		break;

		case "list_tarifvisite";
		include "list_tarifvisite.php";
		break;

		case "tambah_tarifvisite";
		include "tambah_tarifvisite.php";
		break;

		case "simpan_tarifvisite";
		include "simpan_tarifvisite.php";
		break;

		case "detail_tarifvisite";
		include "detail_tarifvisite.php";
		break;

		case "edit_tarifvisite";
		include "edit_tarifvisite.php";
		break;

		case "update_tarifvisite";
		include "update_tarifvisite.php";
		break;

		case "hapus_tarifvisite";
		include "hapus_tarifvisite.php";
		break;

		case "list_perawat";
		include "list_perawat.php";
		break;

		case "tambah_perawat";
		include "tambah_perawat.php";
		break;

		case "simpan_perawat";
		include "simpan_perawat.php";
		break;

		case "detail_perawat";
		include "detail_perawat.php";
		break;

		case "edit_perawat";
		include "edit_perawat.php";
		break;

		case "update_perawat";
		include "update_perawat.php";
		break;

		case "hapus_perawat";
		include "hapus_perawat.php";
		break;

		case "list_kelas";
		include "list_kelas.php";
		break;

		case "tambah_kelas";
		include "tambah_kelas.php";
		break;

		case "simpan_kelas";
		include "simpan_kelas.php";
		break;

		case "detail_kelas";
		include "detail_kelas.php";
		break;

		case "edit_kelas";
		include "edit_kelas.php";
		break;

		case "update_kelas";
		include "update_kelas.php";
		break;

		case "hapus_kelas";
		include "hapus_kelas.php";
		break;


		case "laporan_dokter";
		include "laporan_dokter.php";
		break;

		case "laporan_ruangan";
		include "laporan_ruangan.php";
		break;

		case "laporan_perawat";
		include "laporan_perawat.php";
		break;

		case "laporan_pasien";
		include "laporan_pasien.php";
		break;

		case "laporan_kelas";
		include "laporan_kelas.php";
		break;

		case "laporan_kunjunganpoli";
		include "laporan_kunjunganpoli.php";
		break;

		case "laporan_rekammedis";
		include "laporan_rekammedis.php";
		break;

		case "filter_rekammedis";
		include "filter_rekammedis.php";
		break;

		case "laporan_tarifvisite";
		include "laporan_tarifvisite.php";
		break;

		case "filter_rekammedis";
		include "filter_rekammedis.php";
		break;

		case "logout";
		include "logout.php";
		break;
	}
?>

<?php
	include 'footer_template.php';
?>