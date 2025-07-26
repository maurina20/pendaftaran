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
                        <h4>Data Siswa</h4>
                        <section>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap Siswa</label>
                                        <input class="form-control" type="text" name="nama_lengkap" value="<?= $biok->nama_lengkap ?>" readonly placeholder="Nama Lengkap Siswa">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input class="form-control" type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?= $biok->jenis_kelamin ?>" readonly placeholder="Jenis Kelamin Siswa">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input class="form-control" id='nik' type="text" name="nik" readonly value="<?= $biok->nik ?>" placeholder="Nomor Induk Kependudukan">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input class="form-control" id='nisn' type="text" name="nisn" readonly value="<?= $biok->nisn ?>" placeholder="Nomor Induk Siswa Nasional">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input class="form-control" id='tempat_lahir' type="text" name="tempat_lahir" readonly value="<?= $biok->tempat_lahir ?>" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input class="form-control" id='tgl_lahir' type="date" name="tgl_lahir" value="<?= $biok->tgl_lahir ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input class="form-control" id='agama' type="text" name="agama" value="<?= $biok->agama ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kontak_hp_siswa">No. Kontak Siswa</label>
                                        <input class="form-control" id="kontak_hp_siswa" type="text" name="kontak_hp_siswa" readonly value="<?= $biok->kontak_hp_siswa ?>" placeholder="Nomor Kontak Siswa">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat_siswa">Alamat Siswa</label>
                                        <input class="form-control" id='alamat_siswa' type="text" name="alamat_siswa" readonly value="<?= $biok->alamat_siswa ?>" placeholder="Alamat Siswa (Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desa_siswa">Desa Asal Siswa</label>
                                        <input class="form-control" id='desa_siswa' type="text" name="desa_siswa" readonly value="<?= $biok->desa_siswa ?>" placeholder="Desa Asal Siswa">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kecamatan_siswa">Kecamatan Asal Siswa</label>
                                        <input class="form-control" id='kecamatan_siswa' type="text" name="kecamatan_siswa" readonly value="<?= $biok->kecamatan_siswa ?>" placeholder="Kecamatan Asal Siswa">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kabupaten_siswa">Kabupaten Asal Siswa</label>
                                        <input class="form-control" id='kabupaten_siswa' type="text" name="kabupaten_siswa" readonly value="<?= $biok->kabupaten_siswa ?>" placeholder="Kabupaten Asal Siswa">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="provinsi_siswa">Provinsi Asal Siswa</label>
                                        <input class="form-control" id='provinsi_siswa' type="text" name="provinsi_siswa" readonly value="<?= $biok->provinsi_siswa ?>" placeholder="Provinsi Asal Siswa">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h4>Sekolah Asal</h4>
                        <section>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input class="form-control" id="asal_sekolah" type="text" name="asal_sekolah" readonly value="<?= $biok->asal_sekolah ?>" placeholder="Asal Sekolah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tahun_lulus">Tahun Lulus</label>
                                        <input class="form-control" id='tahun_lulus' type="number" name="tahun_lulus" readonly value="<?= $biok->tahun_lulus ?>" placeholder="Tahun Lulus">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat_sekolah">Alamat Sekolah</label>
                                        <input class="form-control" id='alamat_sekolah' type="text" name="alamat_sekolah" readonly value="<?= $biok->alamat_sekolah ?>" placeholder="Alamat Sekolah (Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desa_sekolah">Desa Asal Sekolah</label>
                                        <input class="form-control" id='desa_sekolah' type="text" name="desa_sekolah" readonly value="<?= $biok->desa_sekolah ?>" placeholder="Desa Asal Sekolah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kecamatan_sekolah">Kecamatan Asal Sekolah</label>
                                        <input class="form-control" id='kecamatan_sekolah' type="text" name="kecamatan_sekolah" readonly value="<?= $biok->kecamatan_sekolah ?>" placeholder="Kecamatan Asal Sekolah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kabupaten_sekolah">Kabupaten Asal Sekolah</label>
                                        <input class="form-control" id='kabupaten_sekolah' type="text" name="kabupaten_sekolah" readonly value="<?= $biok->kabupaten_sekolah ?>" placeholder="Kabupaten Asal Sekolah">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="provinsi_sekolah">Provinsi Asal Sekolah</label>
                                        <input class="form-control" id='provinsi_sekolah' type="text" name="provinsi_sekolah" readonly value="<?= $biok->provinsi_sekolah ?>" placeholder="Provinsi Asal Sekolah">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h4>Data Orang Tua</h4>
                        <section>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_ortu">Nama Orang Tua Wali(Salah Satu)</label>
                                        <input class="form-control" type="text" id="nama_ortu" name="nama_ortu" readonly value="<?= $biok->nama_ortu ?>" placeholder="Nama Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kontak_hp_ortu">Nomor Kontak Orang Tua Wali</label>
                                        <input class="form-control" id='kontak_hp_ortu' type="text" name="kontak_hp_ortu" readonly value="<?= $biok->kontak_hp_ortu ?>" placeholder="Nomor Kontak Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pendidikan_ortu">Pendidikan Terakhir Orang Tua Wali</label>
                                        <select name="pendidikan_ortu" id="pendidikan_ortu" class="form-control" readonly>
                                            <option value="">
                                                ----- Pilih Pendidikan Terakhir Orang Tua Wali -----
                                            </option>
                                            <option value="TK/KB" <?= $biok->pendidikan_ortu == "TK/KB" ? 'selected' : null ?>>TK/KB</option>
                                            <option value="SD" <?= $biok->pendidikan_ortu == "SD" ? 'selected' : null ?>>SD</option>
                                            <option value="SMP/SLTP" <?= $biok->pendidikan_ortu == "SMP/SLTP" ? 'selected' : null ?>>SMP/SLTP</option>
                                            <option value="SMA/SLTA" <?= $biok->pendidikan_ortu == "SMA/SLTA" ? 'selected' : null ?>>SMA/SLTA</option>
                                            <option value="D1" <?= $biok->pendidikan_ortu == "D1" ? 'selected' : null ?>>D1</option>
                                            <option value="D2" <?= $biok->pendidikan_ortu == "D2" ? 'selected' : null ?>>D2</option>
                                            <option value="D3" <?= $biok->pendidikan_ortu == "D3" ? 'selected' : null ?>>D3</option>
                                            <option value="D4" <?= $biok->pendidikan_ortu == "D4" ? 'selected' : null ?>>D4</option>
                                            <option value="S1" <?= $biok->pendidikan_ortu == "S1" ? 'selected' : null ?>>S1</option>
                                            <option value="S2" <?= $biok->pendidikan_ortu == "S2" ? 'selected' : null ?>>S2</option>
                                            <option value="S3" <?= $biok->pendidikan_ortu == "S3" ? 'selected' : null ?>>S3</option>
                                            <option value="NON-FORMAL" <?= $biok->pendidikan_ortu == "NON-FORMAL" ? 'selected' : null ?>>NON-FORMAL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pekerjaan_ortu">Pekerjaan Orang Tua Wali</label>
                                        <input class="form-control" id='pekerjaan_ortu' type="text" name="pekerjaan_ortu" readonly value="<?= $biok->pekerjaan_ortu ?>" placeholder="Pekerjaan Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua Wali</label>
                                        <input class="form-control" id='alamat_ortu' type="text" name="alamat_ortu" readonly value="<?= $biok->alamat_ortu ?>" placeholder="Alamat Orang Tua Wali (Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desa_ortu">Desa Asal Orang Tua Wali</label>
                                        <input class="form-control" id='desa_ortu' type="text" name="desa_ortu" readonly value="<?= $biok->desa_ortu ?>" placeholder="Desa Asal Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kecamatan_ortu">Kecamatan Asal Orang Tua Wali</label>
                                        <input class="form-control" id='kecamatan_ortu' type="text" name="kecamatan_ortu" readonly value="<?= $biok->kecamatan_ortu ?>" placeholder="Kecamatan Asal Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kabupaten_ortu">Kabupaten Asal Orang Tua Wali</label>
                                        <input class="form-control" id='kabupaten_ortu' type="text" name="kabupaten_ortu" readonly value="<?= $biok->kabupaten_ortu ?>" placeholder="Kabupaten Asal Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="provinsi_ortu">Provinsi Asal Orang Tua Wali</label>
                                        <input class="form-control" id='provinsi_ortu' type="text" name="provinsi_ortu" readonly value="<?= $biok->provinsi_ortu ?>" placeholder="Provinsi Asal Orang Tua Wali">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="<?= base_url('bio') ?>" class="btn btn-primary m-b-0">Kembali</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>