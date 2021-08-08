<br />
<strong>Data Lampiran</strong><br />
<br />
<strong>Update Status Pembuatan</strong>
<form id="form1" name="form1" method="post" action="<?php echo site_url('admin/pembuatan/updatestatus/'.$pembuatan->id_pembuatan); ?>">
    <div class="form-group">
        <label for="status_pembuatan">Status Pembuatan</label>
        <select name="status_pembuatan" id="status_pembuatan" class="form-control" required>
            <option value="Dikirim" <?php echo ($pembuatan->status_pembuatan=="Dikirim") ? "selected" : ""; ?>>Dikirim</option>
            <option value="Tahap Verifikasi" <?php echo ($pembuatan->status_pembuatan=="Tahap Verifikasi") ? "selected" : ""; ?>>Tahap Verifikasi</option>
            <option value="Menunggu Proses Cetak" <?php echo ($pembuatan->status_pembuatan=="Menunggu Proses Cetak") ? "selected" : ""; ?>>Menunggu Proses Cetak</option>
            <option value="Proses Cetak Selesai" <?php echo ($pembuatan->status_pembuatan=="Proses Cetak Selesai") ? "selected" : ""; ?>>Proses Cetak Selesai</option>
            <option value="" <?php echo ($pembuatan->status_pembuatan=="") ? "selected" : ""; ?>>Koreksi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status_pembuatan">Catatan</label>
        <textarea name="catatan" id="catatan" class="form-control" required><?php echo $pembuatan->catatan; ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" id="button" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Kirim</button>
    </div>
</form>
<table class="table table-bordered">
    <tr>
        <th>Nama </th>
        <td><?php echo $pembuatan->nama; ?> </td>
    </tr>
    <tr>
        <th>Tempat, Tanggal Lahir </th>
        <td><?php echo $pembuatan->tempat_lahir; ?>, <?php echo $pembuatan->tanggal_lahir; ?> </td>
    </tr>
    <tr>
        <th>Jenis Kelamin </th>
        <td><?php echo $pembuatan->jenis_kelamin; ?> </td>
    </tr>
    <tr>
        <th>Alamat </th>
        <td>
        <?php echo $pembuatan->alamat; ?> RT/RW <?php echo $pembuatan->rtrw; ?> Kel/Desa <?php echo $pembuatan->keldesa; ?> Kecamatan <?php echo $pembuatan->kecamatan; ?> 
        </td>
    </tr>
    <tr>
        <th>Agama </th>
        <td><?php echo $pembuatan->agama; ?> </td>
    </tr>
    <tr>
        <th>Status Pekerjaan </th>
        <td><?php echo $pembuatan->status_pekerjaan; ?> </td>
    </tr>
    <tr>
        <th>Kewarganegaran </th>
        <td><?php echo $pembuatan->kewarganegaraan; ?> </td>
    </tr>
    <tr>
        <th>Berlaku Hingga </th>
        <td><?php echo ($pembuatan->berlaku_hingga=="") ? "Berlaku Selamanya" : ""; ?> </td>
    </tr>
    <tr>
        <th>NIK </th>
        <td><?php echo $pembuatan->nik; ?> </td>
    </tr>
    <tr>
        <th>Email </th>
        <td><?php echo $pembuatan->username; ?> </td>
    </tr>
    <tr>
        <th>Waktu Pengajuan </th>
        <td><?php echo $pembuatan->waktu; ?> </td>
    </tr>
</table>
<div class="table-responsive">
    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th width="70%">Nama Lampiran </th>
                <th>File </th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach ($tabeljenis as $rowjenis) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $rowjenis->jenis; ?></td>
                <td>
                    <?php foreach ($tabellampiran as $rowlampiran) { ?>
                        <?php if ($rowlampiran->id_jenis==$rowjenis->id_jenis) { ?>
                        
                        <a class="btn btn-success" target="_blank" href="<?php echo asset_url();?>upload/lampiran/<?php echo $rowlampiran->file; ?>"><i class="fas fa-search"></i></a>
                        <!-- <br> -->
                        <a onclick="return confirm('Hapus data?');" class="btn btn-danger" href="<?php echo site_url('admin/lampiran/delete/'.$rowlampiran->id_lampiran.'/'.$pembuatan->id_pembuatan); ?>"><i class="fas fa-trash"></i></a>

                        <?php } ?>
                    <?php } ?>
                    
                    <a class="btn btn-primary" href="" data-toggle="modal" data-target="#addLampiranModal<?=$rowjenis->id_jenis?>"><i class="fas fa-edit"></i></a> 
                    
                    <!-- addLampiranModal -->
                    <div class="modal fade" id="addLampiranModal<?=$rowjenis->id_jenis?>" tabindex="-1" role="dialog" aria-labelledby="addLampiranModal<?=$rowjenis->id_jenis?>Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addLampiranModal<?=$rowjenis->id_jenis?>Label">Add Lampiran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo site_url('admin/lampiran/save'); ?>" method="POST" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="id_pembuatan" value="<?=$pembuatan->id_pembuatan?>">
                                    <input type="hidden" name="id_jenis" value="<?=$rowjenis->id_jenis?>">
                                    <input type="file" class="form-control" name="file" required>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>

<br />
<br />