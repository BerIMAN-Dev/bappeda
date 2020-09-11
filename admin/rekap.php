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
                    <h5 class="font-medium m-b-0">Rekap Data</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Rekap Data</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

            <!-- TAMBAH START -->
            <?php
                if (isset($_POST['proses-tambah-rekap'])) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Tambah Rekap Data</h5>
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
                                                <input type="submit" value="Simpan" name="tambah-rekap" class="btn waves-effect waves-light blue">
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
                } elseif (isset($_POST['proses-edit-rekap'])) {
                    $kd_rekap = $_POST['kd_rekap'];
                    $sqll       = mysqli_query($koneksi,"SELECT * FROM tbl_rekap WHERE kd_rekap='$kd_rekap'");
                    while ($data = mysqli_fetch_assoc($sqll)) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Edit Rekap Data</h5>
                                <form method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input type="hidden" name="kd_rekap" value="<?=$data['kd_rekap'];?>">
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
                                                <input type="submit" value="Simpan" name="edit-rekap" class="btn waves-effect waves-light blue">
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
                                <input type="submit" value="Tambah Data" name="proses-tambah-rekap" class="btn waves-effect waves-light blue"><i class="material-icons">plus</i>
                                </form>
                                <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Kawasan</th>
                                            <th>Nilai 1</th>
                                            <th>Nilai 2</th>
                                            <th>Nilai 3</th>
                                            <th>Nilai 4</th>
                                            <th>Nilai 5</th>
                                            <th>Total</th>
                                            <th>Hasil</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_rekap ");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$row['kd_kawasan'];?></td>
                                            <td><?=$row['n1'];?></td>
                                            <td><?=$row['n2'];?></td>
                                            <td><?=$row['n3'];?></td>
                                            <td><?=$row['n4'];?></td>
                                            <td><?=$row['n5'];?></td>
                                            <td><?=$row['total'];?></td>
                                            <td><?=$row['hasil'];?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="kd_rekap" value="<?=$row['kd_rekap'];?>">
                                                    <button type="submit" name="proses-edit-rekap" class="btn waves-effect waves-light"><i class="material-icons">edit</i></button>
                                                    <button type="submit" name="delete-rekap" class="btn waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Kawasan</th>
                                            <th>Nilai 1</th>
                                            <th>Nilai 2</th>
                                            <th>Nilai 3</th>
                                            <th>Nilai 4</th>
                                            <th>Nilai 5</th>
                                            <th>Total</th>
                                            <th>Hasil</th>
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