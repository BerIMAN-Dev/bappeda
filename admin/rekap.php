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
                                                <select name="kd_kawasan" title="Pilih Data Kawasan">
                                                    <?php
                                                        $sqlkawasan = mysqli_query($koneksi,"SELECT * FROM tbl_kawasan");
                                                        while ($row = mysqli_fetch_assoc($sqlkawasan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kawasan'];?>"><?=$row['kawasan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kawasan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n1">
                                                <label for="full-n">Nilai 1</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n2">
                                                <label for="full-n">Nilai 2</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n3">
                                                <label for="full-n">Nilai 3</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n4">
                                                <label for="full-n">Nilai 4</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n5">
                                                <label for="full-n">Nilai 5</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="total">
                                                <label for="full-n">Total</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="hasil">
                                                <label for="full-n">Hasil</label>
                                            </div>
                                        </div> -->
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
                    $sqll       = mysqli_query($koneksi,"SELECT * FROM tbl_rekap INNER JOIN tbl_kawasan ON tbl_rekap.kd_kawasan = tbl_kawasan.kd_kawasan WHERE kd_rekap='$kd_rekap'");
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
                                                <input type="hidden" name="kd_rekap" value="<?=$data['kd_rekap']?>">
                                                <select name="kd_kawasan" title="Pilih Data Kawasan">
                                                    <option value="<?=$data['kd_kawasan'];?>"><?=$data['nama_kawasan'];?></option>
                                                    <?php
                                                        $sqlkawasan = mysqli_query($koneksi,"SELECT * FROM tbl_kawasan");
                                                        while ($row = mysqli_fetch_assoc($sqlkawasan)) {
                                                    ?>
                                                        <option value="<?=$row['kd_kawasan'];?>"><?=$row['kawasan'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                <label>Nama Kawasan</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n1" value="<?=$data['n1']?>">
                                                <label for="full-n">Nilai 1</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n2" value="<?=$data['n2']?>">
                                                <label for="full-n">Nilai 2</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n3" value="<?=$data['n3']?>">
                                                <label for="full-n">Nilai 3</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n4" value="<?=$data['n4']?>">
                                                <label for="full-n">Nilai 4</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="n5" value="<?=$data['n5']?>">
                                                <label for="full-n">Nilai 5</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="total" value="<?=$data['total']?>">
                                                <label for="full-n">Total</label>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <input id="full-n" type="number" name="hasil" value="<?=$data['hasil']?>">
                                                <label for="full-n">Hasil</label>
                                            </div>
                                        </div> -->
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
                                        $sql = mysqli_query($koneksi,"SELECT * FROM tbl_rekap INNER JOIN tbl_kawasan ON tbl_rekap.kd_kawasan = tbl_kawasan.kd_kawasan");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?=$row['kawasan'];?></td>
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