<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
include '../inc/koneksi.php';

if (isset($_POST['logout'])) {
    session_start();
    session_destroy();

    header("location: ../index.php");
}

if (isset($_POST['proses-batal'])) {
	$_SESSION['fungsi'] = "view";
}

/*KAWASAN START*/
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

/*KECAMATAN START*/
if (isset($_POST['tambah-kecamatan'])) {
	$nama_kecamatan	= $_POST['nama_kecamatan'];
	$luas 			= $_POST['luas'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"INSERT INTO tbl_kecamatan VALUES('','$nama_kecamatan','$luas')");
	echo "<script>alert('Berhasil Menambahkan Data.');document.location.href='kecamatan.php'</script>";
}

if (isset($_POST['edit-kecamatan'])) {
	$kd_kecamatan	= $_POST['kd_kecamatan'];
	$nama_kecamatan = $_POST['nama_kecamatan'];
	$luas 			= $_POST['luas'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"UPDATE tbl_kecamatan SET nama_kecamatan='$nama_kecamatan', luas='$luas' WHERE kd_kecamatan='$kd_kecamatan'");
	echo "<script>alert('Berhasil Mengedit Data.');document.location.href='kecamatan.php'</script>";
}

if (isset($_POST['delete-kecamatan'])) {
	$kd_kecamatan	 	= $_POST['kd_kecamatan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"DELETE FROM tbl_kecamatan WHERE kd_kecamatan='$kd_kecamatan'");
	echo "<script>alert('Berhasil Menghapus Data.');document.location.href='kecamatan.php'</script>";
}
/*KECAMATAN END*/

/*KELURAHAN START*/
if (isset($_POST['tambah-kelurahan'])) {
	$nama_kelurahan		= $_POST['nama_kelurahan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"INSERT INTO tbl_kelurahan VALUES('','$nama_kelurahan')");
	echo "<script>alert('Berhasil Menambahkan Data.');document.location.href='kelurahan.php'</script>";
}

if (isset($_POST['edit-kelurahan'])) {
	$kd_kelurahan		= $_POST['kd_kelurahan'];
	$nama_kelurahan 	= $_POST['nama_kelurahan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"UPDATE tbl_kelurahan SET nama_kelurahan='$nama_kelurahan' WHERE kd_kelurahan='$kd_kelurahan'");
	echo "<script>alert('Berhasil Mengedit Data.');document.location.href='kelurahan.php'</script>";
}

if (isset($_POST['delete-kelurahan'])) {
	$kd_kelurahan	 	= $_POST['kd_kelurahan'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"DELETE FROM tbl_kelurahan WHERE kd_kelurahan='$kd_kelurahan'");
	echo "<script>alert('Berhasil Menghapus Data.');document.location.href='kelurahan.php'</script>";
}
/*KELURAHAN END*/

/*KELOMPOK UMUR START*/
if (isset($_POST['tambah-kelompok-umur'])) {
	$kelompok_umur	= $_POST['kelompok_umur'];
	$laki_laki		= $_POST['laki_laki'];
	$perempuan 		= $_POST['perempuan'];
	$jumlah 		= ($laki_laki+$perempuan);
	$sex_ratio 		= ($laki_laki/$perempuan)*100;
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"INSERT INTO tbl_klmpkumur VALUES('','$kelompok_umur','$laki_laki','$perempuan','$jumlah','$sex_ratio')");
	echo "<script>alert('Berhasil Menambahkan Data.');document.location.href='kelompok_umur.php'</script>";
}

if (isset($_POST['edit-kelompok-umur'])) {
	$kd_umur		= $_POST['kd_umur'];
	$kelompok_umur 	= $_POST['kelompok_umur'];
	$laki_laki		= $_POST['laki_laki'];
	$perempuan 		= $_POST['perempuan'];
	$jumlah 		= ($laki_laki+$perempuan);
	$sex_ratio 		= ($laki_laki/$perempuan)*100;
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"UPDATE tbl_klmpkumur SET kelompok_umur='$kelompok_umur',laki_laki='$laki_laki',perempuan='$perempuan',jumlah='$jumlah',sex_ratio='$sex_ratio' WHERE kd_umur='$kd_umur'");
	echo "<script>alert('Berhasil Mengedit Data.');document.location.href='kelompok_umur.php'</script>";
}

if (isset($_POST['delete-kelompok-umur'])) {
	$kd_umur	 		= $_POST['kd_umur'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"DELETE FROM tbl_klmpkumur WHERE kd_umur='$kd_umur'");
	echo "<script>alert('Berhasil Menghapus Data.');document.location.href='kelompok_umur.php'</script>";
}
/*KELOMPOK UMUR END*/

/*REKAP START*/
if (isset($_POST['tambah-rekap'])) {
	$kd_kawasan	= $_POST['kd_kawasan'];
	$n1			= $_POST['n1'];
	$n2 		= $_POST['n2'];
	$n3 		= $_POST['n3'];
	$n4 		= $_POST['n4'];
	$n5 		= $_POST['n5'];
	$total 		= $n1+$n2+$n3+$n4+$n5;
	if ($total<=165){
		$hasil       = "Rendah";
	}
	else if ($total<=234){
		$hasil       = "Sedang";    
	}
	else if ($total<=300){
		$hasil       = "Tinggi";    
	}
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"INSERT INTO tbl_rekap VALUES('','$kd_kawasan','$n1','$n2','$n3','$n4','$n5','$total','$hasil')");
	echo "<script>alert('Berhasil Menambahkan Data.');document.location.href='rekap.php'</script>";
}

if (isset($_POST['edit-rekap'])) {
	$kd_rekap	= $_POST['kd_rekap'];
	$kd_kawasan = $_POST['kd_kawasan'];
	$n1			= $_POST['n1'];
	$n2 		= $_POST['n2'];
	$n3 		= $_POST['n3'];
	$n4 		= $_POST['n4'];
	$n5 		= $_POST['n5'];
	$total 		= $n1+$n2+$n3+$n4+$n5;
	if ($total<=165){
		$hasil       = "Rendah";
	}
	else if ($total<=234){
		$hasil       = "Sedang";    
	}
	else if ($total<=300){
		$hasil       = "Tinggi";    
	}
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"UPDATE tbl_rekap SET kd_kawasan='$kd_kawasan',n1='$n1',n2='$n2',n3='$n3',n4='$n4',n5='$n5',total='$total',hasil='$hasil' WHERE kd_rekap='$kd_rekap'");
	echo "<script>alert('Berhasil Mengedit Data.');document.location.href='rekap.php'</script>";
}

if (isset($_POST['delete-rekap'])) {
	$kd_rekap	 		= $_POST['kd_rekap'];
	$_SESSION['fungsi'] = "view";

	$sql = mysqli_query($koneksi,"DELETE FROM tbl_rekap WHERE kd_rekap='$kd_rekap'");
	echo "<script>alert('Berhasil Menghapus Data.');document.location.href='rekap.php'</script>";
}
/*REKAP END*/
?>