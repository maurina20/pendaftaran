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
                    <h4 class="card-title">Data Biodata Siswa</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Tahun Lulus</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($bio as $row) { ?>
                                    <tr>
                                        <td><?= $row->nama_lengkap ?></td>
                                        <td><?= $row->tahun_lulus ?></td>
                                        <td><?= $row->asal_sekolah ?></td>
                                        <td><?= $row->jenis_kelamin ?></td>
                                        <td><?= $row->alamat_siswa ?></td>
                                        <td><span>
                                                <a href="<?= base_url('bio/detail/' . $row->id_siswa) ?>" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                                                <?php if ($this->session->hak_akses == 'ADMIN') { ?>
                                                    <a href="<?= base_url('bio/edit_bio/' . $row->id_siswa) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Yakin akan menghapus data?')" href="<?= base_url('bio/delete_bio/' . $row->id_siswa) ?>"><i class="fa fa-trash color-danger"></i></a>
                                                <?php } ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Tahun Lulus</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
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