<br />
      <strong>Data Jenis</strong><br />
      <br />
      <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
          <th>No.</th>
          <th>Jenis </th>
          <th>Tipe </th>
          <th><a class="btn btn-primary" href="<?php echo site_url('admin/jenis/add'); ?>"><i class="fas fa-plus"></i></a></th>
        </tr>
        </thead>
        <?php
        $no=1;
        foreach ($tabeljenis as $rowjenis) {
		    ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $rowjenis->jenis; ?></td>
          <td><?php echo $rowjenis->tipe; ?></td>
          <td>
          
          <a class="btn btn-warning" href="<?php echo site_url('admin/jenis/edit/'.$rowjenis->id_jenis); ?>"><i class="fas fa-pen"></i></a> 
          
          <a onclick="return confirm('Hapus data?');" class="btn btn-danger" href="<?php echo site_url('admin/jenis/delete/'.$rowjenis->id_jenis); ?>"><i class="fas fa-trash"></i></a>
          
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
      </div>
      <br />
    <br />