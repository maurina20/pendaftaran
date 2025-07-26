<div class="col-lg-6 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Ubah Password</h4>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('hapus'); ?>
            <?= validation_errors() ?>
            <form action="<?= base_url('pengguna/ubah_password') ?>" method="post">
                <div class="form-group">
                    <label for="password_lama">Password Lama</label>
                    <input type="password" class="form-control" name="password_lama" id="password_lama" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <input type="password" class="form-control" name="password_baru" id="password_baru" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password_konfirmasi">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="password_konfirmasi" id="password_konfirmasi" autocomplete="off">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>