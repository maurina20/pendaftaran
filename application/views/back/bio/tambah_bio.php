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
                    <form action="<?= base_url('biosis/tambah_bio') ?>" method="post">
                        <div>
                            <h4>Data Siswa</h4>
                            <section>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap Siswa</label>
                                            <input class="form-control" type="text" name="nama_lengkap" required placeholder="Nama Lengkap Siswa">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="jenis_kelamin" required class="form-control">
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
                                            <label for="nik">NIK</label>
                                            <input class="form-control" id='nik' type="text" name="nik" required placeholder="Nomor Induk Kependudukan">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <input class="form-control" id='nisn' type="text" name="nisn" required placeholder="Nomor Induk Siswa Nasional">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input class="form-control" id='tempat_lahir' type="text" name="tempat_lahir" required placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="mdate" class="m-t-20">Tanggal Lahir</label>
                                            <input type="text" class="form-control" placeholder="2000-03-30" id="mdate" name="tgl_lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <select name="agama" id="agama" class="form-control" required>
                                                <option value="">
                                                    ----- Pilih Agama -----
                                                </option>
                                                <option value="KATHOLIK">KATHOLIK</option>
                                                <option value="PROTESTAN">PROTESTAN</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="KONGHUCU">KONGHUCU</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kontak_hp_siswa">No. Kontak Siswa</label>
                                            <input class="form-control" id="kontak_hp_siswa" type="text" name="kontak_hp_siswa" required placeholder="Nomor Kontak Siswa">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_siswa">Alamat Siswa</label>
                                            <input class="form-control" id='alamat_siswa' type="text" name="alamat_siswa" required placeholder="Alamat Siswa (Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desa_siswa">Desa Asal Siswa</label>
                                            <input class="form-control" id='desa_siswa' type="text" name="desa_siswa" required placeholder="Desa Asal Siswa">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kecamatan_siswa">Kecamatan Asal Siswa</label>
                                            <input class="form-control" id='kecamatan_siswa' type="text" name="kecamatan_siswa" required placeholder="Kecamatan Asal Siswa">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kabupaten_siswa">Kabupaten Asal Siswa</label>
                                            <input class="form-control" id='kabupaten_siswa' type="text" name="kabupaten_siswa" required placeholder="Kabupaten Asal Siswa">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="provinsi_siswa">Provinsi Asal Siswa</label>
                                            <input class="form-control" id='provinsi_siswa' type="text" name="provinsi_siswa" required placeholder="Provinsi Asal Siswa">
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
                                            <input class="form-control" id="asal_sekolah" type="text" name="asal_sekolah" required placeholder="Asal Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tahun_lulus">Tahun Lulus</label>
                                            <input class="form-control" id='tahun_lulus' type="number" name="tahun_lulus" required placeholder="Tahun Lulus">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_sekolah">Alamat Sekolah</label>
                                            <input class="form-control" id='alamat_sekolah' type="text" name="alamat_sekolah" required placeholder="Alamat Sekolah (Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desa_sekolah">Desa Asal Sekolah</label>
                                            <input class="form-control" id='desa_sekolah' type="text" name="desa_sekolah" required placeholder="Desa Asal Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kecamatan_sekolah">Kecamatan Asal Sekolah</label>
                                            <input class="form-control" id='kecamatan_sekolah' type="text" name="kecamatan_sekolah" required placeholder="Kecamatan Asal Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kabupaten_sekolah">Kabupaten Asal Sekolah</label>
                                            <input class="form-control" id='kabupaten_sekolah' type="text" name="kabupaten_sekolah" required placeholder="Kabupaten Asal Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="provinsi_sekolah">Provinsi Asal Sekolah</label>
                                            <input class="form-control" id='provinsi_sekolah' type="text" name="provinsi_sekolah" required placeholder="Provinsi Asal Sekolah">
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
                                            <input class="form-control" type="text" id="nama_ortu" name="nama_ortu" required placeholder="Nama Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kontak_hp_ortu">Nomor Kontak Orang Tua Wali</label>
                                            <input class="form-control" id='kontak_hp_ortu' type="text" name="kontak_hp_ortu" required placeholder="Nomor Kontak Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pendidikan_ortu">Pendidikan Terakhir Orang Tua Wali</label>
                                            <select name="pendidikan_ortu" id="pendidikan_ortu" class="form-control" required>
                                                <option value="">
                                                    ----- Pilih Pendidikan Terakhir Orang Tua Wali -----
                                                </option>
                                                <option value="TK/KB">TK/KB</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP/SLTP">SMP/SLTP</option>
                                                <option value="SMA/SLTA">SMA/SLTA</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                                <option value="NON-FORMAL">NON-FORMAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pekerjaan_ortu">Pekerjaan Orang Tua Wali</label>
                                            <input class="form-control" id='pekerjaan_ortu' type="text" name="pekerjaan_ortu" required placeholder="Pekerjaan Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_ortu">Alamat Orang Tua Wali</label>
                                            <input class="form-control" id='alamat_ortu' type="text" name="alamat_ortu" required placeholder="Alamat Orang Tua Wali(Tanpa Desa, Kecamatan, Kabupaten, Provinsi)">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desa_ortu">Desa Asal Orang Tua Wali</label>
                                            <input class="form-control" id='desa_ortu' type="text" name="desa_ortu" required placeholder="Desa Asal Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kecamatan_ortu">Kecamatan Asal Orang Tua Wali</label>
                                            <input class="form-control" id='kecamatan_ortu' type="text" name="kecamatan_ortu" required placeholder="Kecamatan Asal Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kabupaten_ortu">Kabupaten Asal Orang Tua Wali</label>
                                            <input class="form-control" id='kabupaten_ortu' type="text" name="kabupaten_ortu" required placeholder="Kabupaten Asal Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="provinsi_ortu">Provinsi Asal Orang Tua Wali</label>
                                            <input class="form-control" id='provinsi_ortu' type="text" name="provinsi_ortu" required placeholder="Provinsi Asal Orang Tua Wali">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary m-b-0">Simpan Data</button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>