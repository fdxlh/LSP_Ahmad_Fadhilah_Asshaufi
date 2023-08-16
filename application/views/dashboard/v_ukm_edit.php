<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit
            <small>Edit UKM</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url() . 'dashboard/ukm'; ?>" class="btn btn-primary">Kembali</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <?php foreach ($ukm_ahmadfadhilahasshaufi as $u) { ?>
                            <form method="post" action="<?php echo
                                                        base_url('dashboard/ukm_update') ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nama UKM</label>
                                        <input type="text" name="nama_ukm" class="form-control" placeholder="Masukkan Nama UKM .." value="<?php echo $u->nama_ukm; ?>">
                                        <?php echo
                                        form_error('ukm'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi .." value="<?php echo $u->deskripsi; ?>">
                                        <?php echo
                                        form_error('tanggal_lahir'); ?>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <input type="submit" class="btn btn-success" value="Update">
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>