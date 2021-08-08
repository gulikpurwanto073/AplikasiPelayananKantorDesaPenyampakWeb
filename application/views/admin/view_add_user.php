<br />
<strong>Tambah User</strong><br />
<br />
<form id="form1" name="form1" method="post" action="<?php echo site_url('admin/home/save'); ?>" enctype="multipart/form-data">
  <table class="table">
    <tr>
      <td width="128">Nama User</td>
      <td width="249"><input type="text" name="nama" id="nama" class="form-control" required /></td>
    </tr>
    <tr>
      <td width="128">Username</td>
      <td width="249"><input type="text" name="username" id="username" class="form-control" required /></td>
    </tr>
    <tr>
      <td width="128">Password</td>
      <td width="249"><input type="password" name="password" id="password" class="form-control" required /></td>
    </tr>
    <tr>
      <td>Role</td>
      <td><select name="role" id="role" class="form-control" required>
        <option value="">Pilih Role</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>
      </td>
    </tr>
    <tr>
      <td width="128">Foto</td>
      <td width="249">
      <input type="file" name="foto" id="foto" class="form-control" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><button type="submit" id="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button></td>
    </tr>
  </table>
</form>
<br />
<br />