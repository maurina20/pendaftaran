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
                    <h4 class="card-title">Data Pengguna<a class="btn btn-primary btn-sm float-right" href="<?= base_url('pengguna/tambah') ?>">
                            Tambah Data
                        </a></h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Nama Pengguna</th>
                                    <th>Email</th>
                                    <th>Hak Akses</th>
                                    <th>Status Pengguna</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pengguna as $row) { ?>
                                    <tr>
                                        <td><?= $row->nama_pengguna ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->hak_akses ?></td>
                                        <td><?php if ($row->status_pengguna == 'Aktif') { ?>
                                                <span class="badge badge-success px-2"><?= $row->status_pengguna ?></span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger px-2"><?= $row->status_pengguna ?></span>
                                            <?php } ?>
                                        </td>
                                        <td><span><a href="<?= base_url('pengguna/edit_pengguna/' . $row->id_pengguna) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                <a data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Yakin akan menghapus data?')" href="<?= base_url('pengguna/delete_pengguna/' . $row->id_pengguna) ?>"><i class="fa fa-trash color-danger"></i></a></span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Pengguna</th>
                                    <th>Email</th>
                                    <th>Hak Akses</th>
                                    <th>Status Pengguna</th>
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