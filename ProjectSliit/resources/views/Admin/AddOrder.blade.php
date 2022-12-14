<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('Admin.admin_include.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('Admin.admin_include.header')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Order</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Order</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
            <form action="{{ route('storeOrders') }}" method="POST" enctype="multipart/form-data">
                            
                    
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Item_1</label>
                                        <input type="text" class="form-control" id="Item_1" name="Item_1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Item_2</label>
                                        <input type="text" class="form-control" id="Item_2" name="Item_2" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Item_3</label>
                                        <input type="text" class="form-control" id="Item_3" name="Item_3"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Site Name</label>
                                        <input type="text" class="form-control" id="site_Name" name="site_Name"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Site Address</label>
                                        <input type="text" class="form-control" id="site_Address" name="site_Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Supplier</label>
                                        <input type="text" class="form-control" id="Supplier" name="Supplier" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Delivery Date</label>
                                        <input type="date" class="form-control" id="Delivery_Date" name="Delivery_Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Total</label>
                                        <input type="text" class="form-control" id="Total" name="Total" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Bank Account</label>
                                        <input type="text" class="form-control" id="Bank_Acc" name="Bank_Acc"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Notes</label>
                                        <input type="text" class="form-control" id="Notes" name="Notes"  required>
                                    </div>
  
                                    {{-- <div class="form-group">
                                        <label>Delivery_status</label>
                                        <select name="Delivery_status" class="form-control select2" style="width: 100%;">
                                            <option value="No">No</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="Pending">Pending</option>
                                          
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Approval_status</label>
                                        <select name="Approval_status" class="form-control select2" style="width: 100%;">
                                            <option value="Approved">Approved</option>
                                            <option value="Decline">Decline</option>
                                            <option value="Pending">Pending</option>
                                          
                                        </select>
                                    </div> --}}
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>





        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('Admin.admin_include.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<script src="../../JS/Admin/category.js"></script>
<script src="../../JS/Validate.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        // load_home_01();
    });
</script>
</body>
</html>
