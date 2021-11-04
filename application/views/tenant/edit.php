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
				<?= form_error('error'); ?>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>

            <div class="card-body">
				<div class="form-group">
					<label for="linktenant">Link Tenant</label>
					<input id="linktenant" name="linktenant" class="form-control" type="text" placeholder="Link Website Tenant" value="<?= set_value('link',$tenant->linktenant); ?>" autocomplete="off">
					<?= form_error('linktenant'); ?>
				</div>
				<div class="form-group">
					<label for="namatenant">Nama Tenant</label>
					<input id="namatenant" name="namatenant" class="form-control" type="text" placeholder="Nama Tenant" value="<?= set_value('namatenant',$tenant->nama_tenant); ?>" autocomplete="off">
					<?= form_error('namatenant'); ?>
				</div>
                <div class="form-group">
                    <label class="form-label" for="file_logo">Upload File</label>
                    <div class="custom-file">
                    <?php echo form_open_multipart(`tenant/edit/$tenant->id_tenant`);?>
                        <input type="file" class="custom-file-input" id="file_logo" name="file_logo" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="file_logo"><?= set_value('file_logo',$tenant->logo); ?></label>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>
