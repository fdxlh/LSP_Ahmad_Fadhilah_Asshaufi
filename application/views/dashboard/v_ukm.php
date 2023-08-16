<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Daftar UKM
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-9">
                <a href="<?php echo base_url() . 'dashboard/ukm_tambah'; ?>" class="btn btn-sm btn-primary">Tambah UKM baru</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Unit Kegiatan Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">ID</th>
                                    <th>Nama UKM</th>
                                    <th>Deskripsi</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ukm_ahmadfadhilahasshaufi as $u) {
                                ?>
                                    <tr>
                                        <td><?php echo $u->ID; ?></td>
                                        <td><?php echo $u->nama_ukm; ?></td>
                                        <td><?php echo $u->deskripsi; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/ukm_edit/' . $u->ID; ?>" class="btn btn-warning btnsm"> <i class="fa fa-pencil"></i> ubah </a>
                                            <a href="<?php echo base_url() . 'dashboard/ukm_hapus/' . $u->ID; ?>" class="btn btn-danger btnsm"> <i class="fa fa-trash"></i> hapus </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>