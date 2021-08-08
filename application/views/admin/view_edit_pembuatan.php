<br />
      <strong>Edit Data Pembuatan KTP</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="<?php echo site_url('admin/pembuatan/update/'.$rowpembuatan->id_pembuatan); ?>">
        <table class="table">
          <tr>
            <td>ID Pembuatan</td>
            <td><input type="text" name="id_pembuatan" id="id_pembuatan" readonly value="<?php echo $rowpembuatan->id_pembuatan; ?>" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Nama </td>
            <td width="218"><input type="text" name="nama" id="nama" class="form-control" required value="<?php echo $rowpembuatan->nama; ?>"></td>
          </tr>
          <tr>
            <td width="159">Tempat Lahir </td>
            <td width="218"><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required value="<?php echo $rowpembuatan->tempat_lahir; ?>" /></td>
          </tr>
          <tr>
            <td width="159">Tanggal Lahir </td>
            <td width="218"><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required value="<?php echo $rowpembuatan->tanggal_lahir; ?>" /></td>
          </tr>
          <tr>
            <td width="159">Jenis Kelamin </td>
            <td width="218">
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="" <?php echo ($rowpembuatan->jenis_kelamin=="") ? "selected" : ""; ?>>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" <?php echo ($rowpembuatan->jenis_kelamin=="laki-laki") ? "selected" : ""; ?>>Laki-laki</option>
                    <option value="perempuan" <?php echo ($rowpembuatan->jenis_kelamin=="perempuan") ? "selected" : ""; ?>>Perempuan</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Alamat </td>
            <td width="218"><textarea name="alamat" id="alamat" class="form-control" required><?php echo $rowpembuatan->alamat; ?></textarea></td>
          </tr>
          <tr>
            <td width="159">RT/RW </td>
            <td width="218"><input type="text" name="rtrw" id="rtrw" class="form-control" required value="<?php echo $rowpembuatan->rtrw; ?>"></td>
          </tr>
          <tr>
            <td width="159">Kelurahan/Desa </td>
            <td width="218"><input type="text" name="keldesa" id="keldesa" class="form-control" required value="<?php echo $rowpembuatan->keldesa; ?>"></td>
          </tr>
          <tr>
            <td width="159">Kecamatan </td>
            <td width="218"><input type="text" name="kecamatan" id="kecamatan" class="form-control" required value="<?php echo $rowpembuatan->kecamatan; ?>"></td>
          </tr>
          <tr>
            <td width="159">Agama </td>
            <td width="218">
                <select name="agama" id="agama" class="form-control" required>
                    <option value="" <?php echo ($rowpembuatan->agama=="") ? "selected" : ""; ?>>Pilih Agama</option>
                    <option value="islam" <?php echo ($rowpembuatan->agama=="islam") ? "selected" : ""; ?>>islam</option>
                    <option value="katolik" <?php echo ($rowpembuatan->agama=="katolik") ? "selected" : ""; ?>>katolik</option>
                    <option value="protestan" <?php echo ($rowpembuatan->agama=="protestan") ? "selected" : ""; ?>>protestan</option>
                    <option value="hindu" <?php echo ($rowpembuatan->agama=="hindu") ? "selected" : ""; ?>>hindu</option>
                    <option value="budha" <?php echo ($rowpembuatan->agama=="budha") ? "selected" : ""; ?>>budha</option>
                    <option value="konghuchu" <?php echo ($rowpembuatan->agama=="konghuchu") ? "selected" : ""; ?>>konghuchu</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Status Pekerjaan </td>
            <td width="218">
                <input type="text" name="status_pekerjaan" id="status_pekerjaan" class="form-control" required value="<?php echo $rowpembuatan->status_pekerjaan; ?>">
            </td>
          </tr>
          <tr>
            <td width="159">Status Pernikahan </td>
            <td width="218">
                <select name="status_pernikahan" id="status_pernikahan" class="form-control" required>
                    <option value="" <?php echo ($rowpembuatan->status_pernikahan=="") ? "selected" : ""; ?>>Pilih Status Pernikahan</option>
                    <option value="menikah" <?php echo ($rowpembuatan->status_pernikahan=="menikah") ? "selected" : ""; ?>>menikah</option>
                    <option value="belum menikah" <?php echo ($rowpembuatan->status_pernikahan=="belum menikah") ? "selected" : ""; ?>>belum menikah</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Kewarganegaraan </td>
            <td width="218">
                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                    <option value="" <?php echo ($rowpembuatan->kewarganegaraan=="") ? "selected" : ""; ?>>Pilih Kewarganegaraan</option>
                    <option value="WNA" <?php echo ($rowpembuatan->kewarganegaraan=="WNA") ? "selected" : ""; ?>>WNA</option>
                    <option value="WNI" <?php echo ($rowpembuatan->kewarganegaraan=="WNI") ? "selected" : ""; ?>>WNI</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Berlaku Hingga </td>
            <td width="218">
                <input type="date" name="berlaku_hingga" id="berlaku_hingga" class="form-control" value="<?php echo $rowpembuatan->berlaku_hingga; ?>">
                <small>*kosongkan jika berlaku selamanya</small>
            </td>
          </tr>
          <tr>
            <td width="159">NIK </td>
            <td width="218">
                <input type="text" name="nik" id="nik" class="form-control" required value="<?php echo $rowpembuatan->nik; ?>">
            </td>
          </tr>
          <tr>
            <td width="159">Email </td>
            <td width="218">
                <input type="text" name="username" id="username" class="form-control" required value="<?php echo $rowpembuatan->username; ?>">
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