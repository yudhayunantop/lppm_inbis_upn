<main id="main">

<div class="content">
    <div class="container-xl">

    <div class="content">
        <div class="container-xl">
            <h1>Daftar Tenant</h1>
            <p>Berikut merupakan daftar tenant yang telah bekerja sama dengan IBT Technopark UPN "Veteran" Jawa Timur</p>
            <br>
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title">Daftar Tenant (<?= $jumlahtenant;?>)</h5>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-striped datatable">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Logo</th>
                        <th>Link</th>
                    </thead>
                    <tbody>
                        <?php
                        $n = $this->uri->segment('3') + 1;
                        foreach ($tenant as $row) : ?>
                            <tr>
                                <td width="50"><?= $n++; ?>.</td>
                                <td width="100"><img src="<?= base_url('assets/dist/logo/'.$row->logo); ?>" alt="" width="100" class="text-right"></td>
                                <td width="100"><?= $row->nama_tenant; ?></td>
                                <td width="100" class="text-left">
                                    <a href="<?= $row->linktenant; ?>" class="btn btn-light">
                                        Kunjungi
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>
                        
        <div class="row mt-4">
                    <div class="col-12">
                    <?= $this->pagination->create_links(); ?>
                    </div>
        </div>

        </div>
    </div>