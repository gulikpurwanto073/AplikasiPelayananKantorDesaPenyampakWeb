<br />
<strong>Data User</strong><br />
<br />
<table id="dataTable" width="100%" cellspacing="0" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="79">No.</th>
      <th width="79">Foto</th>
      <th width="79">Username</th>
      <th width="196">Password</th>
      <th width="196">Nama</th>
      <th width="140">Role</th>
      <th width="100"><a class="btn btn-primary" href="<?php echo site_url('admin/home/add_user'); ?>"><i class="fas fa-plus"></i></a></th>
    </tr>
  </thead>
  <?php
    $no=1;
    foreach ($tabellogin as $rowlogin) {
  ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><img src="<?php echo asset_url();?>upload/user/<?php echo $rowlogin->foto; ?>" alt="" width="100px"></td>
    <td><?php echo $rowlogin->username; ?></td>
    <td><?php echo $rowlogin->password; ?></td>
    <td><?php echo $rowlogin->nama; ?></td>
    <td><?php echo $rowlogin->role; ?></td>
    <td>
      <a class="btn btn-warning" href="<?php echo site_url('admin/home/edit_user/'.$rowlogin->username); ?>"><i class="fas fa-pen"></i></a> 
      <a onclick="return confirm('Hapus data?');" class="btn btn-danger" href="<?php echo site_url('admin/home/delete/'.$rowlogin->username); ?>"><i class="fas fa-trash"></i></a>
    </td>
  </tr>
  <?php
    }
  ?>
</table>
<br>
<br>