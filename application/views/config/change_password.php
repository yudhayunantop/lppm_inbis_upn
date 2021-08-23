<?= form_open(); ?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title">Form <?= $title; ?></h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <a href="<?= base_url('dashboard'); ?>" class="btn btn-sm btn-default">Cancel</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?= form_open(); ?>
                <?= $this->session->flashdata('msg'); ?>
                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input placeholder="Old Password" type="password" name="old_password" id="old_password" class="form-control">
                    <?= form_error('old_password'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input placeholder="New Password" type="password" name="new_password" id="new_password" class="form-control">
                    <?= form_error('new_password'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Re-type Password</label>
                    <input placeholder="Re-type Password" type="password" name="password" id="password" class="form-control">
                    <?= form_error('password'); ?>
                </div>
                <button type="submit" class="btn btn-block bg-primary">Save</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>