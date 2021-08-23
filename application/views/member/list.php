<?= $this->session->flashdata('msg'); ?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h5 class="card-title">List <?= $title; ?></h5>
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
                <th>Username</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                if ($members) :
                    $n = 1;
                    foreach ($members as $row) : ?>
                        <tr>
                            <td width="50" class="align-middle"><?= $n++; ?>.</td>
                            <td width="150" class="align-middle">
                                <?php $avatar = $row->avatar ? $row->avatar : $this->config->item('user_avatar_default'); ?>
                                <img src="<?= base_url('assets/dist/img/users/') . $avatar ?>" alt="User Image" class="rounded" style="height: 50px;width: 50px;">
                            </td>
                            <td width="150" class="align-middle"><?= $row->fullname; ?></td>
                            <td width="100" class="align-middle"><?= $row->username; ?></td>
                            <td width="100" class="align-middle text-right">
                                <div class="btn-group">
                                    <a href="<?= base_url('member/delete/') . $row->user_id; ?>" onclick="return confirm('Confirm Delete ?');" class="btn btn-default btn-sm">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="text-center">There is not already member registered.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>