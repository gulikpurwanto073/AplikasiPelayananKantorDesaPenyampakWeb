<?php
  $judul = ucwords("aplikasi pelayanan di kantor desa penyampak berbasis android");
  $judul_mini = "Kantor Desa Penyampak";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$judul?></title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo asset_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo asset_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo asset_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo asset_url();?>css/sb-admin.css" rel="stylesheet">
    
    <!-- Font Awesome-->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> -->
    
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-info static-top">

      <a class="navbar-brand mr-1" href="<?php echo site_url('admin/home'); ?>"><?=$judul_mini?></a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="<?php echo site_url('admin/home'); ?>">
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <div class="input-group" hidden>
              <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                  <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
              </div>
          </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('nama')?> <i class="fas fa-user"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <center><?=$this->session->userdata('nama')?></center>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('admin/home/ganti_password'); ?>">Ganti Password</a>
                <a class="dropdown-item" href="<?php echo site_url('home/logout'); ?>">Logout</a>
            </div>
        </li>
      </ul>
    </nav>

    <div id="wrapper"> 
      
    <!-- <?php echo $_SESSION['userlogin']; ?> -->

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg-info">

        <li class="nav-item <?=($content=="view_admin") ? "active" : ""?>">
          <a class="nav-link" href="<?php echo site_url('admin/home'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>

        <li class="nav-item <?=($content=="view_user" || $content=="view_add_user" || $content=="view_edit_user") ? "active" : ""?>">
          <a class="nav-link" href="<?php echo site_url('admin/home/user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
        </li>

        <li class="nav-item <?=($content=="view_jenis" || $content=="view_add_jenis" || $content=="view_edit_jenis") ? "active" : ""?>">
          <a class="nav-link" href="<?php echo site_url('admin/jenis'); ?>">
            <i class="fas fa-fw fa-th"></i>
            <span>Jenis</span></a>
        </li>

        <li class="nav-item <?=($content=="view_pembuatan" || $content=="view_add_pembuatan" || $content=="view_edit_pembuatan") ? "active" : ""?>">
          <a class="nav-link" href="<?php echo site_url('admin/pembuatan'); ?>">
            <i class="fas fa-fw fa-th"></i>
            <span>Pengajuan Pembuatan KTP</span></a>
        </li>

        <li class="nav-item <?=($content=="view_kritiksaran" || $content=="view_add_kritiksaran" || $content=="view_edit_kritiksaran") ? "active" : ""?>">
          <a class="nav-link" href="<?php echo site_url('admin/kritiksaran'); ?>">
            <i class="fas fa-fw fa-th"></i>
            <span>Kritik dan Saran</span></a>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/home'); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active"><?=$title?></li>
          </ol>

          <div class="row">
            <div class="col-lg-12">

              <?php include($content.".php"); ?>
          
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span><?=$judul?></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php if ($content=="view_alternatif_kriteria") { ?>
    <?php } else { ?>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo asset_url();?>vendor/jquery/jquery.min.js"></script>
    <?php } ?>
    <script src="<?php echo asset_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo asset_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <!-- <script src="<?php echo asset_url();?>vendor/chart.js/Chart.min.js"></script> -->
    <script src="<?php echo asset_url();?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo asset_url();?>vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo asset_url();?>js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo asset_url();?>js/demo/datatables-demo.js"></script>
    <!-- <script src="<?php echo asset_url();?>js/demo/chart-area-demo.js"></script> -->
    <script type="text/javascript">
		$("#ExportExcel").click(function(e) {
			var a = document.createElement('a');
			//getting data from our div that contains the HTML table
			var data_type = 'data:application/vnd.ms-excel';
			var table_div = document.getElementById('perhitungan');
			var table_html = table_div.outerHTML.replace(/ /g, '%20');
			a.href = data_type + ', ' + table_html;
			//setting the file name
			a.download = 'download.xls';
			//triggering the function
			a.click();
			//just in case, prevent default behaviour
			e.preventDefault();
		});
	</script>
	<!-- <script>
		$('#coll').click(function(){ //you can give id or class name here for $('button')
			$(this).text(function(i,old){
				return old=='Show More' ?  'Show Less' : 'Show More';
			});
		});
	</script> -->
  </body>

</html>