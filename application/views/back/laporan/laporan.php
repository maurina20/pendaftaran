<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <form action="<?= base_url('laporan/pdf') ?>" method="post" target="_blank" enctype="multipart/form-data">
                            <h4>Filter</h4>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="id_tahun">Tahun Akademik</label>
                                        <select name="id_tahun" id="id_tahun" class="form-control">
                                            <option value="">
                                                ------- Pilih Tahun Akademik -------
                                            </option>
                                            <?php foreach ($tahun as $key => $row) { ?>
                                                <option value="<?= $row->id_tahun ?>"><?= $row->tahun_akademik ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="id_jurusan">Jurusan Pilihan</label>
                                        <select name="id_jurusan" id="id_jurusan" class="form-control">
                                            <option value="">
                                                ------- Pilih Jurusan Pilihan -------
                                            </option>
                                            <?php foreach ($jurusan as $key => $row) { ?>
                                                <option value="<?= $row->id_jurusan ?>"><?= $row->nama_jurusan ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option value="">
                                                ----- Pilih Jenis Kelamin -----
                                            </option>
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="status_daftar">Status Pendaftaran</label>
                                        <select name="status_daftar" id="status_daftar" class="form-control">
                                            <option value="">
                                                ----- Pilih Status Pendaftaran -----
                                            </option>
                                            <option value="LOLOS">LOLOS</option>
                                            <option value="TIDAK LOLOS">TIDAK LOLOS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-6">
                                <button type="submit" name="submit" class="btn btn-primary m-b-0">Laporan</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>