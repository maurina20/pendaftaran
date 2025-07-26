<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">


<table border="0" width="100%" style="font-family: Arial, Helvetica, sans-serif;" cellpadding="0px">
    <tr>
        <td align="center" rowspan="2" style="padding:0px;">
            <img src="<?= base_url() ?>assets/images/log.png" alt="logo SMK ST.PETRUS" width="130px">
        </td>
        <td style="font-size:15px;"><strong>YAYASAN PELAYANAN KASIH FATIMA <br>SEKOLAH MENENGAH KEJURUAN</strong><br>
            <b style="font-size: 19px;">SMK SANTO PETRUS KETAPANG</b>
        </td>
    </tr>
    <tr>
        <td style="font-size:12px; ">PROGRAM KEAHLIAN : TEKNIK INFORMATIKA DAN KOMPUTER & BANGUNAN GEDUNG<br>
            KOMPETENSI KEAHLIAN : - Pengembangan Perangkat Lunak dan Gim,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Desain Komunikasi Visual,<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Desain Pemodelan dan Informasi Bangunan</td>
    </tr>
    <tr align="center">
        <td style="font-size:10px; " colspan="2">Alamat: Jl. Jenderal Sudirman No. 23 Ketapang, Kalimantan Barat, Telp (0534) 33365, Kode Pos 78813. <i>Email. smksantopetrus@yahoo.co.id</i></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <div style="height: 1px; background-color: black; width: 100%;">
                <hr size="0" style="margin:0px;">
            </div>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-sm-12 mt-1">
        <h5 class="text-center" style="text-align: center; margin-top:15px; margin:bottom 10px;">FORMULIR PENDAFTARAN SISWA</h5>
    </div>
</div>

<img src="<?= base_url() ?>assets/dokung/<?= $dafsis->pasfoto ?>" alt="logo SMK ST.PETRUS" style="float:right;" width="120px" height="160">
<h6>A. Data Calon Peserta Didik</h6>
<section>
    <div class="row">
        <div class="col-10">
            <table class="form-table" style="font-size: 14px;">
                <tr>
                    <td>1. Nama Lengkap</td>
                    <td> : </td>
                    <td>&nbsp;<?= $dafsis->nama_lengkap ?></td>
                </tr>
                <tr>
                    <td>2. NIK</td>
                    <td> : </td>
                    <td>&nbsp;<?= $dafsis->nik ?></td>
                </tr>
                <tr>
                    <td>3. Tempat & Tanggal Lahir</td>
                    <td> : </td>
                    <td>&nbsp;<?= $dafsis->tempat_lahir ?>, <?= date("d F Y", strtotime($dafsis->tgl_lahir)); ?></td>
                </tr>
                <tr>
                    <td>4. Jenis Kelamin</td>
                    <td> : </td>
                    <td>&nbsp;<?= $dafsis->jenis_kelamin ?></td>
                </tr>
            </table>
        </div>
        <div class="col-12">
            <table class="form-table" style="font-size: 14px;">
                <tr>
                    <td>5. NISN</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->nisn ?></td>
                </tr>
                <tr>
                    <td>6. Agama</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->agama ?></td>
                </tr>
                <tr>
                    <td>7. Kontak Hp Siswa</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->kontak_hp_siswa ?></td>
                </tr>
                <tr>
                    <td>8. Alamat Siswa</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->alamat_siswa ?>, <?= $dafsis->desa_siswa ?>, Kec. <?= $dafsis->kecamatan_siswa ?>,</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;Kab. <?= $dafsis->kabupaten_siswa ?>, Prov.<?= $dafsis->provinsi_siswa ?></td>
                </tr>
                <tr>
                    <td>9. Asal Sekolah Asal</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->asal_sekolah ?></td>
                </tr>
                <tr>
                    <td>10. Tahun Lulus</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->tahun_lulus ?></td>
                </tr>
                <tr>
                    <td>11. Alamat Sekolah Asal</td>
                    <td>&nbsp;&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->alamat_sekolah ?>, <?= $dafsis->desa_sekolah ?>, Kec. <?= $dafsis->kecamatan_sekolah ?>,</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;Kab. <?= $dafsis->kabupaten_sekolah ?>, Prov.<?= $dafsis->provinsi_sekolah ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<br>
<h6>B. Data Orang Tua Wali</h6>
<section>
    <div class="row">
        <div class="col-10">
            <table class="form-table" style="font-size: 14px;">
                <tr>
                    <td>1. Nama Orang Tua Wali</td>
                    <td>&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->nama_ortu ?></td>
                </tr>
                <tr>
                    <td>2. Nomor Kontak </td>
                    <td>&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->kontak_hp_ortu ?></td>
                </tr>
                <tr>
                    <td>3. Pendidikan Terakhir </td>
                    <td>&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->pendidikan_ortu ?></td>
                </tr>
                <tr>
                    <td>4. Pekerjaan </td>
                    <td>&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->pekerjaan_ortu ?></td>
                </tr>
                <tr>
                    <td>5. Alamat </td>
                    <td>&nbsp;&nbsp;: </td>
                    <td>&nbsp;<?= $dafsis->alamat_ortu ?>, <?= $dafsis->desa_ortu ?>, Kec. <?= $dafsis->kecamatan_ortu ?>,</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>&nbsp;Kab. <?= $dafsis->kabupaten_ortu ?>, Prov.<?= $dafsis->provinsi_ortu ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<br>
<div style="float:left;font-size:10px;">
    <h6>Dokumen yang harus dilampirkan :</h6>
    <ol>
        <li>Fotocopy akta kelahiran siswa 1 lembar</li>
        <li>Fotocopy Kartu Keluarga dan KTP Orang Tua Wali 1 lembar</li>
        <li>Pasphoto Hitam Putih siswa ukuran 3 x 4 sebanyak 5 lembar</li>
        <li>Fotocopy Rapor</li>
        <li>Fotocopy Ijazah/SKHUN dilegalisir 1 lembar</li>
    </ol>
</div>
<br><br><br><br><br>
<div style="float:right;">
    <table>
        <tr align="center">
            <td>Ketapang, <?php echo $this->M_laporan->tgl_id(date('d-m-Y')); ?></td>
        </tr>
        <tr align="center">
            <td>Orang Tua Wali,</td>
        </tr>
        <tr align="center">
            <br><br>
        </tr>
        <tr align="center">
            <td>(<?= $dafsis->nama_ortu ?>)</td>
        </tr>
    </table>
</div>