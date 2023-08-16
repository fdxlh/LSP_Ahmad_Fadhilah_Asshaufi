<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah
            <small>Mahasiswa</small>
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
                        <form method="post" action="<?php echo base_url('dashboard/mahasiswa_aksi') ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" name="NIM" class="form-control" placeholder="Masukkan NIM ..">
                                    <br>
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama mahasiswa ..">
                                    <br>
                                    <label>Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukkan tanggal lahir ..">
                                    <br>
                                    <label>Alamat</label>
                                    <input type="text" name="Alamat" class="form-control" placeholder="Masukkan alamat mahasiswa ..">
                                    <?php echo
                                    form_error('mahasiswa'); ?>
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