<br />
      <strong>Edit User</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="<?php echo site_url('admin/home/update/'.$rowlogin->username); ?>" enctype="multipart/form-data">
        <table class="table">
          <tr>
            <td width="128">Nama User</td>
            <td width="249"><input type="text" name="nama" id="nama" class="form-control" required value="<?=$rowlogin->nama?>" /></td>
          </tr>
          <tr>
            <td width="128">Username</td>
            <td width="249"><input type="text" name="username" id="username" class="form-control" required value="<?=$rowlogin->username?>" /></td>
          </tr>
          <tr>
            <td width="128">Password</td>
            <td width="249"><input type="password" name="password" id="password" class="form-control" required value="<?=$rowlogin->password?>" /></td>
          </tr>
          <tr>
            <td>Role</td>
            <td><select name="role" id="role" class="form-control" required>
              <option value="" <?=($rowlogin->role=="") ? "selected" : ""?>>Pilih Role</option>
              <option value="user" <?=($rowlogin->role=="user") ? "selected" : ""?>>User</option>
              <option value="admin" <?=($rowlogin->role=="admin") ? "selected" : ""?>>Admin</option>
            </select>
            </td>
          </tr>
          <tr>
            <td width="128">Foto</td>
            <td width="249">
            <input type="file" name="foto" id="foto" class="form-control" />
            <input type="hidden" name="old_foto" id="old_foto" class="form-control" required value="<?=$rowlogin->foto?>" />
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