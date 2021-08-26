
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>#</th>
                <th>Nama</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $n = $this->uri->segment('3') + 1;
                foreach ($uploadF as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><?= $row->name; ?></td>
                        <td width="100" class="text-left">
                                <a href="<?= base_url('assets/dist/unggahan/'.$row->file_upload); ?>" class="btn btn-light">
                                    Download
                                </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row mt-4">
            <div class="col-12">
            <?= $this->pagination->create_links(); ?>
            </div>
</div>