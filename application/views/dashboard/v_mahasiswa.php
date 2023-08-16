<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Daftar Mahasiswa
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-9">
                <a href="<?php echo base_url() . 'dashboard/mahasiswa_tambah'; ?>" class="btn btn-sm btn-primary">Tambah Mahasiswa baru</a>
                <br />
                <br />
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Mahasiswa</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">NIM</th>
                                    <th>NAMA</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mahasiswa_ahmadfadhilahasshaufi as $m) {
                                ?>
                                    <tr>
                                        <td><?php echo $m->NIM; ?></td>
                                        <td><?php echo $m->nama; ?></td>
                                        <td><?php echo $m->tanggal_lahir; ?></td>
                                        <td><?php echo $m->Alamat; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'dashboard/mahasiswa_edit/' . $m->NIM; ?>" class="btn btn-warning btnsm"> <i class="fa fa-pencil"></i> ubah </a>
                                            <a href="<?php echo base_url() . 'dashboard/mahasiswa_hapus/' . $m->NIM; ?>" class="btn btn-danger btnsm"> <i class="fa fa-trash"></i> hapus </a>
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