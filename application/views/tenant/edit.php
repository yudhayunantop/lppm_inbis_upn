<?= form_open_multipart(); ?>
<div class="text-right mb-3">
    <a href="<?= base_url('uploadf/data'); ?>" class="btn btn-default">
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
                <h3 class="card-title">Edit Upload</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Judul File</label>
                    <input id="name" name="name" class="form-control" type="text" placeholder="Judul File..." value="<?= set_value('name', $uploadF->name); ?>" autocomplete="off">
                    <?= form_error('name'); ?>
                </div>

                <div class="form-group">
                    <label class="form-label" for="file_upload">Upload File</label>
                    <div class="custom-file">
                    <?php echo form_open_multipart('uploadf/save');?>
                        <input type="file" class="custom-file-input" id="file_upload" name="file_upload" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="file_upload">Choose file</label>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>