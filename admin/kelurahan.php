<?php
include '../inc/adm.php';
?>
<?php
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
                    <h5 class="font-medium m-b-0">Kelurahan</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Kelurahan</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

            <!-- TAMBAH START -->
            <?php
                if (isset($_POST['proses-tambah-kelurahan'])) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Tambah Kelurahan</h5>
                                <form method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="text" name="nama_kelurahan">
                                                <label for="full-n">Nama Kelurahan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="tambah-kelurahan" class="btn waves-effect waves-light blue">
                                                <input type="submit" value="Batal" name="proses-batal" class="btn waves-effect waves-light red">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TAMBAH END -->
            <!-- EDIT START -->
            <?php
                } elseif (isset($_POST['proses-edit-kelurahan'])) {
                    $kd_kelurahan = $_POST['kd_kelurahan'];
                    $sqll       = mysqli_query($koneksi,"SELECT * FROM tbl_kelurahan WHERE kd_kelurahan='$kd_kelurahan'");
                    while ($data = mysqli_fetch_assoc($sqll)) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Edit Kelurahan</h5>
                                <form method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input type="hidden" name="kd_kelurahan" value="<?=$data['kd_kelurahan'];?>">
                                                <input id="full-n" type="text" name="nama_kelurahan" value="<?=$data['nama_kelurahan'];?>">
                                                <label for="full-n">Nama Kelurahan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="edit-kelurahan" class="btn waves-effect waves-light blue">
                                                <input type="submit" value="Batal" name="proses-batal" class="btn waves-effect waves-light red">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EDIT END -->
            <!-- VIEW START -->
            <?php
                    }
                } else {
            ?>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <form action="" method="post">
                                <input type="submit" value="Tambah Data" name="proses-tambah-kelurahan" class="btn waves-effect waves-light blue"><i class="material-icons">plus</i>
                                </form>
                                <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Kelurahan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_kelurahan ");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$row['nama_kelurahan'];?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="kd_kelurahan" value="<?=$row['kd_kelurahan'];?>">
                                                    <button type="submit" name="proses-edit-kelurahan" class="btn waves-effect waves-light"><i class="material-icons">edit</i></button>
                                                    <button type="submit" name="delete-kelurahan" class="btn waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Kelurahan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php
                }
            ?>
            
<?php
include 'inc/footer.php';
} else {
  header('location: index.php');
}
?>