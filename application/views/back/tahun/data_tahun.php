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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Data tahun
                            <?php if ($title == 'Edit Data') { ?>
                                <a class="btn btn-primary btn-sm float-right" href="<?= base_url('tahun') ?>">
                                    Tambah Data
                                </a>
                            <?php } ?>
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name tahun</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($tahun as $row) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->tahun_akademik ?></td>
                                        <td><?php if ($row->status_tahun == 'Aktif') { ?>
                                                <span class="badge badge-success px-2"><?= $row->status_tahun ?></span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger px-2"><?= $row->status_tahun ?></span>
                                            <?php } ?>
                                        </td>
                                        <td><span><a href="<?= base_url('tahun/edit_tahun/' . $row->id_tahun) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                                <a data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Yakin akan menghapus data?')" href="<?= base_url('tahun/delete_tahun/' . $row->id_tahun) ?>"><i class="fa fa-trash color-danger"></i></a></span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>