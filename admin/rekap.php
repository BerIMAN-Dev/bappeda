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
                    <h5 class="font-medium m-b-0">Kelompok Umur</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Kelompok Umur</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

            <!-- TAMBAH START -->
            <?php
                if (isset($_POST['proses-tambah-kelompok-umur'])) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Tambah Kelompok Umur</h5>
                                <form method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="text" name="kelompok_umur">
                                                <label for="full-n">Kelompok Umur</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="laki_laki">
                                                <label for="full-n">Laki - Laki</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="perempuan">
                                                <label for="full-n">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="jumlah">
                                                <label for="full-n">Jumlah</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="sex_ratio">
                                                <label for="full-n">Rasio Jenis Kelamin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="tambah-kelompok-umur" class="btn waves-effect waves-light blue">
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
                } elseif (isset($_POST['proses-edit-kelompok-umur'])) {
                    $kd_umur = $_POST['kd_umur'];
                    $sqll       = mysqli_query($koneksi,"SELECT * FROM tbl_klmpkumur WHERE kd_umur='$kd_umur'");
                    while ($data = mysqli_fetch_assoc($sqll)) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Edit Kelompok Umur</h5>
                                <form method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input type="hidden" name="kd_umur" value="<?=$data['kd_umur'];?>">
                                                <input id="full-n" type="text" name="kelompok_umur" value="<?=$data['kelompok_umur'];?>">
                                                <label for="full-n">Kelompok Umur</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="laki_laki" value="<?=$data['laki_laki'];?>">
                                                <label for="full-n">Laki - Laki</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="perempuan" value="<?=$data['perempuan'];?>">
                                                <label for="full-n">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="jumlah" value="<?=$data['jumlah'];?>">
                                                <label for="full-n">Jumlah</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="sex_ratio" value="<?=$data['sex_ratio'];?>">
                                                <label for="full-n">Rasio Jenis Kelamin</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="edit-kelompok-umur" class="btn waves-effect waves-light blue">
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
                                <input type="submit" value="Tambah Data" name="proses-tambah-kelompok-umur" class="btn waves-effect waves-light blue"><i class="material-icons">plus</i>
                                </form>
                                <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Kelompok Umur</th>
                                            <th>Laki - Laki</th>
                                            <th>Perempuan</th>
                                            <th>Jumlah</th>
                                            <th>Rasio Jenis Kelamin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_klmpkumur ");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$row['kelompok_umur'];?></td>
                                            <td><?=$row['laki_laki'];?></td>
                                            <td><?=$row['perempuan'];?></td>
                                            <td><?=$row['jumlah'];?></td>
                                            <td><?=$row['sex_ratio'];?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="kd_umur" value="<?=$row['kd_umur'];?>">
                                                    <button type="submit" name="proses-edit-kelompok-umur" class="btn waves-effect waves-light"><i class="material-icons">edit</i></button>
                                                    <button type="submit" name="delete-kelompok-umur" class="btn waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Kelompok Umur</th>
                                            <th>Laki - Laki</th>
                                            <th>Perempuan</th>
                                            <th>Jumlah</th>
                                            <th>Rasio Jenis Kelamin</th>
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