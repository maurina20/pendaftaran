<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ubah Data Pengguna</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->flashdata('hapus'); ?>
                    <?= validation_errors() ?>
                    <div class="basic-form">
                        <form action="<?= base_url('pengguna/ubah_pengguna') ?>" method="post">
                            <div class="form-group row">
                                <input type="hidden" class="form-control" name="email_lama" value="<?= $penggunak->email ?>" required>
                                <input type="hidden" name="id_pengguna" value="<?= $penggunak->id_pengguna ?>" class="form-control">
                                <label class="col-sm-2 col-form-label" for="nama_pengguna">Nama Pengguna</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_pengguna" value="<?= $penggunak->nama_pengguna ?>" id="nama_pengguna" required class="form-control" placeholder="Nama Pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $penggunak->email ?>" required placeholder="Email Pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 pt-0" for="hak_akses">Hak Akses</label>
                                <div class="col-sm-10">
                                    <select name="hak_akses" id="hak_akses" class="form-control" required>
                                        <option value="" disabled>
                                            ----- Pilih Hak Akses Pengguna -----
                                        </option>
                                        <option value="SISWA" <?= $penggunak->hak_akses == "SISWA" ? 'selected' : null ?>>SISWA</option>
                                        <option value="PETUGAS" <?= $penggunak->hak_akses == "PETUGAS" ? 'selected' : null ?>>PETUGAS</option>
                                        <option value="ADMIN" <?= $penggunak->hak_akses == "ADMIN" ? 'selected' : null ?>>ADMIN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 pt-0" for="status_pengguna">Status Pengguna</label>
                                <div class="col-sm-10">
                                    <select name="status_pengguna" id="status_pengguna" class="form-control" required>
                                        <option value="" disabled>
                                            ----- Pilih Status Pengguna -----
                                        </option>
                                        <option value="AKTIF" <?= $penggunak->status_pengguna == "AKTIF" ? 'selected' : null ?>>AKTIF</option>
                                        <option value="NON-AKTIF" <?= $penggunak->status_pengguna == "NON-AKTIF" ? 'selected' : null ?>>NON-AKTIF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-dark">Ubah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>