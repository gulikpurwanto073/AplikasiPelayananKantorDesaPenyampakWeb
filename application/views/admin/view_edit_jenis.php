<br />
      <strong>Edit Data Jenis</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="<?php echo site_url('admin/jenis/update/'.$rowjenis->id_jenis); ?>">
        <table class="table">
          <tr>
            <td>ID Jenis</td>
            <td><input type="text" name="id_jenis" id="id_jenis" readonly value="<?php echo $rowjenis->id_jenis; ?>" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Jenis </td>
            <td width="218"><input type="text" name="jenis" id="jenis" class="form-control" required value="<?php echo $rowjenis->jenis; ?>"></td>
          </tr>
          <tr>
            <td width="159">Tipe </td>
            <td width="218">
                <select name="tipe" id="tipe" class="form-control" required>
                    <option value="" <?php echo ($rowjenis->tipe=="") ? "selected" : ""; ?>>Pilih Tipe</option>
                    <option value="gambar" <?php echo ($rowjenis->tipe=="gambar") ? "selected" : ""; ?>>Gambar</option>
                    <option value="file" <?php echo ($rowjenis->tipe=="file") ? "selected" : ""; ?>>File</option>
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