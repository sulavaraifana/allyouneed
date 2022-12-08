<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(0);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="AdminLTE/plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="AdminLTE/plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="AdminLTE/plugins/summernote/summernote-bs4.min.css" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body>

    <?php
    include "koneksi.php";
    $id = $_GET['no'];
    $query_mysqli = mysqli_query($koneksi, "SELECT*FROM produk WHERE id='$id'");
    foreach ($query_mysqli as $data) :
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form update</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="update-aksi.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <label class="col-form-label" for="inputSuccess"></i> Nama Barang</label>

                                    <input name="nama" type="text" class="form-control" value="<?= $data['nama'] ?>">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Merek</label>
                                            <input name="merek" type="text" class="form-control" value="<?= $data['merek'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Harga</label>
                                            <input name="harga" type="number" class="form-control" value="<?= $data['harga'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input name="stok" type="number" class="form-control" value="<?= $data['stok'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" name="kategori" <?= $data['kategori'] ?>>
                                                <option value="">Pilih Kategori</option>
                                                <option <?php if ($data['kategori'] == 'Skincare') {
                                                        ?>selected<?php
                                                                } ?> value="Skincare">Skincare</option>
                                                <option <?php if ($data['kategori'] == 'Bodycare') {
                                                        ?>selected<?php
                                                                } ?> value="Bodycae">Bodycare</option>
                                                <option <?php if ($data['kategori'] == 'Haircare') {
                                                        ?>selected<?php
                                                                } ?> value="Haircare"> Haircare </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label>Gambar Produk</label>
                                            <input name="gambar" class="form-control" type="file">
                                            <img width="130" src="images/<?= $data['image'] ?>" alt="" width="600px">
                                            <input type="hidden" name="gambar_old" value="<?= $data['image'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Deskripsi</label>
                                            <textarea name="deskripsi" class="form-control" rows="3"><?= $data['deskripsi'] ?></textarea>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-success" value="simpan">Submit</button>
                                <?php endforeach; ?>
                            </form>
                        </div>

                    </div>
                    <!-- jQuery -->
                    <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
                    <!-- jQuery UI 1.11.4 -->
                    <script src="AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                    <script>

                    </script>
                    <!-- Bootstrap 4 -->
                    <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- ChartJS -->
                    <script src="AdminLTE/plugins/chart.js/Chart.min.js"></script>
                    <!-- Sparkline -->
                    <script src="AdminLTE/plugins/sparklines/sparkline.js"></script>
                    <!-- JQVMap -->
                    <script src="AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
                    <script src="AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
                    <!-- jQuery Knob Chart -->
                    <script src="AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
                    <!-- daterangepicker -->
                    <script src="AdminLTE/plugins/moment/moment.min.js"></script>
                    <script src="AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
                    <!-- Tempusdominus Bootstrap 4 -->
                    <script src="AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                    <!-- Summernote -->
                    <script src="AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
                    <!-- overlayScrollbars -->
                    <script src="AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="AdminLTE/dist/js/adminlte.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <!-- <script src="admlte/dist/js/demo.js"></script> -->
                    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    <script src="AdminLTE/dist/js/pages/dashboard.js"></script>
                    <script type="text/javascript">

                    </script>
</body>

</html>