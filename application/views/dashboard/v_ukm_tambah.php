<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah
            <small>UKM</small>
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
                        <h3 class="box-title">UKM</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" action="<?php echo base_url('dashboard/ukm_aksi') ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="ID" class="form-control" placeholder="Masukkan ID ..">
                                    <br>
                                    <label>Nama UKM</label>
                                    <input type="text" name="nama_ukm" class="form-control" placeholder="Masukkan nama ukm ..">
                                    <br>
                                    <label>Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi UKM ..">
                                    <br>
                                    <?php echo
                                    form_error('ukm'); ?>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" class="btn btn-success" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>