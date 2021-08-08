<br />
      <strong>Tambah Data Jenis</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="<?php echo site_url('admin/jenis/save'); ?>">
        <table class="table">
          <tr>
            <td width="159">Jenis </td>
            <td width="218"><input type="text" name="jenis" id="jenis" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Tipe </td>
            <td width="218">
                <select name="tipe" id="tipe" class="form-control" required>
                    <option value="">Pilih Tipe</option>
                    <option value="gambar">Gambar</option>
                    <option value="file">File</option>
                </select>
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