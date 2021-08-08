<!doctype html>
<html lang="en">
  <head>
  	<title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo asset_url();?>login_assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
            <div style="margin-top:-60px"></div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4"><?php echo $title; ?></h3>
                        <?php include($content.".php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<script src="<?php echo asset_url();?>login_assets/js/jquery.min.js"></script>
    <script src="<?php echo asset_url();?>login_assets/js/popper.js"></script>
    <script src="<?php echo asset_url();?>login_assets/js/bootstrap.min.js"></script>
    <script src="<?php echo asset_url();?>login_assets/js/main.js"></script>

	</body>
</html>

