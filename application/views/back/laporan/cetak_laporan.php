<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">



<table border="0" width="100%" style="font-family: Arial, Helvetica, sans-serif;">
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
    <div class="col-sm-12 mt-4">
        <h5 class="text-center" style="text-align: center; margin-top:5px;">LAPORAN PENDAFTARAN SISWA</h5>
    </div>
</div>

<div class="single-table">
    <table class="table table-bordered text-center">
        <thead class="text-uppercase">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">NISN</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Tahun Ajaran</th>
                <th scope="col">Status Pendaftaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($get_laporan as $row) { ?>
                <tr>
                    <td scope="row"><?= $no++ ?></td>
                    <td><?= $row->nama_lengkap ?></td>
                    <td><?= $row->nisn ?></td>
                    <td><?= $row->nama_jurusan ?></td>
                    <td><?= $row->asal_sekolah ?></td>
                    <td><?= $row->tahun_akademik ?></td>
                    <td><?= $row->status_daftar ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div style="float:right;">
    <br>Ketapang, <?php echo $this->M_laporan->tgl_id(date('d-m-Y')); ?><br>
    Kepala Sekolah,<br><br><br><br>

    <b><u>Katarina Hingi Tukan, S.Ag.,M.Pd</u></b><br>
    NIKY. 191.0381.0717
</div>

<script type="text/javascript">
    window.print();
</script>