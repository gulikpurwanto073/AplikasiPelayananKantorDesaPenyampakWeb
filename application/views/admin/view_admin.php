<!-- <div class="row">
      <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                  <div class="card-body">
                        Pendaftar
                        <h1 class="float-right"><?=$pendaftarcount?></h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/analisa'); ?>">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
            </div>
      </div>
      <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                  <div class="card-body">
                        Pendaftar Lulus
                        <h1 class="float-right"><?=$luluscount?></h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/analisa'); ?>">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
            </div>
      </div>
      <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                  <div class="card-body">
                        Pendaftar Tidak Lulus
                        <h1 class="float-right"><?=$tidakluluscount?></h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/analisa'); ?>">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
            </div>
      </div>
      <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                  <div class="card-body">
                        Analisa
                        <h1 class="float-right">C45</h1>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="<?php echo site_url('admin/analisa/hitung'); ?>">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                  </div>
            </div>
      </div>
</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
            <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo asset_url();?>images/carousel/1.jpg" alt="First slide" width="100%">
            </div>
            <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo asset_url();?>images/carousel/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo asset_url();?>images/carousel/3.png" alt="Third slide">
            </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
      </a>
</div>