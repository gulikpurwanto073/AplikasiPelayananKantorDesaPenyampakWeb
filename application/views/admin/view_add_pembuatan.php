<br />
      <strong>Tambah Data Pembuatan</strong><br />
      <br />
      <form id="form1" name="form1" method="post" action="<?php echo site_url('admin/pembuatan/save'); ?>">
        <table class="table">
          <tr>
            <td width="159">Nama </td>
            <td width="218"><input type="text" name="nama" id="nama" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Tempat Lahir </td>
            <td width="218"><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Tanggal Lahir </td>
            <td width="218"><input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required /></td>
          </tr>
          <tr>
            <td width="159">Jenis Kelamin </td>
            <td width="218">
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Alamat </td>
            <td width="218"><textarea name="alamat" id="alamat" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td width="159">RT/RW </td>
            <td width="218"><input type="text" name="rtrw" id="rtrw" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td width="159">Kelurahan/Desa </td>
            <td width="218"><input type="text" name="keldesa" id="keldesa" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td width="159">Kecamatan </td>
            <td width="218"><input type="text" name="kecamatan" id="kecamatan" class="form-control" required></textarea></td>
          </tr>
          <tr>
            <td width="159">Agama </td>
            <td width="218">
                <select name="agama" id="agama" class="form-control" required>
                    <option value="">Pilih Agama</option>
                    <option value="islam">islam</option>
                    <option value="katolik">katolik</option>
                    <option value="protestan">protestan</option>
                    <option value="hindu">hindu</option>
                    <option value="budha">budha</option>
                    <option value="konghuchu">konghuchu</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Status Pekerjaan </td>
            <td width="218">
                <input type="text" name="status_pekerjaan" id="status_pekerjaan" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td width="159">Status Pernikahan </td>
            <td width="218">
                <select name="status_pernikahan" id="status_pernikahan" class="form-control" required>
                    <option value="">Pilih Status Pernikahan</option>
                    <option value="menikah">menikah</option>
                    <option value="belum menikah">belum menikah</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Kewarganegaraan </td>
            <td width="218">
                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                    <option value="">Pilih Kewarganegaraan</option>
                    <option value="wna">WNA</option>
                    <option value="wni">WNI</option>
                </select>
            </td>
          </tr>
          <tr>
            <td width="159">Berlaku Hingga </td>
            <td width="218">
                <input type="date" name="berlaku_hingga" id="berlaku_hingga" class="form-control">
                <small>*kosongkan jika berlaku selamanya</small>
            </td>
          </tr>
          <tr>
            <td width="159">NIK </td>
            <td width="218">
                <input type="text" name="nik" id="nik" class="form-control" required>
            </td>
          </tr>
          <tr>
            <td width="159">Email </td>
            <td width="218">
                <input type="text" name="username" id="username" class="form-control" required>
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