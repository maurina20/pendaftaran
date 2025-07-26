<?php $this->load->view('back/tahun/data_tahun') ?>

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data</h4>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('hapus'); ?>
            <?= validation_errors() ?>
            <div class="basic-form">
                <form action="<?= base_url('tahun/tambah_tahun') ?>" method="post">
                    <div class="form-group">
                        <label for="tahun_akademik">Tahun Akademik</label>
                        <input type="text" id="tahun_akademik" class="form-control" name="tahun_akademik" placeholder="Tahun Akademik">
                    </div>
                    <button type="submit" class="btn btn-dark">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>