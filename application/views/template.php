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

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-info static-top">

      <a class="navbar-brand mr-1" href="index.php"><?=$judul_mini?></a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg-info">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('home'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('home/login'); ?>">
            <i class="fas fa-fw fa-sign-in-alt"></i>
            <span>Login</span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('home'); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active"><?=$title?></li>
          </ol>

          <?php include($content.".php"); ?>
          
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo asset_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo asset_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo asset_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo asset_url();?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo asset_url();?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo asset_url();?>vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo asset_url();?>js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo asset_url();?>js/demo/datatables-demo.js"></script>
    <script src="<?php echo asset_url();?>js/demo/chart-area-demo.js"></script>

  </body>

</html>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPK Metode Analytic Hierarchy Process (AHP)</title>
<style type="text/css">

body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
	font-size: 13px;
	color: #333333;
}
.style1 {
	color: #000099;
	font-size: 24px;
}
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #333333;
}
.style2 {font-weight: bold}

</style>
</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000099">
  <tr>
    <td height="50" bgcolor="#FFFFFF"><span class="style1">SPK Metode Analytic Hierarchy Process (AHP)</span></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#FFFFFF"><span class="style2"><a href="<?php echo site_url('home'); ?>">Home</a> | <a href="<?php echo site_url('statis'); ?>">AHP Statis</a> | <a href="<?php echo site_url('ahp'); ?>">Analisa dengan AHP Dinamis</a> | <a href="<?php echo site_url('home/login'); ?>">Login</a></span></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF">
      <?php include($content.".php"); ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="47%" height="35" align="left"><strong>&copy; 2014-<?php echo date('Y'); ?> ContohProgram.com</strong></td>
        <td width="53%" height="35" align="right"><strong><a href="http://contohprogram.com" target="_blank">Kontak</a> | <a href="http://contohprogram.com/ahp-ci-source-code.php" target="_blank">About</a></strong></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html> -->
