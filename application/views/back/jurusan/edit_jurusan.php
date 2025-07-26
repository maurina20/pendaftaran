<?php $this->load->view('back/jurusan/data_jurusan') ?>

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Ubah Data</h4>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('hapus'); ?>
            <?= validation_errors() ?>
            <div class="basic-form">
                <form action="<?= base_url('jurusan/ubah_jurusan') ?>" method="post">
                    <input type="hidden" name="id_jurusan" value="<?= $jurusank->id_jurusan ?>" class="form-control">
                    <input type="hidden" class="form-control" name="nama_jurusan_lama" value="<?= $jurusank->nama_jurusan ?>" required>
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" id="nama_jurusan" class="form-control" name="nama_jurusan" value="<?= $jurusank->nama_jurusan ?>" placeholder="Nama Jurusan">
                    </div>

                    <button type="submit" class="btn btn-sm btn-warning">Ubah Data</button>
                    <button type="submit" class="btn btn-sm btn-dark">Reset Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>