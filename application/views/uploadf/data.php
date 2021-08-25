<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="<?= base_url('uploadf/create'); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> New File</a>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>#</th>
                <th>Nama</th>
                <th>File</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($uploadF as $row) : ?>
                    <tr>
                        <td width="50"><?= $n++; ?>.</td>
                        <td width="100"><?= $row->name; ?></td>
                        <td width="100"><?= $row->file_upload; ?></td>
                        <td width="100" class="text-right">
                            <div class="btn-group">
                                <a href="<?= base_url('uploadf/delete/') . $row->id_upload; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('assets/dist/unggahan/'.$row->file_upload); ?>" class="btn btn-default btn-sm"><i class="fa fa-download"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>