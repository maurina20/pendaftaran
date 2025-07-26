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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Pendaftaran</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Akademik</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftar as $row) { ?>
                                    <tr>
                                        <td><?= $row->nama_lengkap ?></td>
                                        <td><?= $row->nama_jurusan ?></td>
                                        <td><?= $row->tahun_akademik ?></td>
                                        <td><?= $row->asal_sekolah ?></td>
                                        <td><?= $row->status_daftar ?></td>
                                        <td><span>
                                                <a href="<?= base_url('daftar/detail/' . $row->id_siswa) ?>" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                                                <?php if ($this->session->hak_akses == 'ADMIN') { ?>
                                                    <a data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Yakin akan menghapus data?')" href="<?= base_url('daftar/delete_daftar/' . $row->id_daftar) ?>"><i class="fa fa-trash"></i></a>
                                                <?php } ?>
                                                <?php if ($row->status_daftar == 'DAFTAR') { ?>
                                                    <a data-toggle="tooltip" data-placement="top" title="Terima" onclick="return confirm('Terima Siswa ini?')" href="<?= base_url('daftar/terima/' . $row->id_daftar) ?>"><i class="fa fa-check"></i></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Tolak" onclick="return confirm('Tolak Siswa ini?')" href="<?= base_url('daftar/tolak/' . $row->id_daftar) ?>"><i class="fa fa-times"></i></a>
                                                <?php } ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Akademik</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status Pendaftaran</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>