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
                    <h5 class="font-medium m-b-0">Kawasan</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Kawasan</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->

            <!-- TAMBAH START -->
            <?php
                if (isset($_POST['proses-tambah-kawasan'])) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Tambah Kawasan</h5>
                                <form>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="text" name="kawasan">
                                                <label for="full-n">Nama Kawasan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select name="kd_kelurahan" title="Pilih Data Kelurahan">
                                                    <?php
                                                        $sqlkelurahan = mysqli_query($koneksi,"SELECT * FROM tbl_kelurahan");
                                                        while ($row = mysqli_fetch_assoc($sqlkelurahan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kelurahan'];?>"><?=$row['nama_kelurahan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kelurahan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select name="kd_kecamatan" title="Pilih Data Kecamatan">
                                                    <?php
                                                        $sqlkecamatan = mysqli_query($koneksi,"SELECT * FROM tbl_kecamatan");
                                                        while ($row = mysqli_fetch_assoc($sqlkecamatan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kecamatan'];?>"><?=$row['nama_kecamatan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kecamatan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="tambah-kawasan" class="btn waves-effect waves-light blue">
                                                <input type="submit" value="Batal" name="proses-batal" class="btn waves-effect waves-light red">
                                                <!-- <button class="btn waves-effect waves-light blue" type="submit" name="tambah-kawasan">Simpan
                                                    <i class="material-icons right">send</i>
                                                </button> -->
                                                <!-- <button class="btn waves-effect waves-light red" type="submit" name="proses-batal">Batal
                                                    <i class="material-icons right">cancel</i>
                                                </button> -->
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
                } elseif (isset($_POST['proses-edit-kawasan'])) {
                    $kd_kawasan = $_POST['kd_kawasan'];
                    $sqll       = mysqli_query($koneksi,"SELECT * FROM tbl_kawasan WHERE kd_kawasan='$kd_kawasan'");
                    while ($data = mysqli_fetch_assoc($sqll)) {
            ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title activator">Edit Kawasan</h5>
                                <form>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input type="hidden" name="kd_kawasan" value="<?=$data['$kd_kawasan'];?>">
                                                <input id="full-n" type="text" name="kawasan" value="<?=$data['$kawasan'];?>">
                                                <label for="full-n">Nama Kawasan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select name="kd_kelurahan" title="Pilih Data Kelurahan">
                                                    <option value="<?=$data['kd_kelurahan'];?>"><?=$data['nama_kelurahan'];?></option>
                                                    <?php
                                                        $sqlkelurahan = mysqli_query($koneksi,"SELECT * FROM tbl_kelurahan");
                                                        while ($row = mysqli_fetch_assoc($sqlkelurahan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kelurahan'];?>"><?=$row['nama_kelurahan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kelurahan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <select name="kd_kecamatan" title="Pilih Data Kecamatan">
                                                    <option value="<?=$data['kd_kecamatan'];?>"><?=$data['nama_kecamatan'];?></option>
                                                    <?php
                                                        $sqlkecamatan = mysqli_query($koneksi,"SELECT * FROM tbl_kecamatan");
                                                        while ($row = mysqli_fetch_assoc($sqlkecamatan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kecamatan'];?>"><?=$row['nama_kecamatan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kecamatan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="right">
                                                <input type="submit" value="Simpan" name="tambah-kawasan" class="btn waves-effect waves-light blue"><i class="material-icons right">send</i>
                                                <input type="submit" value="Batal" name="proses-batal" class="btn waves-effect waves-light blue"><i class="material-icons right">cancel</i>
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
                                <input type="submit" value="Tambah Data" name="proses-tambah-kawasan" class="btn waves-effect waves-light indigo"><i class="material-icons">plus</i>
                                </form>
                                <table id="zero_config" class="responsive-table display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Kawasan</th>
                                            <th>Nama Kelurahan</th>
                                            <th>Nama Kecamatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_kawasan INNER JOIN tbl_kelurahan ON tbl_kawasan.kd_kelurahan = tbl_kelurahan.kd_kelurahan INNER JOIN tbl_kecamatan ON tbl_kawasan.kd_kecamatan = tbl_kecamatan.kd_kecamatan");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$row['kawasan'];?></td>
                                            <td><?=$row['nama_kelurahan'];?></td>
                                            <td><?=$row['nama_kecamatan'];?></td>
                                            <td>
                                                <form action="" method="post">
                                                    <input type="hidden" name="kd_kawasan" value="<?=$row['kd_kawasan'];?>">
                                                    <button type="submit" name="proses-edit-kawasan" class="btn waves-effect waves-light"><i class="material-icons">edit</i></button>
                                                    <button type="submit" name="delete-kawasan" class="btn waves-effect waves-light red"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Kawasan</th>
                                            <th>Nama Kelurahan</th>
                                            <th>Nama Kecamatan</th>
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