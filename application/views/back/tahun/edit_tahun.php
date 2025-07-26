<?php $this->load->view('back/tahun/data_tahun') ?>

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Ubah Data</h4>
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->flashdata('hapus'); ?>
            <?= validation_errors() ?>
            <div class="basic-form">
                <form action="<?= base_url('tahun/ubah_tahun') ?>" method="post">
                    <input type="hidden" name="id_tahun" value="<?= $tahunk->id_tahun ?>" class="form-control">
                    <input type="hidden" class="form-control" name="tahun_akademik_lama" value="<?= $tahunk->tahun_akademik ?>" required>
                    <div class="form-group">
                        <label for="tahun_akademik">Nama Tahun</label>
                        <input type="text" id="tahun_akademik" class="form-control" name="tahun_akademik" value="<?= $tahunk->tahun_akademik ?>" placeholder="Nama tahun">
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <select name="status_tahun" id="" class="form-control" required>
                            <option value="">
                                ----- Pilih Status tahun -----
                            </option>
                            <option value="Aktif" <?= $tahunk->status_tahun == "Aktif" ? 'selected' : null ?>>Aktif</option>
                            <option value="Non-Aktif" <?= $tahunk->status_tahun == "Non-Aktif" ? 'selected' : null ?>>Non-Aktif</option>
                        </select>

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