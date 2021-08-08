<br />
      <strong>Data Kritik dan Saran</strong><br />
      <br />
      <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
          <th>No.</th>
          <th>Username </th>
          <th>Kritik dan Saran </th>
          <th>Waktu </th>
          <!-- <th><a class="btn btn-primary" href="<?php echo site_url('admin/kritiksaran/add'); ?>"><i class="fas fa-plus"></i></a></th> -->
          <th>Aksi</th>
        </tr>
        </thead>
        <?php
        $no=1;
        foreach ($tabelkritiksaran as $rowkritiksaran) {
		    ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $rowkritiksaran->username; ?></td>
          <td><?php echo $rowkritiksaran->kritiksaran; ?></td>
          <td><?php echo $rowkritiksaran->waktu; ?></td>
          <td>
          
          <!-- <a class="btn btn-warning" href="<?php echo site_url('admin/kritiksaran/edit/'.$rowkritiksaran->id_kritiksaran); ?>"><i class="fas fa-pen"></i></a>  -->
          
          <a onclick="return confirm('Hapus data?');" class="btn btn-danger" href="<?php echo site_url('admin/kritiksaran/delete/'.$rowkritiksaran->id_kritiksaran); ?>"><i class="fas fa-trash"></i></a>
          
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
      </div>
      <br />
    <br />