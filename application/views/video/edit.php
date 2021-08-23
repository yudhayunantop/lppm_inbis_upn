<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('video'); ?>" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> Back
    </a>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Save Changes
    </button>
</div>

<div class="row">
    <div class="col-md-8 order-last order-md-first">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header">
                <h3 class="card-title">Link Video YouTube</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="link">Link</label>
                    <input id="link" name="link" class="form-control" type="text" placeholder="Link..." value="<?= set_value('link', $video->link); ?>" autocomplete="off">
                    <?= form_error('link'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>