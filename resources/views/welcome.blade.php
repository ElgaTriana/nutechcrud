<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tes Praktek PHP Programmmer</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- DataTables -->
  <link href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{asset('adminlte/dist/css/adminlte.min.css') }}" rel="stylesheet">
  <!-- overlayScrollbars -->
  <link href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <!-- Daterange picker -->
  <link href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
  <!-- summernote -->
  <link href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('adminlte/dist/img/nutech.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-white elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h5 class="mr-auto">List Barang</h5>
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary tambah" title="Tambah Barang"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body isikonten">
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div id="tampilmodal"></div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">List Barang</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.2"></script>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
<script>
    $(function () {
        var barang=@json($barang);
        function showData(){
            var html=``;

            html+=`
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr style="white-space: nowrap;">
                        <th>No</th>
                        <th>Barang</th>
                        <th>Foto</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>`;
                    $.each(barang, function(a, b){
                        var no=a+1;
                        html+=`<tr style="white-space: nowrap;">
                            <td>${no}</td>
                            <td>${b.barang}</td>
                            <td>
                                <img style="cursor:pointer;" src="{{ asset('fotobarang/${b.foto}') }}" width="50%" height="30%" class="detailgambar" kode="${b.foto}" kode2="${b.barang}"/>
                            </td>
                            <td style="text-align:right;">${parseInt( b.harga_beli ).toLocaleString()}</td>
                            <td style="text-align:right;"> ${parseInt( b.harga_jual ).toLocaleString()}</td>
                            <td style="text-align:right;">${parseInt( b.stok ).toLocaleString()}</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-sm btn-warning edit" kode="${b.id}"><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-danger hapus" kode="${b.id}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>`;
                    });
                html+=`</tbody>
                <tfoot>
                    <tr style="white-space: nowrap;">
                        <th>No</th>
                        <th>Barang</th>
                        <th>Foto</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
            `;

            $('.isikonten').html(html);

            $("#example1").DataTable({
              "responsive": true, "lengthChange": false, "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        }

        showData();

        $(document).on('click', '.tambah', function(){
            var html="";
            html+=`
            <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-lg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah List Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-horizontal" onsubmit="return false;" enctype="multipart/form-data" id="formtambah">
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="example-text-input" class="form-control-label">Barang</label>
                                            <input class="form-control" type="text" id="barang" name="barang" placeholder="Barang" autocomplete="off" required maxlength="50">
                                        </div>
                                        <div class="col-6">
                                            <label for="example-text-input" class="form-control-label">Stok</label>
                                            <input class="form-control" type="number" id="stok" name="stok" placeholder="Stok Barang" autocomplete="off" required  oninput="if(value.length>10)value=value.slice(0,10)">
                                        </div>
                                        <div class="col-6">
                                            <label for="example-text-input" class="form-control-label">Harga Beli</label>
                                            <input class="form-control" type="number" id="harga_beli" name="harga_beli" placeholder="Harga Beli" autocomplete="off" required oninput="if(value.length>10)value=value.slice(0,10)">
                                        </div>
                                        <div class="col-6">
                                            <label for="example-text-input" class="form-control-label">Harga Jual</label>
                                            <input class="form-control" type="number" id="harga_jual" name="harga_jual" placeholder="Harga Jual" autocomplete="off" required oninput="if(value.length>10)value=value.slice(0,10)">
                                        </div>
                                        <div class="col-12">
                                            <label for="example-text-input" class="form-control-label">Foto</label>
                                            <input class="form-control" type="file" id="foto" name="foto"  placeholder="Foto" autocomplete="off" accept="image/jpg, image/png" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>`;
            $('#tampilmodal').empty().html(html);
            $('#modaltambah').modal('show');
        });

        $(document).on("submit","#formtambah",function(e){
            var data = new FormData(this);
            if($("#formtambah")[0].checkValidity()) {
                e.preventDefault();
                $.ajax({
                    url         : "{{URL::to('/barang')}}",
                    type        : 'post',
                    data        : data,
                    dataType    : 'JSON',
                    contentType : false,
                    cache       : false,
                    processData : false,
                    beforeSend  : function (){
                        Swal.fire({
                            title: 'Masukan Data...',
                            html: 'Please wait...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: () => {
                            Swal.showLoading()
                            }
                        });
                    },
                    success : function (data) {
                        if(data.success==true){
                            Swal.fire({
                                position: 'top',
                                icon: 'success',
                                title: 'Data Barang sudah di tambah',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            location.reload();
                            // $('.isitabel').empty().load(window.location.href);
                            $('#modaltambah').modal('hide');
                        }else{
                            Swal.fire({
                                title: 'Validasi Error / Data Sudah Ada...!',
                                html: data.pesan,
                                cancelButtonText:
                                '<i class="fa fa-thumbs-down"></i>',
                                cancelButtonAriaLabel: 'Thumbs down',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                            });
                            // $('.isitabel').empty().load(window.location.href);
                        }
                    },
                    error   :function() {
                        Swal.fire({
                            title: 'Error...!',
                            html: 'Error data..',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                        });
                        // $('.isitabel').empty().load(window.location.href);
                    }
                });
            }else console.log("invalid form");
        });

        $(document).on('click', '.hapus', function(){
            kode=$(this).attr('kode');
            Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Hapus Data Ini!",
            type: "warning",
            showDenyButton: true,
            confirmButtonColor: "#DD6B55",
            denyButtonColor: "#757575",
            confirmButtonText: "Ya, Hapus!",
            denyButtonText: "Tidak, Batal!",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"{{URL::to('barang')}}/"+kode,
                        type:"DELETE",
                        success:function(result){
                            if(result.success==true){
                                Swal.fire('Deleted!', result.pesan, 'success');
                                location.reload();
                            }else{
                                Swal.fire("Error!", result.pesan, "error");
                            }
                        }
                    })
                }else if(result.isDenied) {
                    Swal.fire('Data kamu aman :)', '', 'info')
                }
            });
        });

        $(document).on('click', '.edit', function(){
            kode=$(this).attr('kode');
            var html="";
            $.ajax({
                url : "{{URL::to('barang')}}/"+kode,
                type: "GET",
                success : function (result) {
                    console.log(result)
                    html+=
                    `<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="form-horizontal" onsubmit="return false;" enctype="multipart/form-data" id="formedit">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="example-text-input" class="form-control-label">Barang</label>
                                                    <input class="form-control" type="text" id="barang_edit" value="${result.barang}" name="barang" placeholder="Barang" autocomplete="off" required maxlength="50">
                                                </div>
                                                <div class="col-6">
                                                    <label for="example-text-input" class="form-control-label">Stok</label>
                                                    <input class="form-control" type="number" id="stok_edit" value="${result.stok}" name="stok" placeholder="Stok Barang" autocomplete="off" required  oninput="if(value.length>10)value=value.slice(0,10)">
                                                </div>
                                                <div class="col-6">
                                                    <label for="example-text-input" class="form-control-label">Harga Beli</label>
                                                    <input class="form-control" type="number" id="harga_beli_edit" value="${result.harga_beli}" name="harga_beli" placeholder="Harga Beli" autocomplete="off" required oninput="if(value.length>10)value=value.slice(0,10)">
                                                </div>
                                                <div class="col-6">
                                                    <label for="example-text-input" class="form-control-label">Harga Jual</label>
                                                    <input class="form-control" type="number" id="harga_jual_edit" value="${result.harga_jual}" name="harga_jual" placeholder="Harga Jual" autocomplete="off" required oninput="if(value.length>10)value=value.slice(0,10)">
                                                </div>
                                                <div class="col-12">
                                                    <label for="example-text-input" class="form-control-label">Foto</label>
                                                    <input class="form-control" type="file" id="foto_edit" name="foto"  placeholder="Foto" autocomplete="off" accept="image/jpg, image/png">
                                                    <br>
                                                    <center><img src="{{ asset('fotobarang/${result.foto}') }}" width="75%" height="75%"/></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>`;
                    $('#tampilmodal').empty().html(html);
                    $('#modaledit').modal('show');
                },
                error   :function() {
                    console.log("error")
                }
            });
        });

        $(document).on("submit","#formedit",function(e){
            var data = new FormData(this);
            var dataurl="{{URL::to('barang')}}/"+kode;
            data.append("_method","PUT");
            if($("#formedit")[0].checkValidity()) {
                e.preventDefault();
                $.ajax({
                    url         : dataurl,
                    type        : 'post',
                    data        : data,
                    dataType    : 'JSON',
                    contentType : false,
                    cache       : false,
                    processData : false,
                    beforeSend  : function (){
                        Swal.fire({
                            title: 'Update Barang...',
                            html: 'Please wait...',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: () => {
                            Swal.showLoading()
                            }
                        });
                    },
                    success : function (data) {
                        if(data.success==true){
                            Swal.fire({
                                position: 'top',
                                icon: 'success',
                                title: 'Barang sudah di update',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            location.reload();
                            // $('.isitabel').empty().load(window.location.href);
                            $('#modaledit').modal('hide');
                        }else{
                            Swal.fire({
                                title: 'Validasi Error / Sudah ada nama yang sama..',
                                html: data.pesan,
                                cancelButtonText:
                                '<i class="fa fa-thumbs-down"></i>',
                                cancelButtonAriaLabel: 'Thumbs down',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                            });
                            // $('.isitabel').empty().load(window.location.href);
                        }
                    },
                    error   :function() {
                        Swal.fire({
                            title: 'Error...!',
                            html: 'Error data..',
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                        });
                        // $('.isitabel').empty().load(window.location.href);
                    }
                });
            }else console.log("invalid form");
        });

        $(document).on('click', '.detailgambar', function(){
            kode=$(this).attr('kode');
            kode2=$(this).attr('kode2');
            var html="";

            html+=
            `<div class="modal fade" id="modalgambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-lg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Gambar ${kode2}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('fotobarang/${kode}') }}" width="100%" height="100%"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>`;
            $('#tampilmodal').empty().html(html);
            $('#modalgambar').modal('show');
        });
    });
</script>
</body>
</html>
