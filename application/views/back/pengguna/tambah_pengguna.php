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
                    <h4 class="card-title">Tambah Data Pengguna</h4>
                    <div class="basic-form">
                        <form action="<?= base_url('pengguna/tambah_pengguna') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="nama_pengguna">Nama Pengguna</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_pengguna" id="nama_pengguna" required class="form-control" placeholder="Nama Pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email Pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="password">Password Pengguna</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" required class="form-control" placeholder="Password Pengguna">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-sm-2 pt-0" for="hak_akses">Hak Akses</label>
                                <div class="col-sm-10">
                                    <select name="hak_akses" id="hak_akses" class="form-control" required>
                                        <option value="">
                                            ----- Pilih Hak Akses Pengguna -----
                                        </option>
                                        <option value="SISWA">SISWA</option>
                                        <option value="PETUGAS">PETUGAS</option>
                                        <option value="ADMIN">ADMIN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-dark">Tambah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->