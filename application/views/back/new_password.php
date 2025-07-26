<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PPDB - Ubah Password</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/log.png">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #34deeb;
        }
    </style>
</head>

<body class="h-100">

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h4 class="text-center"><img src="<?= base_url() ?>assets/images/log.png" alt="logo" width="45" height="45"> SMK ST.PETRUS KETAPANG</h4>

                                <form class="mt-5 mb-5 login-input" action="<?= base_url('auth/ubah_password') ?>" method="post">
                                    <?= $this->session->flashdata('message'); ?>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new_pasword" placeholder="Password Baru" required>
                                        <input type="hidden" class="form-control" name="id_pengguna" value="<?= $penggunak->id_pengguna ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pasword_new" required placeholder="Ulangi Password Baru">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Ubah</button>
                                </form>

                                <p class="mt-5 login-form__footer"><a href="<?= base_url('auth') ?>" class="text-primary">Back to Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url() ?>assets/plugins/common/common.min.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/js/settings.js"></script>
    <script src="<?= base_url() ?>assets/js/gleek.js"></script>
    <script src="<?= base_url() ?>assets/js/styleSwitcher.js"></script>
</body>

</html>