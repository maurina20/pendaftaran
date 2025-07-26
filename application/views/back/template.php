<?php $this->load->view('back/template/meta'); ?>
<div id="main-wrapper">
    <?php $this->load->view('back/template/header'); ?>
    <?php $this->load->view('back/template/sidebar'); ?>

    <div class="content-body">
        <?php echo $content; ?>
    </div>
    <?php $this->load->view('back/template/footer'); ?>
</div>

<?php $this->load->view('back/template/script'); ?>