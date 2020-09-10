<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include '../inc/koneksi.php';

if (isset($_POST['logout'])) {
    session_start();

    session_destroy();

    header("location:index.php");
}

/*KAWASAN START*/
if (isset($_POST['proses-batal'])) {
	$_SESSION['fungsi'] = "view";
}

if (isset($_POST['tambah-kawasan'])) {
	$kawasan 		= $_POST['kawasan'];
	$kd_kelurahan 	= $_POST['kd_kelurahan'];
	$kd_kecamatan 	= $_POST['kd_kecamatan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"INSERT INTO tbl_kawasan VALUES('','$kawasan','$kd_kelurahan','$kd_kecamatan')");
	echo "<script>alert('Berhasil Menambahkan Data.');document.location.href='kawasan.php'</script>";
}

if (isset($_POST['edit-kawasan'])) {
	$kd_kawasan	 	= $_POST['kd_kawasan'];
	$kawasan 		= $_POST['kawasan'];
	$kd_kelurahan 	= $_POST['kd_kelurahan'];
	$kd_kecamatan 	= $_POST['kd_kecamatan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"UPDATE tbl_kawasan SET kawasan='$kawasan', kd_kelurahan='$kd_kelurahan', kd_kecamatan='$kd_kecamatan' WHERE kd_kawasan='$kd_kawasan'");
	echo "<script>alert('Berhasil Mengedit Data.');document.location.href='kawasan.php'</script>";
}

if (isset($_POST['delete-kawasan'])) {
	$kd_kawasan	 		= $_POST['kd_kawasan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"DELETE FROM tbl_kawasan WHERE kd_kawasan='$kd_kawasan'");
	echo "<script>alert('Berhasil Menghapus Data.');document.location.href='kawasan.php'</script>";
}
/*KAWASAN END*/


?>