<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- CSS files -->
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- <a href="."><img src="<?= base_url(); ?>assets/static/logo.svg" height="36" alt=""></a> -->
                <h1>Simple CMS</h1>
                <small class="text-muted">by <strong>Inkubator Bisnis LPPM</strong></small>
            </div>
            <?= form_open('', ['class' => 'card card-md', 'autocomplete' => 'off']); ?>
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <h2 class="card-title text-center mb-4">Sign in to your account</h2>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input autofocus onfocus="this.select()" value="<?= set_value('username'); ?>" name="username" type="text" class="form-control" placeholder="Enter Username">
                    <?= form_error('username'); ?>
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            </a>
                        </span>
                    </div>
                    <?= form_error('password'); ?>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </div>
            <?= form_close(); ?>
            <!-- <div class="text-center text-muted mt">
                Don't have account yet? <a href="<?= base_url("signup"); ?>" tabindex="-1">Sign up</a>
            </div> -->
        </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>