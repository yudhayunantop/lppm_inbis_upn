<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title"><?= $title; ?></h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-default">Cancel</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?= $this->session->flashdata('msg'); ?>
                <?= form_open_multipart(); ?>
                <div class="form-group">
                    <label for="fullname">Name</label>
                    <input placeholder="Name" value="<?= set_value('fullname', userdata()->fullname); ?>" type="text" name="fullname" id="fullname" class="form-control">
                    <?= form_error('fullname'); ?>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input placeholder="Username" value="<?= set_value('username', userdata()->username); ?>" type="text" name="username" id="username" class="form-control">
                    <?= form_error('username'); ?>
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="avatar" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                        <label class="custom-file-label" for="avatar" data-browse="Browse">Choose File ...</label>
                    </div>
                    <?= form_error('avatar'); ?>
                </div>
                <button type="submit" class="btn bg-primary btn-block">Save</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>