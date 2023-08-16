<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit
            <small>Edit Mahasiswa</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo base_url() . 'dashboard/mahasiswa'; ?>" class="btn btn-primary">Kembali</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <?php foreach ($mahasiswa_ahmadfadhilahasshaufi as $m) { ?>
                            <form method="post" action="<?php echo
                                                        base_url('dashboard/mahasiswa_update') ?>">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Nama Mahasiswa</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa .." value="<?php echo $m->nama; ?>">
                                        <?php echo
                                        form_error('Mahasiswa'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Mahasiswa .." value="<?php echo $m->tanggal_lahir; ?>">
                                        <?php echo
                                        form_error('Mahasiswa'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="Alamat" class="form-control" placeholder="Masukkan Alamat Mahasiswa .." value="<?php echo $m->Alamat; ?>">
                                        <?php echo
                                        form_error('Mahasiswa'); ?>
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