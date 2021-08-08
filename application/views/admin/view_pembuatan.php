<br />
    <strong>Data Pembuatan KTP</strong><br />
    <br />
    <div class="table-responsive">
    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama </th>
        <th>Tempat, Tanggal Lahir </th>
        <th>Jenis Kelamin </th>
        <th>Alamat </th>
        <th>Agama </th>
        <th>Status Pekerjaan </th>
        <th>Kewarganegaran </th>
        <th>Berlaku Hingga </th>
        <th>NIK </th>
        <th>Email </th>
        <th>Waktu </th>
        <th><a class="btn btn-primary" href="<?php echo site_url('admin/pembuatan/add'); ?>"><i class="fas fa-plus"></i></a></th>
    </tr>
    </thead>
    <?php
    $no=1;
    foreach ($tabelpembuatan as $rowpembuatan) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $rowpembuatan->nama; ?> </td>
        <td><?php echo $rowpembuatan->tempat_lahir; ?>, <?php echo tgl_indo($rowpembuatan->tanggal_lahir); ?> </td>
        <td><?php echo $rowpembuatan->jenis_kelamin; ?> </td>
        <td>
        <?php echo $rowpembuatan->alamat; ?> RT/RW <?php echo $rowpembuatan->rtrw; ?> Kel/Desa <?php echo $rowpembuatan->keldesa; ?> Kecamatan <?php echo $rowpembuatan->kecamatan; ?> 
        </td>
        <td><?php echo $rowpembuatan->agama; ?> </td>
        <td><?php echo $rowpembuatan->status_pekerjaan; ?> </td>
        <td><?php echo $rowpembuatan->kewarganegaraan; ?> </td>
        <td><?php echo ($rowpembuatan->berlaku_hingga=="") ? "Berlaku Selamanya" : ""; ?> </td>
        <td><?php echo $rowpembuatan->nik; ?> </td>
        <td><?php echo $rowpembuatan->username; ?> </td>
        <td><?php echo $rowpembuatan->waktu; ?> </td>
        <td>
        
        <a class="btn btn-success" href="<?php echo site_url('admin/lampiran/filter/'.$rowpembuatan->id_pembuatan); ?>"><i class="fas fa-search"></i></a> 
        <a class="btn btn-warning" href="<?php echo site_url('admin/pembuatan/edit/'.$rowpembuatan->id_pembuatan); ?>"><i class="fas fa-pen"></i></a> 
        
        <a onclick="return confirm('Hapus data?');" class="btn btn-danger" href="<?php echo site_url('admin/pembuatan/delete/'.$rowpembuatan->id_pembuatan); ?>"><i class="fas fa-trash"></i></a>
        
        </td>
    </tr>
    <?php
    }
    ?>
    </table>
    </div>
    <br />
<br />