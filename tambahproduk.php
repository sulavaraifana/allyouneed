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
  <!-- general form elements disabled -->
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Form Input</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="tambahdataaksi.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-form-label" for="inputSuccess"></i> Nama Barang</label>
                <input name="nama" type="text" class="form-control" placeholder="Masukan Nama Barang">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Merek</label>
                    <input name="merek" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label> Harga</label>
                    <input name="harga" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Stok</label>
                    <input name="stok" type="number" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                      <option value="Skincare">Skincare</option>
                      <option value="Bodycare">Bodycare</option>
                      <option value="Haircare"> Haircare </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label>Gambar Produk</label>
                    <div class="custom-file">
                      <input name="gambar" type="file" onchange="loadFile(event)" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <img id="output" style="height: 200px; width:200px;" class="img-fluid img-thumbnail">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>

                </div>
                <button type="submit" class="btn btn-success" value="simpan">Submit</button>
              </div>
          </div>
          <!-- jQuery -->
          <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
            $.widget.bridge("uibutton", $.ui.button);
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

    $('#customFile').change(function (e) {
        if (e.target.files.length) {
            $(this).next('.custom-file-label').html(e.target.files[0].name);
        }
    });

    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</body>

</html>