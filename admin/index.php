<?php
include '../inc/adm.php';
if ($_SESSION['level'] == "admin") {
include 'inc/header.php';
?>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Dashboard</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Selamat Datang, <?=$_SESSION['username'];?></h5>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.444179862022!2d114.82730121425654!3d-3.484044442953164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de686b90657deff%3A0xd921b1b0c484ee01!2sBAPPEDA%20PROVINSI%20KALIMANTAN%20SELATAN!5e0!3m2!1sen!2sid!4v1599976613599!5m2!1sen!2sid" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
include 'inc/footer.php';
} else {
    header("location: ../index.php");
}
?>