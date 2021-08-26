<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('tenant/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Tenant</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>#</th>
                <th>Link</th>
                <th>Logo</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($tenant as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><?= $row->linktenant; ?></td>
                        <td width="100"><?= $row->logo; ?></td>
                        <td width="100" class="text-right">
                            <div class="btn-group">
                                <a href="<?= base_url('tenant/delete/') . $row->id_tenant; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('assets/dist/logo/'.$row->logo); ?>" class="btn btn-default btn-sm"><i class="fa fa-download"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
