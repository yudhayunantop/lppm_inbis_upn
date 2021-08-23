<?= $this->session->flashdata('pesan'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">All <?= $title; ?></h5>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-striped datatable">
            <thead>
                <th>#</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Date</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($comment as $row) : ?>
                    <tr>
                        <td width="50" class="align-middle"><?= $no++; ?></td>
                        <td width="100" class="align-middle">
                            <?php $avatar = $row->avatar ? $row->avatar : $this->config->item('user_avatar_default'); ?>
                            <img src="<?= base_url('assets/dist/img/users/') . $avatar ?>" alt="User Image" class="rounded" style="height: 50px;width: 50px;">
                        </td>
                        <td width="150" class="align-middle"><?= $row->fullname; ?></td>
                        <td class="align-middle"><?= $row->comment_body; ?></td>
                        <td width="100" class="align-middle"><?= $row->comment_date; ?></td>
                        <td width="180" class="align-middle text-right">
                            <div class="btn-group">
                                <?php
                                $view = base_url("post/view/") . $row->post_slug . "#c" . $row->comment_id;
                                ?>
                                <a target="_blank" href="<?= $view; ?>" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> View</a>
                                <a href="<?= base_url('comment/delete/') . $row->comment_id; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-default btn-sm"><i class="fa fa-trash"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>